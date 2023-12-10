@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message')}}</p>
    @endif
<div class="card mb-3 ">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian...../">
                </div>
                <div class="col">
                    <button class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                </div> 
                <div class="col">
                    <a class="btn btn-success" href="{{route('buku.create')}}"><i class="fa-solid fa-plus"></i> Tambah
                    </a>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; 
            ?>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $buku->judul_buku }}</td>
                    <td>{{ $buku->nama_kategori }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('buku.edit', $buku)}}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> 
                        <form method="POST" class="d-inline" action="{{route('buku.destroy', $buku)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($bukus->hasPages())
        <div class="card-footer">
            {{ $bukus->links()}}
        
    @endif
    </div>
</div>
@endsection







<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>