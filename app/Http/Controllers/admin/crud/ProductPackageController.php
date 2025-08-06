<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use App\Models\product\ProductPackage as ProductProductPackage;
use Illuminate\Http\Request;
use App\Models\product\ProductPackage;
use App\Models\product\ProdukContentModel;
use Illuminate\Support\Facades\DB;

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
            'content_id'   => 'required|exists:product_content,id',
            'nama_paket'   => 'required|string|max:255',
            'harga'        => 'required|numeric|min:1000',
            'fitur'        => 'nullable|string',
            'image_package' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fiturPackage = $request->fitur
        ? array_map('trim', explode(',', $request->fitur))
        : [];

        $harga = str_replace('.', '', $request->harga[0]);

        $imagePath = null;
        if ($request->hasFile('image_package')) {
            $imagePath = $request->file('image_package')->store('contents', 'public');
        }

        ProductPackage::create([
            'content_id'    => $validated['content_id'],
            'nama_paket'    => $validated['nama_paket'],
            'harga'         => $harga,
            'fitur'         => $fiturPackage,
            'image_package' => $imagePath
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

        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'fitur' => 'nullable|json',
        ]);

        $package->update([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'fitur' => $request->fitur,
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
