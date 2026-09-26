<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $nama = 'Zakil (App Perpustakaan)';
        $kelas = 'Workshop Pemrograman Framework';

        return view('about', compact('nama', 'kelas'));
    }
}