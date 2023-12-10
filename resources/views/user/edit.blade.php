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
            <form method="POST" action="{{ route('user.update') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama User</label>
                    <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}">
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                </div>
                <div class="mb-3">
                    <label>Telepon</label>
                    <input class="form-control" type="text" name="telp" value="{{ old('telp') }}">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label>Jabatan</label>
                    <input class="form-control" type="text" name="jabatan" value="{{ old('jabatan') }}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Simpan <i class="fa-solid fa-download"></i></button>
                    <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
