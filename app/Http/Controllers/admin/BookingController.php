<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BookingModel;
use App\Models\admin\TransactionModel;
use App\Models\product\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function App\Helper\path_view;

class BookingController extends Controller
{

    public function showBooking(){
        $booking = BookingModel::with(['user', 'package'])->orderBy('created_at', 'desc')->get();
        $view = path_view('admin.package.booking-admin');
        return view($view, compact('booking'));
    }

    public function store(Request $request)
{
    $request->validate([
        'package_id' => 'required|exists:product_packages,id',
        'tanggal_acara' => [
            'required',
            'date',
            function ($attribute, $value, $fail) use ($request) {
                $exists = BookingModel::where('package_id', $request->package_id)
                    ->where('tanggal_acara', $value)
                    ->whereIn('status', ['pending', 'disetujui'])
                    ->exists();

                if ($exists) {
                    $fail('Maaf, paket ini sudah dibooking pada tanggal tersebut.');
                }
            },
        ],
        'lokasi_acara' => 'required|max:255',
        'catatan' => 'nullable|string|max:500',
    ]);

    BookingModel::create([
        'user_id' => Auth::id(),
        'package_id' => $request->package_id,
        'tanggal_acara' => $request->tanggal_acara,
        'lokasi_acara' => $request->tanggal_acara,
        'catatan' => $request->catatan,
        'status' => 'pending',
    ]);

    return redirect()->back()->with('success', 'Booking berhasil diajukan. Tunggu konfirmasi dari admin.');
}

    public function show($id)
    {
        $dataProduct = ProductPackage::findOrFail($id);

        $bookedDates = BookingModel::where('package_id', $id)
            ->whereNotIn('status', ['dibatalkan'])

            ->pluck('tanggal_acara')
            ->map(function ($date) {
                return \Carbon\Carbon::parse($date)->format('Y-m-d');
            })
            ->toArray();

        $view = path_view('page.produk-detail');
        return view($view, compact('dataProduct', 'bookedDates'));
    }

    public function verify($id)
{
    $booking = BookingModel::with('package')->findOrFail($id);

    if (!$booking->bukti_pembayaran) {
        return back()->withErrors('User belum upload bukti pembayaran.');
    }

    if ($booking->status === 'disetujui') {
        return back()->with('success', 'Booking sudah dikonfirmasi.');
    }

    $booking->status = 'disetujui';
    $booking->save();

    TransactionModel::create([
        'booking_id' => $booking->id,
        'user_id' => $booking->user_id,
        'status' => 'belum_lunas',
        'jumlah_bayar' => $booking->package->harga,
        'bukti_bayar' => $booking->bukti_pembayaran,
        'metode_bayar' => 'transfer',
    ]);

    return back()->with('success', 'Booking berhasil dikonfirmasi dan transaksi dibuat.');
}



//-------------------------------------------------------------

    public function index()
    {
        $dataBooking = BookingModel::with('package')->where('user_id', Auth::id())->get();
        $view = path_view('client.product-client');
        return view($view, compact('dataBooking'));
    }


    public function upload(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:booking,id',
            'bukti_pembayaran' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $booking = BookingModel::where('id', $request->booking_id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($request->hasFile('bukti_pembayaran')) {
            if ($booking->bukti_pembayaran && file_exists(public_path('aset/bukti/' . $booking->bukti_pembayaran))) {
                unlink(public_path('aset/bukti/' . $booking->bukti_pembayaran));
            }

            $imageUpload = time() . '_bukti_pembayaran.' . $request->bukti_pembayaran->extension();
            $request->bukti_pembayaran->move(public_path('aset/bukti/'), $imageUpload);
            $booking->bukti_pembayaran = $imageUpload;
        }

        $booking->save();

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diupload. Tunggu konfirmasi Admin.');
    }


    public function batal($id)
    {
        $booking = BookingModel::where('id', $id)
            ->where('user_id', Auth::id())
            ->whereIn('status', ['pending', 'disetujui'])
            ->firstOrFail();

        $booking->status = 'dibatalkan';
        $booking->save();

        return redirect()->back()->with('success', 'Booking berhasil dibatalkan.');
    }

    public function deleteBooking($id){
        $booking = BookingModel::findOrFail($id);
        $booking->delete();

        return redirect()->back()->with('success', 'Data Booking berhasil d Hapus');
    }

}
