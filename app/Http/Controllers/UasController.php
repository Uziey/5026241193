<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UasController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->orderBy('kodepegawai')->get();
        return view('karyawan.index', compact('karyawan'));
    }

    public function view()
    {
        $karyawan = DB::table('karyawan')->orderBy('kodepegawai')->get();
        return view('karyawan.view', compact('karyawan'));
    }



    public function create()
    {
        return view('karyawan.create');
    }

    public function edit($kodepegawai)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();

        if (!$karyawan) {
            abort(404);
        }

        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $kodepegawai)
    {
        $request->validate([
            'kodepegawai' => [
                'required',
                'string',
                'max:10',
                Rule::unique('karyawan', 'kodepegawai')->ignore($kodepegawai, 'kodepegawai'),
            ],
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        DB::table('karyawan')
            ->where('kodepegawai', $kodepegawai)
            ->update([
                'kodepegawai' => $request->kodepegawai,
                'Nama' => $request->Nama,
                'Kelas' => $request->Kelas,
                'TanggalLahir' => $request->TanggalLahir,
            ]);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diubah.');
    }

    public function destroy($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
