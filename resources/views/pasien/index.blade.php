@extends('adminlte::page')

@section('title', 'Data pasien')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pasien</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('Pasiens.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th>No hp</th>
                            <th>Riwayat medis</th>
                            <th>Keluhan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pasien as $key => $pasien)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$pasien->nama}}</td>
                                <td>{{$pasien->alamat}}</td>
                                <td>{{$pasien->usia}}</td>
                                <td>{{$pasien->no_hp}}</td>
                                <td>{{$pasien->riwayat_medis}}</td>
                                <td>{{$pasien->keluhan}}</td>
                                <td>
                                    <a href="{{route('Pasiens.edit', $pasien)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('Pasiens.destroy', $pasien)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                    <a href="{{route('Pasiens.edit', $pasien)}}" class="btn btn-primary btn-xs">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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