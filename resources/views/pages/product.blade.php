@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h3>Daftar produk kami</h3>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>

    <div class="card">
        <div class="card-header">
            Produk Kami
        </div>
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                    <tr>
                        <td><strong>{{ $p['no'] }}</strong></td>
                        <td>{{ $p['nama'] }}</td>
                        <td>{{ $p['stok'] }}</td>
                        <td>{{ $p['harga'] }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <button class="btn btn-warning btn-sm text-white">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection