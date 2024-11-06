@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <h4>Selamat datang, Admin!</h4>
                    <p>Ini adalah halaman khusus admin. Anda memiliki akses penuh ke fitur-fitur manajemen di sini.</p>
                    <ul>
                        <li><a href="{{ url('/manage-users') }}">Kelola Pengguna</a></li>
                        <li><a href="{{ url('/site-settings') }}">Pengaturan Situs</a></li>
                        <li><a href="{{ url('/reports') }}">Laporan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
