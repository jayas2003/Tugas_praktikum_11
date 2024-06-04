@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Data Unit Kerja Baru</h1>
    <form action="{{ route('unit_kerja.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Unit Kerja:</label>
            <input type="text" name
