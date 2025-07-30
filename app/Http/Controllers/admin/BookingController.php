<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BookingModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class BookingController extends Controller
{

    public function showBooking(){
        $booking = BookingModel::orderBy('created_at', 'desc')->get();
        $view = path_view('admin.booking-admin');
        return view($view, compact('booking'));
    }


    public function storeBooking(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:100',
            'kontak' => 'required|string|max:20',
            'lokasi_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date|after:today',
            'kategori' => 'required|string|in:wedding,prewed,dekorasi,dokumentasi,mua',
            'catatan' => 'nullable|string|max:500',
        ]);

        BookingModel::create([
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $request->kontak,
            'lokasi_acara' => $request->lokasi_acara,
            'tanggal_acara' => $request->tanggal_acara,
            'kategori' => $request->kategori,
            'catatan' => $request->catatan,
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Booking berhasil dikirim! Tim kami akan menghubungi Anda.');
    }

    public function updateStatus(Request $request, $id){
        $booking = BookingModel::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return back()->with('success', 'Status booking berhasil diperbarui!');
    }

    public function deleteBooked($id){
        $dataBook = BookingModel::findOrFail($id);
        $dataBook->delete();

        return redirect()->back()->with('success', 'Data Berhasil dihaps');
    }

}
