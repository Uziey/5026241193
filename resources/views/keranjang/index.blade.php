@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('Keranjang.create') }}">Tambah Keranjang</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($Keranjang as $row)
            <tr>
                <td>{{ $row->ID }}</td> <!-- ID digunakan sebagai kode pembelian -->
                <td>{{ $row->KodeBarang}}</td>
                <td>{{ $row->Jumlah}}</td>
                <td>{{ number_format($row->Harga, 0, ',', '.')}}</td>
                <td>{{ number_format($row->Harga * $row->Jumlah, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjang/beli" class="btn btn-warning btn-sm">Beli</a>

                    <a href="/keranjang/batal/{{ $row->ID }}" class="btn btn-danger btn-sm">Batal</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data belanja.</td>
            </tr>
        @endforelse
    </table>
@endsection
