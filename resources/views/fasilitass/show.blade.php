@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Fasilitas') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('fasilitass.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="{{ asset('storage/fasilitass/' . $fasilitass->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $fasilitass->nama_fasilitas}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
