
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Asuransi</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="ktp">KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="{{ $insuredData->ktp }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $insuredData->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="sex">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="sex" name="sex" value="{{ $insuredData->sex }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="birth_of_date">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birth_of_date" name="birth_of_date" value="{{ $insuredData->birth_of_date }}" disabled>
                    </div>
                    <a href="{{ route('insured-data.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
