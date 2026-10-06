@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>

        <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>

        <table>
            <thead>
                <tr>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $mk)
                    <tr>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection