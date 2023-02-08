@extends('adminlte::page')

@section('title', 'Data pasien')

@section('content_header')
    <h1 class="m-0 text-dark">Detail pasien</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                    
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="teks" class="form-control" id="inputNama" name="nama" value="{{old('nama')}}">
                            </div>
                        </div>    
                        <div class="mb-3 row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="teks" class="form-control" id="inputAlamat" name="alamat" value="{{old('alamat')}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputUsia" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-sm-10">
                            <input type="teks" class="form-control" id="inputUsia" name="usia" value="{{old('usia')}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputRiwayat_medis" class="col-sm-2 col-form-label">Riwayat medis</label>
                            <div class="col-sm-10">
                            <input type="teks" class="form-control" id="inputRiwayat medis" name="riwayat_medis" value="{{old('riwayat_medis')}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputKeluhan" class="col-sm-2 col-form-label">Keluhan</label>
                            <div class="col-sm-10">
                            <input type="teks" class="form-control" id="inputKeluhan" name="keluhan" value="{{old('keluhan')}}">
                            </div>
                                
                            <a href="" class="btn btn-primary mb-2">
                                Tambah
                            </a>

                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                            <table class="table table-hover table-bordered table-stripped" id="example2">
                                                <thead>
                                                <tr>
                                                    <th>Cervical</th>
                                                    <th>Thoraxal</th>
                                                    <th>Lumbar</th>
                                                    <th>Sarcal</th>
                                                    <th>Pelvis</th>
                                                    <th>Plintiran</th>
                                                    <th>Kompresi</th>
                                                    <th>Type Veterbra</th>
                                                    <th>Type thoraxal</th>
                                                    <th>Visual</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="" class="btn btn-primary btn-xs">
                                                                Edit
                                                            </a>
                                                            <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                                                Delete
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                            <table class="table table-hover table-bordered table-stripped" id="example2">
                                                <thead>
                                                <tr>
                                                    <th>Lain lain</th>
                                                    <th>Tindakan</th>
                                                    <th>Hasil</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="" class="btn btn-primary btn-xs">
                                                                Edit
                                                            </a>
                                                            <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                                                Delete
                                                            </a>
                                                        
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                        

                                            
                            <div class="row">
                                <div class="col-12">
                                        <div class="card-body">
                                            <table class="table table-hover table-bordered table-stripped" id="example2">
                                                <thead>
                                                <tr>
                                                    <th>Hasil pemeriksaan 1</th>
                                                    <th>Hasil pemeriksaan 2</th>
                                                    <th>Hasil pemeriksaan 3</th>
                                                    <th>Hasil pemeriksaan 4</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="" class="btn btn-primary btn-xs">
                                                                Edit
                                                            </a>
                                                            <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                                                Delete
                                                            </a>
                                                        
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush