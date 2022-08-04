@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control  @error('nama_kategori') is-invalid @enderror"
                                    name="nama_kategori" value="{{ $kategori->nama_kategori }}">
                                @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ $kategori->deskripsi }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Data Wisata</label>
                                <select name="id_wisata" class="form-control @error('id_wisata') is-invalid @enderror"
                                    readonly>
                                    @foreach ($wisata as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kategori->id_wisata ? 'selected' : '' }}>
                                            {{ $data->nama_wisata }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection