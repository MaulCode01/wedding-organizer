<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\TransactionModel;
use App\Models\auth\AuthModel;
use App\Models\client\AboutModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class TransaksiController extends Controller
{
    public function showTransaksi(){
        $transactions = TransactionModel::with(['user', 'booking.package'])->get();
        $view = path_view('admin.package.transaksi-admin');
        return view($view, compact('transactions'));
    }

    public function confirmTrasanction($id)
    {
        $trx = TransactionModel::findOrFail($id);

        if ($trx->status === 'lunas') {
            return back()->with('info', 'Transaksi ini sudah lunas.');
        }

        $trx->status = 'lunas';
        $trx->save();

        return back()->with('success', 'Transaksi berhasil dikonfirmasi sebagai lunas.');
    }

    public function kwetansi($id)
    {
        $trx = TransactionModel::with(['user', 'booking.package'])->findOrFail($id);
        $about = AboutModel::first();
        $userAdmin = AuthModel::where('role', 'admin')->first();

        if ($trx->status !== 'lunas') {
            return back()->with('error', 'Transaksi belum lunas, tidak bisa mencetak struk.');
        }

        $view = path_view('admin.crud.kwetansi-transaksi');
        return view($view, compact('trx', 'about', 'userAdmin'));
    }

    public function destroy($id)
    {
        $trx = TransactionModel::findOrFail($id);
        $trx->delete();

        return back()->with('success', 'Transaksi berhasil dihapus.');
    }
}
