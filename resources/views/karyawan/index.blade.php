@extends('template')
@section('title', 'Kode Soal MyKaryawan')
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
            <th>Action</th>
        </tr>

        @forelse($karyawan as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ Str::title($row->namalengkap) }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('karyawan.view', $row->kodepegawai) }}" class="btn btn-warning">View</a>


                    <form action="{{ route('karyawan.destroy', $row->kodepegawai) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>
@endsection
