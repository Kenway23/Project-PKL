@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Artikel
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Artikel</label>
                            <input type="text" class="form-control" name="nama_artikel" value="{{ $artikel->nama_artikel }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $artikel->deskripsi }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto artikel</label>
                            @if (isset($artikel) && $artikel->foto)
                                <p>
                                    <img src="{{ asset('images/artikel/' . $artikel->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('deskripsi.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection