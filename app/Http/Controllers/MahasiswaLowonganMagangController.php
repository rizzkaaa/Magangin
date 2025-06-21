<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaLowonganMagangController extends Controller
{

    public function appliedLowongan($id)
    {
        $peserta = Mahasiswa::with(['appliedLowongans.company'])->findOrFail($id);

        return response()->json([
            'peserta' => $peserta->nama,
            'lowongan_applied' => $peserta->appliedLowongans->map(function ($lowongan) {
                return [
                    'id' => $lowongan->id_lowongan,
                    'judul' => $lowongan->judul,
                    'perusahaan' => $lowongan->company->nama_company ?? null,
                    'status' => $lowongan->pivot->status,
                    'tgl_apply' => $lowongan->pivot->tgl_apply,
                    'jam_apply' => $lowongan->pivot->jam_apply,
                    'cv' => $lowongan->pivot->cv,
                ];
            }),
        ]);
    }
}
