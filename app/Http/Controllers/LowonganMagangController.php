<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    // ✅ Get All Lowongan
    public function index()
    {
        $lowongan = Lowongan::with('company')->latest()->get();
        return response()->json($lowongan);
    }

    // ✅ Get Detail Lowongan
    public function show($id)
    {
        $lowongan = Lowongan::with('company')->findOrFail($id);
        return response()->json($lowongan);
    }

    // ✅ Store Lowongan Baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_company' => 'required|exists:company,id_company',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tgl_dibuat' => 'required|date',
            'deadline_apply' => 'required|date',
            'mulai_magang' => 'required|date',
            'selesai_magang' => 'required|date',
            'posisi' => 'required|string',
            'kuota' => 'required|integer',
            'syarat' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'uang_saku' => 'nullable|string',
        ]);

        $lowongan = Lowongan::create($validated);

        return response()->json([
            'message' => 'Lowongan berhasil ditambahkan',
            'data' => $lowongan,
        ], 201);
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $lowongan = Lowongan::findOrFail($id);

        $lowongan->update($request->all());

        return response()->json([
            'message' => 'Lowongan berhasil diperbarui',
            'data' => $lowongan,
        ]);
    }

    // ✅ Delete
    public function destroy($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        $lowongan->delete();

        return response()->json(['message' => 'Lowongan dihapus']);
    }
}
