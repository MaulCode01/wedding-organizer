<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\AboutModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class AboutController extends Controller
{
    public function about(){
        $aboutClient = AboutModel::first();
        $view = path_view('client.about-us');
        return view($view, compact('aboutClient'));
    }
}
