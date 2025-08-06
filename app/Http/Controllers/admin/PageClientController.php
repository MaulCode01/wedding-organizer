<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\client\AboutModel;
use App\Models\client\HeroModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class PageClientController extends Controller
{
    public function berandaClient(){
        $hero = HeroModel::first();
        $view = path_view('admin.page.page-client');
        return view($view,  compact('hero'));
    }

    public function updateHero(request $request, $id){
        $request->validate([
            'title' => 'required|string|max:100',
            'subTitle' => 'required|string',
            'label' => 'required|string',
            'image_1' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
            'image_2' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
            'image_3' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',

        ], [
            'title.required' => 'Judul Tidak boleh kosong',
            'subTitle.required' => 'Sub judul Tidak boleh kosong',
            'label.required' => 'Label Tidak boleh kosong',
            'title.max' => 'Tidak boleh lebih dari 100 karekter',
        ]);

        $hero = HeroModel::findOrFail($id);

        $hero->title    = $request->title;
        $hero->subTitle = $request->subTitle;
        $hero->label    = $request->label;

        if ($request->hasFile('image_1')) {
            if ($hero->image_1 && file_exists(public_path('aset/upload' . $hero->image_1))) {
                unlink(public_path('aset/upload' . $hero->image_1));
            }

            $imageName1 = time() . '_1.' . $request->image_1->extension();
            $request->image_1->move(public_path('aset/upload'), $imageName1);
            $hero->image_1 = $imageName1;
        }

        if ($request->hasFile('image_2')) {
            if ($hero->image_2 && file_exists(public_path('aset/upload' . $hero->image_2))) {
                unlink(public_path('aset/upload' . $hero->image_2));
            }

            $imageName2 = time() . '_2.' . $request->image_2->extension();
            $request->image_2->move(public_path('aset/upload'), $imageName2);
            $hero->image_2 = $imageName2;
        }

        if ($request->hasFile('image_3')) {
            if ($hero->image_3 && file_exists(public_path('aset/upload' . $hero->image_3))) {
                unlink(public_path('aset/upload' . $hero->image_3));
            }

            $imageName3 = time() . '_3.' . $request->image_3->extension();
            $request->image_3->move(public_path('aset/upload'), $imageName3);
            $hero->image_3 = $imageName3;
        }



        $hero->save();

        return redirect()->back()->with('success', 'Hero Section berhasil di perbarui');

    }

    // ============================================================================================

    public function tentangClient(){
        $About = AboutModel::first();
        $view = path_view('admin.page.page-about-client');
        return view($view, compact('About'));
    }


    public function updateAbout(request $request, $id){
        $request->validate([
            'title' => 'required|string|max:100',
            'subTitle' => 'required|string',
            'alamat' => 'required|string',
            'kontak' => 'nullable|string',
            'image_1' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
            'image_2' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',

        ], [
            'title.required' => 'Judul Tidak boleh kosong',
            'subTitle.required' => 'Sub Judul Tidak boleh kosong',
            'alamat.required' => 'Alamat Tidak boleh kosong',
            'kontak.required' => 'Kontak Tidak boleh kosong',
            'title.max' => 'Tidak boleh lebih dari 100 karekter',
        ]);

        $About = AboutModel::findOrFail($id);

        $About->title    = $request->title;
        $About->subTitle = $request->subTitle;
        $About->alamat    = $request->alamat;
        $About->kontak    = $request->kontak;

        if ($request->hasFile('image_1')) {
            if ($About->image_1 && file_exists(public_path('aset/upload' . $About->image_1))) {
                unlink(public_path('aset/upload' . $About->image_1));
            }

            $imageName1 = time() . '_1.' . $request->image_1->extension();
            $request->image_1->move(public_path('aset/upload'), $imageName1);
            $About->image_1 = $imageName1;
        }

        if ($request->hasFile('image_2')) {
            if ($About->image_2 && file_exists(public_path('aset/upload' . $About->image_2))) {
                unlink(public_path('aset/upload' . $About->image_2));
            }

            $imageName2 = time() . '_2.' . $request->image_2->extension();
            $request->image_2->move(public_path('aset/upload'), $imageName2);
            $About->image_2 = $imageName2;
        }

        $About->save();

        return redirect()->back()->with('success', 'About Section berhasil di perbarui');

    }

}
