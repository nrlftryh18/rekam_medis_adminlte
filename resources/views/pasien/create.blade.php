@extends('adminlte::page')

@section('title', 'Tambah Pasien')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Pasien</h1>
@stop

@section('content')
    <form action="{{route('Pasiens.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNama" placeholder="Nama lengkap" name="nama" value="{{old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputalamat" placeholder="Masukkan alamat" name="alamat" value="{{old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Usia</label>
                        <input type="usia" class="form-control @error('usia') is-invalid @enderror" id="exampleInputusia" placeholder="Masukkan usia" name="usia" value="{{old('usia')}}">
                        @error('usia') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">No hp</label>
                        <input type="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputno_hp" placeholder="nomor hp" name="no_hp">
                        @error('no_hp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Riwayat medis</label>
                        <input type="riwayat_medis" class="form-control @error('riwayat_medis') is-invalid @enderror" id="exampleInputriwayat medis" placeholder="riwayat medis" name="riwayat_medis">
                        @error('riwayat_medis') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Keluhan</label>
                        <input type="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="exampleInputkeluhan" placeholder="keluhan" name="keluhan">
                        @error('keluhan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('Pasiens.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop