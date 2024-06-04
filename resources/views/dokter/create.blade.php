<!-- resources/views/dokter/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Dokter Baru</h1>
        <form action="{{ route('dokter.create') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Dokter:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="spesialis">Spesialis:</label>
                <input type="text" name="spesialis" id="spesialis" class="form-control" required>
            </div>
            <!-- Tambahkan elemen formulir lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Buat Dokter Baru</button>
        </form>
    </div>
@endsection
