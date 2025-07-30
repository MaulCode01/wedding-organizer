<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class PageClientController extends Controller
{
    public function berandaClient(){
        $view = path_view('admin.page.page-client');
        return view($view);
    }


    public function tentangClient(){
        $view = path_view('admin.page.page-about-client');
        return view($view);
    }
}
