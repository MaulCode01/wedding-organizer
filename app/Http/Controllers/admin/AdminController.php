<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BookingModel;
use App\Models\admin\TransactionModel;
use App\Models\auth\AuthModel;
use function App\Helper\path_view;

class AdminController extends Controller
{
    public function index(){
        $totalUnit = TransactionModel::where('status', 'lunas')->count('booking_id');
        $totalPendapatan = TransactionModel::with('booking.package')
            ->where('status', 'lunas')
            ->get()
            ->sum(fn($trx) => $trx->booking->package->harga);

        $dataUser = AuthModel::where('role', 'client')->count();

        $dataPenjualan = BookingModel::with([
            'user',
            'package.content',
            'transaction'
        ])->get();

        $dataTopSelling = BookingModel::with(['package.content', 'transaction'])->select('package_id')
            ->selectRaw('COUNT(*) as terjual')->selectRaw('SUM(transactions.jumlah_bayar) as pendapatan')
            ->join('transactions', 'transactions.booking_id', '=', 'booking.id')
            ->groupBy('package_id')
            ->orderByDesc('pendapatan')
            ->take(10)
            ->get();


        $view = path_view('admin.dashboard-admin');
        return view($view, compact('dataUser', 'totalUnit', 'totalPendapatan', 'dataPenjualan', 'dataTopSelling'));
    }
}
