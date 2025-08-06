<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\KonsultanModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class KonsultanController extends Controller
{
    public function showConsult(){
        $konsult = KonsultanModel::orderBy('created_at', 'desc')->get();
        $view = path_view('admin.konsultan-admin');
        return view($view, compact('konsult'));
    }


    public function storeKonsultan(Request $request)
    {

        $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:100',
            'kontak' => [
                'required',
                'regex:/^(?:\+62|62|0)[0-9]{8,13}$/',
            ],


            'alamat_lengkap' => 'required|string|max:255',
            'catatan' => 'nullable|string|max:500',
        ]);

            $kontak = preg_replace('/[^0-9]/', '', $request->kontak);
            if (substr($kontak, 0, 1) === '0') {
                $kontak = '62' . substr($kontak, 1);
            }

        KonsultanModel::create([
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $kontak,
            'alamat_lengkap' => $request->alamat_lengkap,
            'catatan' => $request->catatan,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Konsultasi berhasil dikirim! Tim kami akan segera menghubungi Anda.');
        }

    public function updateStatus(Request $request, $id){
        $request->validate([
            'status' => 'required|in:pending,confirm,cancel',
        ]);

        $booking = KonsultanModel::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return back()->with('success', 'Status booking berhasil diperbarui!');
    }

    public function deleteConsult($id){
        $dataBook = KonsultanModel::findOrFail($id);
        $dataBook->delete();

        return redirect()->back()->with('success', 'Data Berhasil dihapus');
    }
}
