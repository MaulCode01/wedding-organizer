<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\AboutModel;
use App\Models\client\HeroModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class HeroController extends Controller
{
    public function index(){

        $heroClient = HeroModel::first();
        $view = path_view('client.home-page');
        return view($view, compact('heroClient'));
    }


    public function contact(){
        $contact = AboutModel::first();
        $view = path_view('client.contact-us');
        return view($view, compact('contact'));
    }
}
