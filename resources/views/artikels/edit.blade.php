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
                            <a href="{{ route('artikels.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('artikels.update', $artikels->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="judul" value="{{ $artikels->judul}}" placeholder="artikels Name" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" class="form-control @error('deskirpsi') is-invalid @enderror" name="deskripsi"
                                    rows="3" placeholder="deskirpsi" required>{{ $artikels->deskripsi }}</textarea>
                                @error('deskirpsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">tanggal</label>
                                <input type="date" class="form-control @error('harga') is-invalid @enderror"
                                    name="tanggal" value="{{ $artikels->tanggal }}" placeholder="Masukan tanggal" required>
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" value="{{ $artikels->image }}"></input>
                                @error('image')
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
