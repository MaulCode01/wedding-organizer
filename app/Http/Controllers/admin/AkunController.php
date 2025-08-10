<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\auth\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function App\Helper\path_view;

class AkunController extends Controller
{

    public function dataClient(){
        $dataUser = AuthModel::where('role', 'client')->get();
        $dataAdmin = AuthModel::where('role', 'admin')->get();
        $view = path_view('admin.data-client');
        return view($view, compact('dataUser', 'dataAdmin'));
    }

    public function showCreateAdmin(){
        $view = path_view('admin.crud.acount.create-admin');
        return view($view);
    }

    public function showEditAdmin($id){
        $dataAdmin = AuthModel::findOrFail($id);
        $view = path_view('admin.crud.acount.edit-admin');
        return view($view, compact('dataAdmin'));
    }

    public function storeAdmin(Request $request){
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'required|email|unique:auth,email',
            'password' => 'required|min:8'
        ], [
            'nama_lengkap.required' => 'Silahkan masukan Nama Lengkap',
            'email.required' => 'Username tidak boleh kosong',
            'password.required' => 'Username tidak boleh kosong',
            'username.max' => 'Username tidak boleh lebih dari 100 karater',
            'email.unique' => 'Email yang Anda masukan sudah tersedia',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
        ]);

        AuthModel::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'admin',

        ]);

        return redirect()->route('admin.data-pengguna')->with('success', 'Akun Admin Berhasil Dibuat');
    }


    public function editAdmin(Request $request, $id){
        $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'nullable|email|unique:auth,email,' . $id,
            'password' => 'nullable|min:8'
        ], [
            'nama_lengkap.required' => 'Masukan Nama Lengkap yang baru'
        ]);

        $acountAdmin = AuthModel::findOrFail($id);
        $acountAdmin->update(attributes: [
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'password' => $request->filled('password')
            ? bcrypt($request->password)
            : $acountAdmin->password,
        ]);

        return redirect()->route('admin.data-pengguna')->with('success', 'Akun Admin Berhasil Diupdate');
    }

    public function deleteAcount($id){
        $acountAdmin = AuthModel::findOrFail($id);
        $acountAdmin->delete();

        return redirect()->route('admin.data-pengguna')->with('succes', 'Data Pengguna Berhasil di hapus');
    }
}
