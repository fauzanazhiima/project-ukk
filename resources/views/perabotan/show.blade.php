@extends('layouts.app')

@section('title', 'Detail Perabotan')

@section('content')
    <div class="container">
        <h1>Detail Perabotan</h1>
        <div class="card">
            <div class="card-header">
                <h3>{{ $perabotan->nama }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Deskripsi:</strong> {{ $perabotan->deskripsi }}</p>
                <p><strong>Harga:</strong> Rp{{ number_format($perabotan->harga, 2, ',', '.') }}</p>
                <p><strong>Stok:</strong> {{ $perabotan->stok }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('perabotan.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('perabotan.edit', $perabotan->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('perabotan.destroy', $perabotan->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endsection
