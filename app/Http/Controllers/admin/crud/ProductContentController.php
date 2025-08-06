<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product\ProductPackage;
use App\Models\product\ProdukContentModel;

class ProductContentController extends Controller
{
    public function dashboard()
    {
        $contents = ProdukContentModel::latest()->get();
        $packages = ProductPackage::latest()->get();

        return view('admin.package.produk-admin', compact('contents', 'packages'));
    }

    public function create()
    {
        return view('admin.crud.produk-konten.create-konten-produk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|in:Wedding,Prewed,Dekorasi,MUA,Dokumentasi',
            'judul_konten' => 'required|string|max:255',
            'deskripsi_konten' => 'nullable|string',
            'fitur' => 'nullable|string',
            'image_konten' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $Kategoriexists = ProdukContentModel::where('kategori', $request->kategori)->exists();

        if ($Kategoriexists) {
            return back()->withErrors(['kategori' => 'Kategori '.$request->kategori.' sudah dipakai, hapus dulu sebelum menambah lagi.'])->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image_konten')) {
            $imagePath = $request->file('image_konten')->store('contents', 'public');
        }

        ProdukContentModel::create([
            'kategori' => $request->kategori,
            'judul_konten' => $request->judul_konten,
            'deskripsi_konten' => $request->deskripsi_konten,
            'fitur' => $request->fitur ? json_encode(array_map('trim', explode(',', $request->fitur))) : null,
            'image_konten' => $imagePath,
        ]);

        return redirect()->route('admin.produk.dashboard')->with('success', 'Konten berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $content = ProdukContentModel::findOrFail($id);
        return view('admin.crud.produk-konten.edit-konten-produk', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = ProdukContentModel::findOrFail($id);

        $request->validate([
            'kategori' => 'required|string|max:100',
            'judul_konten' => 'required|string|max:255',
            'deskripsi_konten' => 'nullable|string',
            'fitur' => 'nullable|string',
            'image_konten' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fitur = $request->fitur
        ? array_map('trim', explode(',', $request->fitur))
        : [];

        $imagePath = $content->image_konten;
        if ($request->hasFile('image_konten')) {
            $imagePath = $request->file('image_konten')->store('contents', 'public');
        }

        $content->update([
            'kategori' => $request->kategori,
            'judul_konten' => $request->judul_konten,
            'deskripsi_konten' => $request->deskripsi_konten,
            'fitur' => $fitur,
            'image_konten' => $imagePath,
        ]);

        return redirect()->route('admin.produk.dashboard')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $content = ProdukContentModel::findOrFail($id);
        $content->delete();

        return redirect()->route('admin.produk.dashboard')->with('success', 'Konten berhasil dihapus.');
    }
}
