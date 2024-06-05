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
                            <a href="{{ route('industris.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('industris.update', $industris->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Industri</label>
                                <input type="text" class="form-control @error('nama_industri') is-invalid @enderror"
                                    name="nama_industri" value="{{ $industris->nama_industri }}" placeholder="Industri Name"
                                    required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ $industris->alamat }}" placeholder="Masukan Alamat" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tahun Kerjasama</label>
                                <input type="date" class="form-control @error('harga') is-invalid @enderror"
                                    name="tahun_kerjasama" value="{{ $industris->tahun_kerjasama }}"
                                    placeholder="Masukan tahun" required>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jurusan :</label>
                                <select name="id_jurusan" class="form-control" id="from-select">
                                    <option disabled selected>Pilih Jurusan</option>
                                    @forelse($jurusan as $data)
                                        <option value="{{ $data->id }}" @error('id_jurusan') is-invalid @enderror>
                                            {{ $data->nama_jurusan }}</option>
                                    @empty
                                        <option value="" disabled>Data Belum Tersedia</option>
                                    @endforelse
                                </select>

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
