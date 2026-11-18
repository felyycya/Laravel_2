<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = ['Felicia Chelsyneira', 'Nayla zahara hidayat', 'aghni zahraeni', 'haidar hakim', 'pandu satria atharik'];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}