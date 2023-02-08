@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop

@section('content')
    <form action="{{route('Pasiens.update', $pasien)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNama" placeholder="Nama lengkap" name="nama" value="{{$pasien->nama ?? old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputalamat">Almat</label>
                        <input type="teks" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputalamat" placeholder="Masukkan alamat" name="alamat" value="{{$pasien->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputusia">Usia</label>
                        <input type="usia" class="form-control @error('usia') is-invalid @enderror" id="exampleInputusia" placeholder="usia" name="usia" value="{{$pasien->usia ?? old('usia')}}">
                        @error('usia') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputriwayat_medis">Riwayat medis</label>
                        <input type="riwayat_medis" class="form-control @error('riwayat_medis') is-invalid @enderror" id="exampleInputriwayat_medis" placeholder="riwayat medis" name="riwayat_medis" value="{{$pasien->riwayat_medis ?? old('riwayat_medis')}}">
                        @error('riwayat_medis') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputkeluhan">Keluhan</label>
                        <input type="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="exampleInputkeluhan" placeholder="keluhan" name="keluhan" value="{{$pasien->keluhan ?? old('keluhan')}}">
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