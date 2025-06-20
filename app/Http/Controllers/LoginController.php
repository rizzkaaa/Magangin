<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['login' => 'Email atau password salah'])->withInput();
        }

        if ($user->role == "mahasiswa") {
            $role = Mahasiswa::where('user_id', $user->id)->first();
            $nama = $role->nama;
        } else if ($user->role == "dosen") {
            $role = Dosen::where('user_id', $user->id)->first();
            $nama = $role->nama_dosen;
        } else {
            $role = Perusahaan::where('user_id', $user->id)->first();
            $nama = $role->nama_perusahaan;
        }

        // Simpan user login ke session (manual)
        session([
            'user_id' => $user->id,
            'user_email' => $user->email,
            'user_nama' => $nama,
            'user_role' => $user->role
        ]);

        return match($user->role) {
            'mahasiswa'  => redirect()->route('dashboard.mahasiswa'),
            'dosen'      => redirect()->route('dashboard.dosen'),
            'perusahaan' => redirect()->route('dashboard.perusahaan'),
            default      => abort(403, 'Role tidak dikenal.'),
        };
    }       
}
