@extends('template')
@section('title', 'Kode Soal myKaryawan')
@section('konten')

    <h2>Data Karyawan</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>kodepegawai</th>
            <th>namalengkap Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>

        @forelse($karyawan as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ Str::title($row->namalengkap) }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>
@endsection
