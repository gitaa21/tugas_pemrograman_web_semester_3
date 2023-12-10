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
                    <a class="btn btn-success" href="{{route('user.create')}}">Tambah</a>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <?php $no = 1; 
            ?>
            @foreach ($users as $user)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$user->nama_user}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->telp}}</td>
                    <td>{{$user->jabatan}}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('user.edit', $user)}}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> 
                        <form method="POST" class="d-inline" action="{{route('user.destroy', $user)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($users->hasPages())
    <div class="card-footer">
        {{ $users->links()}}
    
@endif
    </div>
</div>
@endsection




