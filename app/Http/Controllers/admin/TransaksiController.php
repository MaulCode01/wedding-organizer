<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class TransaksiController extends Controller
{
    public function showTransaksi(){
        $view = path_view('admin.package.transaksi-admin');
        return view($view);
    }
}
