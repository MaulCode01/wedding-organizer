<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\AboutModel;
use App\Models\product\ProductPackage;
use App\Models\product\ProdukContentModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class ProdukController extends Controller
{
    public function wedding()
    {
        $kategori = 'Wedding';
        $content = ProdukContentModel::where('kategori', $kategori)->first();
        $kontak = AboutModel::first();
        $packages = ProductPackage::with('content')->whereHas('content', function ($package) {$package->where('kategori', 'Wedding');})->get();
        $view = path_view('client.page.wedding');
        return view($view, compact('content', 'packages', 'kategori', 'kontak'));
    }

    public function prewed()
    {
        $kategori = 'Prewed';
        $content = ProdukContentModel::where('kategori', $kategori)->first();

        $packages = $content
            ? ProductPackage::where('content_id', $content->id)->get()
            : collect();

        $view = path_view('client.page.prewed');
        return view($view, compact('content', 'packages', 'kategori'));
    }

    public function mua()
    {
        $kategori = 'MUA';
        $content = ProdukContentModel::where('kategori', $kategori)->first();
        $packages = $content
            ? ProductPackage::where('content_id', $content->id)->get()
            : collect();

        $view = path_view('client.page.mua');
        return view($view, compact('content', 'packages', 'kategori'));
    }

    public function decor()
    {
        $kategori = 'Dekorasi';
        $content = ProdukContentModel::where('kategori', $kategori)->first();

        $packages = $content
            ? ProductPackage::where('content_id', $content->id)->get()
            : collect();

        $view = path_view('client.page.dekorasi');
        return view($view, compact('content', 'packages', 'kategori'));
    }

    public function dokumentasi()
    {
        $kategori = 'Dokumentasi';
        $content = ProdukContentModel::where('kategori', $kategori)->first();

        $packages = $content
            ? ProductPackage::where('content_id', $content->id)->get()
            : collect();

        $view = path_view('client.page.dokumentasi');
        return view($view, compact('content', 'packages', 'kategori'));
    }


}
