<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product\ProductPackage;
use App\Models\product\ProdukContentModel;
use Illuminate\Support\Str;

use function App\Helper\path_view;

class ProductPackageController extends Controller
{

    public function create()
    {
        $product = ProdukContentModel::all();
        $view = path_view('admin.crud.produk-package.create-produk-package');
        return view($view, compact('product'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content_id'    => 'required|exists:product_content,id',
            'nama_paket'    => 'required|string|max:255',
            'harga'         => 'required|string',
            'fitur'         => 'nullable|string',
            'image_package' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fiturPackage = $request->fitur
            ? array_map('trim', explode(',', $request->fitur))
            : [];

        $harga = str_replace('.', '', $request->harga);

        $imageContent = null;
        if ($request->hasFile('image_package')) {
            $imageName1 = time() . '_image_package.' . $request->image_package->extension();
            $request->image_package->move(public_path('aset/upload'), $imageName1);
            $imageContent = $imageName1;
        }

        $kategori = ProdukContentModel::where('id', $validated['content_id'])->value('kategori');

        ProductPackage::create([
            'content_id'    => $validated['content_id'],
            'nama_paket'    => $validated['nama_paket'],
            'package_key'   => str::slug($kategori) . '-' . uniqid(),
            'harga'         => $harga,
            'fitur'         => json_encode($fiturPackage),
            'image_package' => $imageContent
        ]);

        return redirect()->route('admin.produk.dashboard')->with('success', 'Paket berhasil ditambahkan');
    }


    public function edit($id)
    {
        $package = ProductPackage::findOrFail($id);
        return view('admin.crud.produk-package.edit-produk-package', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = ProductPackage::findOrFail($id);

        $validated = $request->validate([
            'nama_paket'    => 'required|string|max:255',
            'harga'         => 'required|string',
            'fitur'         => 'nullable|string',
            'image_package' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fiturPackage = $request->fitur
            ? array_map('trim', explode(',', $request->fitur))
            : [];

        $imageContent = $package->image_package;
        if ($request->hasFile('image_package')) {
            if ($imageContent && file_exists(public_path('aset/upload/' . $imageContent))) {
                unlink(public_path('aset/upload/' . $imageContent));
            }
            $imageName1 = time() . '_image_package.' . $request->image_package->extension();
            $request->image_package->move(public_path('aset/upload'), $imageName1);
            $imageContent = $imageName1;
        }

        $package->update([
            'nama_paket'    => $validated['nama_paket'],
            'harga'         => $validated['harga'],
            'fitur'         => json_encode($fiturPackage),
            'image_package' => $imageContent,
        ]);

        return redirect()->route('admin.produk.dashboard')->with('success', 'Paket berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $package = ProductPackage::findOrFail($id);
        $package->delete();

        return redirect()->route('admin.produk.dashboard')->with('success', 'Paket berhasil dihapus.');
    }
}
