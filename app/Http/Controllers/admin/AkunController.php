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
            'username' => 'required|string|max:50',
            'email' => 'required|email|unique:auth,email',
            'password' => 'required|min:8'
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'email.required' => 'Username tidak boleh kosong',
            'password.required' => 'Username tidak boleh kosong',
            'username.max' => 'Username tidak boleh lebih dari 100 karater',
            'email.unique' => 'Email yang Anda masukan sudah tersedia',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
        ]);

        $acountAdmin = AuthModel::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'admin',

        ]);

        return redirect()->route('admin.data-pengguna')->with('success', 'Akun Admin Berhasil Dibuat');
    }


    public function editAdmin(Request $request, $id){
        $validated = $request->validate([
            'username' => 'required|string|max:50',
            'email' => 'required|email|unique:auth,email',
            'password' => 'nullable|min:8'
        ]);

        $acountAdmin = AuthModel::findOrFail($id);
        $acountAdmin->update([
        'username' => $request->username,
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
