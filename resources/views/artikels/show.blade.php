@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('artikels') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('artikels.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="{{ asset('storage/artikels/' . $artikels->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $artikels->judul }}</h4>
                        <p class="tmt-3">
                            {!! $artikels->deskripsi !!}
                        </p>
                         <p class="tmt-3">
                            {!! $artikels->tanggal !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
