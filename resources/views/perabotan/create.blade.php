@extends('layouts.app')

@section('content')
    <h1>Tambah Perabotan</h1>

    <form action="{{ route('perabotan.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" value="{{ old('nama') }}">
            @error('nama')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
        </div>
        <div>
            <label>Harga:</label>
            <input type="text" name="harga" value="{{ old('harga') }}">
            @error('harga')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label>Stok:</label>
            <input type="text" name="stok" value="{{ old('stok') }}">
            @error('stok')<div>{{ $message }}</div>@enderror
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
