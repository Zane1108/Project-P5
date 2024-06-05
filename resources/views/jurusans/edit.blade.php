@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Dashboard') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('jurusans.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('jurusans.update', $jurusans->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama jurusan</label>
                                <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror"
                                    name="nama_jurusan" value="{{ $jurusans->nama_jurusan }}" placeholder="jurusans Name"
                                    required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
