<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class PackageController extends Controller
{
    public function weddingAdmin(){
        $view = path_view('admin.package.wedding-admin');
        return view($view);
    }

    public function dokumentasiAdmin(){
        $view = path_view('admin.package.wedding-admin');
        return view($view);
    }

    public function prewedAdmin(){
        $view = path_view('admin.package.wedding-admin');
        return view($view);
    }

    public function muaAdmin(){
        $view = path_view('admin.package.wedding-admin');
        return view($view);
    }

    public function dekorasiAdmin(){
        $view = path_view('admin.package.wedding-admin');
        return view($view);
    }
}
