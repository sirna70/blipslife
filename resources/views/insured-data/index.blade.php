
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Asuransi</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('insured-data.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('insured-data.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>KTP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($insuredData as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->ktp }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->sex }}</td>
                                    <td>{{ $data->birth_of_date }}</td>
                                    <td>
                                        <a href="{{ route('insured-data.show', $data->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('insured-data.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('insured-data.destroy', $data->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $insuredData->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
