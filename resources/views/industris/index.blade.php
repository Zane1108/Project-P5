@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Industri') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('industris.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama industri</th>
                                        <th>Alamat</th>
                                        <th>Tahun Kerjasama</th>
                                        <th>Jurusan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($industris as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_industri }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->tahun_kerjasama }}</td>
                                            <td>{{ $data->jurusans->nama_jurusan }}</td>
                                            <td>
                                                <form action="{{ route('industris.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('industris.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-dark">Show</a> |
                                                    <a href="{{ route('industris.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">Edit</a> |
                                                    <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                        class="btn btn-sm btn-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                Data data belum Tersedia.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {!! $industris->withQueryString()->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
