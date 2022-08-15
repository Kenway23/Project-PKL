@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Mobil
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" name="jenis_mobil" value="{{ $mobil->jenis_mobil }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $mobil->deskripsi }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Mobil</label>
                            @if (isset($mobil) && $mobil->foto)
                                <p>
                                    <img src="{{ asset('images/mobil/' . $mobil->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('mobil.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection