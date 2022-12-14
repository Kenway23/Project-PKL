@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Kategori
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $kategori->deskripsi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Kategori</label>
                            @if (isset($kategori) && $kategori->foto)
                                <p>
                                    <img src="{{ asset('images/katego$kategori/' . $kategori->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama" value="{{ $kategori->wisata->nama_wisata }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        \
        /\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/////////////////////////////////////////////////////////////////////////////////////]
        '=
@endsection