<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\auth\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function App\Helper\path_view;

class ProfileClientController extends Controller
{
    public function showProfile($id){
        $dataUser = AuthModel::where('id', $id)->first();
        $view = path_view('client.profile-client');
        return view($view, compact('dataUser'));
    }

    public function updateProfile(Request $request, $id){
        $updateProfile = AuthModel::findOrFail($id);
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'password' => 'nullable|min:8',
            'image_profile' => 'nullable|mimes:png,jpg,jpeg',
            'kontak' => [
                'required',
                'regex:/^(?:\+62|62|0)[0-9]{8,13}$/',
            ],

            'alamat' => 'nullable|string|max:255',
            'about_me' => 'nullable',
        ], [
            'nama_lengkap.required' => 'Silahkan Masukan Nama Lengkap',
            'password.required' => 'Masukan Password Baru',
            'password.min' => 'Password minimal 8 karakter',
            'image_profile.mimes' => 'Format gambar harus berupa Png, Jpg dan Jpeg',
            'kontak.required' => 'Masukan kontak yang aktif',
        ]);

        $kontak_profile = preg_replace('/[^0-9]/', '', $request->kontak);
            if (substr($kontak_profile, 0, 1) === '0') {
                $kontak_profile = '62' . substr($kontak_profile, 1);
            }

        $imageProfile = null;
        if ($request->hasFile('image_profile')) {
            if ($imageProfile && file_exists(public_path('aset/upload/' . $imageProfile))) {
                unlink(public_path('aset/upload/' . $imageProfile));
            }
            $profile = time() . '_image_profile.' . $request->image_package->extension();
            $request->image_package->move(public_path('aset/upload'), $profile);
            $imageProfile = $profile;
        }

        $profile = $request->only(['nama_lengkap', 'email', 'kontak', 'alamat', 'about_me']);
        $updateProfile->update([
            'nama_lengkap' => $request->nama_lengkap,
            'image' => $imageProfile,
            'kontak' => $kontak_profile,
            'alamat' => $request->alamat,
            'about_me' => $request->about_me
        ]);

        if (!empty($request->password)) {
            $profile['password'] = bcrypt($request->password);
        }

        return redirect()->back()->with('success', 'Profile Berhasil di update');
    }
}
