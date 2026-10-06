@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Mata Kuliah</h1>

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div>
                <label for="nama_mk">Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" id="nama_mk">
            </div>

            <div>
                <label for="sks">SKS</label>
                <input type="number" name="sks" id="sks">
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection