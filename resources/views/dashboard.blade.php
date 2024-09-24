@extends('layouts.app')

@section('title', 'Dashboard User')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Dashboard User</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perabotans as $perabotan)
                        <tr>
                            <td>{{ $perabotan->nama }}</td>
                            <td>{{ $perabotan->deskripsi }}</td>
                            <td>Rp{{ number_format($perabotan->harga, 2, ',', '.') }}</td>
                            <td>{{ $perabotan->stok }}</td>
                            <td>
                                <a href="{{ route('perabotan.show', $perabotan->id) }}" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

    <style>
        body {
            background-color: #ffffff; /* Warna latar belakang */
        }
        

        .table {
            border-radius: 8px; /* Radius sudut untuk tabel */
            overflow: hidden; /* Menghindari overflow */
        }

        .table th {
            background-color: #343a40; /* Warna latar belakang header tabel */
            color: rgb(255, 255, 255); /* Warna teks header tabel */
        }

        .btn-info {
            transition: background-color 0.3s; /* Efek transisi pada tombol */
        }

        .btn-info:hover {
            background-color: #0b009e; /* Warna saat hover */
            color: white; /* Warna teks saat hover */
        }
    </style>
@endsection
