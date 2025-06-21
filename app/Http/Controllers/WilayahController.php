<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;

class WilayahController extends Controller
{
    // GET /api/provinsis
    public function getProvinsis()
    {
        return response()->json(Provinsi::all());
    }

    // GET /api/kabupatens?provinsi_id=11
    public function getKabupatens(Request $request)
    {
        $query = Kabupaten::query();

        if ($request->has('provinsi_id')) {
            $query->where('provinsi_id', $request->provinsi_id);
        }

        return response()->json($query->get());
    }

    // GET /api/kecamatans?kabupaten_id=1101
    public function getKecamatans(Request $request)
    {
        $query = Kecamatan::query();

        if ($request->has('kabupaten_id')) {
            $query->where('kabupaten_id', $request->kabupaten_id);
        }

        return response()->json($query->get());
    }
}
