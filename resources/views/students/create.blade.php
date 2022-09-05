@extends('layout/main')
@section('title','Form Tambah Data Mahasiswa')
@section('container');
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukan nama" name="nama" value="{{ old('nama' )}}">
                    @error('nama')
                        <div id="validationServer01Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NPM</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan NPM" name="nrp" value="{{ old('nrp' )}}">
                    @error('nrp')
                        <div id="validationServer02Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{ old('email' )}}">
                    @error('email')
                        <div id="validationServer02Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{ old('jurusan' )}}">
                    @error('jurusan')
                        <div id="validationServer02Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <!-- <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email">
                    @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan">
                    @error('jurusan')
                        <div id="validationServer04Feedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div> -->
                <button type="submit" class = "btn btn-primary my-3">Tambah Data !</button>
            </form>
        </div>
    </div>
</div>
@endsection