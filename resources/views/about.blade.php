@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
    <h1>Halaman About</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Mata Kuliah: {{ $kelas }}</p>
@endsection