@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori
                    <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Nama Wisata</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>{{ $data->wisata->nama_wisata }}</td>
                                        <td>
                                            <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kategori.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('kategori.show', $data->id) }}"
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
@endsection