<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KeranjangController extends Controller
{
    public function index()
    {
        $Keranjang = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('Keranjang.index', compact('Keranjang'));
    }

    public function create()
    {
        return view('Keranjang.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah'     => 'required|integer',
            'Harga'      => 'required|integer',
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);


        return redirect('/keranjang')->with('success', 'Data Keranjang berhasil ditambahkan.');
    }

    public function destroy($ID)
    {

        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect('/keranjang')->with('success', 'Data Keranjang berhasil dihapus.');
    }


    public function edit($ID)
    {
        $Keranjang = DB::table('keranjangbelanja')->where('ID', $ID)->first();

        if (!$Keranjang) {
            abort(404);
        }

        return view('Keranjang.edit', compact('Keranjang'));
    }

    public function update(Request $request, $ID)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah'     => 'required|integer',
            'Harga'      => 'required|integer',
        ]);

        DB::table('keranjangbelanja')
            ->where('ID', $ID)
            ->update([
                'KodeBarang' => $request->KodeBarang,
                'Jumlah'     => $request->Jumlah,
                'Harga'      => $request->Harga,
            ]);

        return redirect('/keranjang')->with('success', 'Data Keranjang berhasil diubah.');
    }
}
