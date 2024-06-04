@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Data Periksa Baru</h1>
    <form action="{{ route('periksa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal Periksa:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pasien_id">ID Pasien:</label>
            <input type="number" name="pasien_id" id="pasien_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dokter_id">ID Dokter:</label>
            <input type="number" name="dokter_id" id="dokter_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
