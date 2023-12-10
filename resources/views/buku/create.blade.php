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
            <form method="POST" action="{{ route('buku.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Judul Buku</label>
                    <input class="form-control" type="text" name="judul_buku" value="{{ old('judul_buku') }}">
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select class="form-select" name="id_kategori">
                        @foreach ($kategoris as $kategori)
                            @if (old('id_kategori') == $kategori->id_kategori)
                                <option value="{{ $kategori->id_kategori }}" selected> {{ $kategori->nama_kategori }}
                                </option>
                                @else
                            <option value="{{ $kategori->id_kategori}}">{{ $kategori->nama_kategori }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Pengarang</label>
                    <input class="form-control" type="text" name="pengarang" value="{{ old('pengarang') }}">
                </div>
                <div class="mb-3">
                    <label>Penerbit</label>
                    <input class="form-control" type="text" name="penerbit" value="{{ old('penerbit') }}">
                </div>
                <div class="mb-3">
                    <label>Tahun Terbit</label>
                    <input class="form-control" type="text" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('buku.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
