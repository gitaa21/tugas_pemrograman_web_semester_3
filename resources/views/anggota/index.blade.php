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
                    <button class="btn btn-success">Refresh</button>
                </div> 
                <div class="col">
                    <a class="btn btn-success" href="{{route('anggota.create')}}">Tambah</a>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Email Anggota</th>
                    <th>Nomor Telepon Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; 
            ?>
            @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $anggota->id_anggota }}</td>
                    <td>{{ $anggota->nama_anggota }}</td>
                    <td>{{ $anggota->email_anggota }}</td>
                    <td>{{ $anggota->telp_anggota }}</td>
                    <td>{{ $anggota->alamat_anggota }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('anggota.edit', $anggota)}}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> 
                        
                        <form method="POST" class="d-inline" action="{{route('anggota.destroy',$anggota)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($anggotas->hasPages())
        <div class="card-footer">
            {{ $anggotas->links()}}
        
    @endif
    </div>
</div>
@endsection







<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>