@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Industri') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('industris.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4>{{ $industris->nama_industri }}</h4>
                        <h5>{{ $industris->alamat }}</h5>
                        <p class="tmt-3">
                            Tahun Kejasama : {{ $industris->tahun_kerjasama}}
                        </p>
                        <p class="tmt-3">
                            Jurusan : {{ $industris->jurusans->nama_jurusan}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
