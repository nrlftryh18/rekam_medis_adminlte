@extends('adminlte::page')

@section('title', 'Tambah Cek Up')

@section('content_header')
    <h1 class="m-0 text-dark">Cek Up</h1>
@stop

@section('content')
    <form action="" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputCervical">Cervical</label>
                        <input type="text" class="form-control @error('cervical') is-invalid @enderror" id="exampleInputCervical" placeholder="Cervical" name="Cervical" value="{{old('cervical')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputThoraxal">Thoraxal</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputThoraxal" placeholder="Thoraxal" name="Thoraxl" value="{{old('Toraxal')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLumbar">Lumbar</label>
                        <input type="Lumbar" class="form-control @error('Lumbar') is-invalid @enderror" id="exampleInputLumbar" placeholder="Lumbar" name="Lumbar" value="{{old('Lumbar')}}">
                        @error('Lumbar') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSarcal">Sarcal</label>
                        <input type="Sarcal" class="form-control @error('Sarcal') is-invalid @enderror" id="exampleInputSarcal" placeholder="Sarcal" name="Sarcal">
                        @error('Sarcal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Pelvis</label>
                        <input type="Pelvis" class="form-control @error('Pelvis') is-invalid @enderror" id="exampleInputPelvis" placeholder="Pelvis" name="Pelvis">
                        @error('Pelvis') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPlintiran">Plintiran</label>
                        <input type="Plintiran" class="form-control @error('Plintiran') is-invalid @enderror" id="exampleInputPlintiran" placeholder="Plintiran" name="Plintiran">
                        @error('Plintiran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKompresi">Kompresi</label>
                        <input type="Kompresi" class="form-control @error('Kompresi') is-invalid @enderror" id="exampleInputKompresi" placeholder="Kompresi" name="Kompresi">
                        @error('Kompresi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType_veterbra">Type veterbra</label>
                        <input type="Type_veterbra" class="form-control @error('Type_veterbra') is-invalid @enderror" id="exampleInputType_veterbra" placeholder="Type veterbra" name="Type_veterbra">
                        @error('Type_veterbra') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType_thoraxal">Type thoraxal</label>
                        <input type="Type_thoraxal" class="form-control @error('Type_thoraxal') is-invalid @enderror" id="exampleInputType_thoraxal" placeholder="Type thoraxal" name="Type_thoraxal">
                        @error('Type_thoraxal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputVisual">Visual</label>
                        <input type="Visual" class="form-control @error('Visual') is-invalid @enderror" id="exampleInputVisual" placeholder="Visual" name="Visual">
                        @error('Visual') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop