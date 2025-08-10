<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\product\ProductPackage;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class DetailProductController extends Controller
{
    public function showDetail($package_key){
        $dataProduct = ProductPackage::where('package_key', $package_key)->firstOrFail();
        $view = path_view('page.produk-detail');
        return view($view, compact('dataProduct'));
    }
}
