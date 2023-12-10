@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('anggota.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama Anggota</label>
                    <input class="form-control" type="text" name="nama_anggota" value="{{ old('nama_anggota') }}">
                </div>
                <div class="mb-3">
                    <label>Email Anggota</label>
                    <input class="form-control" type="email" name="email_anggota" value="{{ old('email_anggota') }}">
                </div>
                <div class="mb-3">
                    <label>Nomor Telepon Anggota</label>
                    <input class="form-control" type="text" name="telp_anggota" value="{{ old('telp_anggota') }}">
                </div>
                <div class="mb-3">
                    <label>Alamat Anggota</label>
                    <input class="form-control" type="text" name="alamat_anggota" value="{{ old('alamat_anggota') }}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Simpan <i class="fa-solid fa-download"></i></button>
                    <a class="btn btn-danger" href="{{ route('anggota.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
