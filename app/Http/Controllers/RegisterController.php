<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|in:mahasiswa,dosen,perusahaan',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $id = $user->id;
        $role = $user->role;

        if ($role == "mahasiswa") {
            Mahasiswa::create([
                'nama' => $request->nama,
                'user_id' => $id
            ]);
        } else if ($role == "dosen") {
            Dosen::create([
                'nama_dosen' => $request->nama,
                'user_id' => $id
            ]);
        } else {
            Perusahaan::create([
                'nama_perusahaan' => $request->nama,
                'user_id' => $id
            ]);
        }

        return redirect('/masuk')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
