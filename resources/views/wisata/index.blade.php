@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Wisata
                        <a href="{{ route('wisata.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Wisata</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($wisata as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_wisata }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>
                                            <img src="{{ $data->image() }}" style="width: 100px; height:100px;"
                                                alt="">
                                        </td>
                                            <td>
                                                <form action="{{ route('wisata.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('wisata.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('wisata.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection