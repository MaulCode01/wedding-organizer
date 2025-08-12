<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\AboutModel;
use App\Models\client\HeroModel;
use App\Models\product\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function App\Helper\path_view;

class HeroController extends Controller
{

    public function index(){

        $aboutClient = AboutModel::first();
        $heroClient = HeroModel::first();
        $topSelling = ProductPackage::topSelling();
        $view = path_view('client.home-page');
        return view($view, compact('heroClient', 'aboutClient', 'topSelling'));
    }


    public function contact(){
        $contact = AboutModel::first();
        $view = path_view('client.contact-us');
        return view($view, compact('contact'));
    }
}
