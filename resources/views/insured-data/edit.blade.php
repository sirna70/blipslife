@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Asuransi</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('insured-data.update', $insuredData->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="ktp">KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="{{ old('ktp', $insuredData->ktp) }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $insuredData->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="sex">Jenis Kelamin</label>
                            <select class="form-control" id="sex" name="sex">
                                <option value="M" {{ old('sex', $insuredData->sex) == 'M' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="F" {{ old('sex', $insuredData->sex) == 'F' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birth_of_date">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="birth_of_date" name="birth_of_date" value="{{ old('birth_of_date', $insuredData->birth_of_date) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
