@extends('layouts.app')

@section('content')
    <h1>Edit Perabotan</h1>

    <form action="{{ route('perabotan.update', $perabotan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" value="{{ old('nama', $perabotan->nama) }}">
            @error('nama')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi">{{ old('deskripsi', $perabotan->deskripsi) }}</textarea>
        </div>
        <div>
            <label>Harga:</label>
            <input type="text" name="harga" value="{{ old('harga', $perabotan->harga) }}">
            @error('harga')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Stok:</label>
            <input type="text" name="stok" value="{{ old('stok', $perabotan->stok) }}">
            @error('stok')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Perbarui</button>
    </form>
@endsection
