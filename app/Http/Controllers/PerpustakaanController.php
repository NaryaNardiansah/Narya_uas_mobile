<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;


class PerpustakaanController extends Controller
{
    public function index()
    {
        return response()->json(Perpustakaan::all());
    }

    public function show($no)
    {
        $perpustakaan = Perpustakaan::find($no);
        if (!$perpustakaan) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($perpustakaan);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kategori' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $perpustakaan = Perpustakaan::create($request->all());
        return response()->json($perpustakaan, 201);
    }

    public function update(Request $request, $no)
    {
        $perpustakaan = Perpustakaan::find($no);
        if (!$perpustakaan) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $perpustakaan->update($request->all());
        return response()->json($perpustakaan);
    }

    public function destroy($no)
    {
        $perpustakaan = Perpustakaan::find($no);
        if (!$perpustakaan) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $perpustakaan->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
