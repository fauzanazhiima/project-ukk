@extends('layouts.app')

@section('content')
    <h1>Daftar Perabotan</h1>
    <a href="{{ route('perabotan.create') }}">Tambah Perabotan</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perabotans as $perabotan)
                <tr>
                    <td>{{ $perabotan->nama }}</td>
                    <td>{{ $perabotan->deskripsi }}</td>
                    <td>{{ $perabotan->harga }}</td>
                    <td>{{ $perabotan->stok }}</td>
                    <td>
                        <a href="{{ route('perabotan.show', $perabotan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('perabotan.edit', $perabotan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('perabotan.destroy', $perabotan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
