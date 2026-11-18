@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h3>Daftar Nama Mahasiswa</h3>
    <hr>
    
    <div class="card mb-3">
        <div class="card-body bg-light">
            <b>Kelas :</b> D4SM-48-01 <br>
            <b>Mata Kuliah :</b> Pemrograman Web Interaktif 2
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Daftar Anggota Kelas
        </div>
        <div class="card-body">
            <ul>
                @foreach($mahasiswa as $mhs)
                    <li>{{ $mhs }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection