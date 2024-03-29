@extends('layout/main')
@section('title','Data Mahasiswa')
@section('container');
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <h4 class="mt-1">Contoh penerpan fitur CRUD yang telah dibuat</h2>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            <ul class="list-group">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            @foreach( $students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->nama }}
                <a href="/students/{{ $student->id }}" class="badge bg-info"> detail </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection