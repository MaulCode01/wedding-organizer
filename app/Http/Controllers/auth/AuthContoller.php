<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\auth\AuthModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function App\Helper\path_view;

class AuthContoller extends Controller
{

    public function showLogin(){
        $view = path_view('auth.authentikasi');
        return view($view);
    }
    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $authentication = AuthModel::where('email', $credential['email'])->first();

        if (!$authentication) {
            return back()->withErrors([
                'email' => 'Email Anda tidak terdaftar'
            ]);
        }

        if (!Hash::check($credential['password'], $authentication->password)) {
            return back()->withErrors([
                'password' => 'Password Anda salah'
            ]);
        }

        if (Auth::attempt(['email' => $credential['email'], 'password' => $credential['password']])) {
            $request->session()->regenerate();

            $role = $authentication->role;

            session()->flash('success', 'Selamat Datang Kembali');

            return match ($role) {
                'admin' => redirect()->route('dashboard-admin'),
                'client' => redirect()->route('page.hero'),
                default => back()->withErrors(['email' => 'Role tidak dikenali']),
            };
        }

        return back()->withErrors([
            "email" => 'Email atau password salah'
        ]);


    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('success', 'Anda berhasil logout');

        return redirect()->route('page.hero');
    }

    public function showRegister(){
        $view = path_view('auth.registrasi');
        return view($view);
    }

    public function createAcount(Request $request){
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'required|email|unique:auth,email',
            'password' => 'required|min:8',
            'kontak' => 'nullable|numeric',
            'alamat' => 'nullable',
        ], [
            'nama_lengkap.required' => 'Silahkan Masukan Nama Lengkap dengan benar',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'kontak.required' => 'Kontak tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'nama_lengkap.max' => 'Tidak boleh lebih dari 50 karakter',
            'email.unique' => 'Email yang Anda masukan sudah tersedia',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
            'kontak.numeric' => 'Harus Berupa Angka'
        ]);

        $UserCreate = AuthModel::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'client',
            'kontak' => $validated['kontak'],
            'alamat' => $validated['alamat'],
        ]);

        return redirect()->route('auth.show.login')->with('success', 'Akun Anda berhasil dibuat');
    }

}
