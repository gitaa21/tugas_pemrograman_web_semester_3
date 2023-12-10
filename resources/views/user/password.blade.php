@extends ('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
@if (session()->has('message'))
<p class="alert alert-info">{{session('message')}}</p> 
@endif
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
</div>  
@endif
    <form method="POST" action="{{route('user.password.action')}}">
    @csrf
    <div class="mb-3">
        <label>Password Lama</label>
            <input class="form-control" type="password" name="pass1">
    </div>
    <div class="mb-3">
        <label>Password Baru</label>
            <input class="form-control" type="password" name="pass2">
    </div>
    <div class="mb-3">
        <label>Konfirmasi Password Baru</label>
            <input class="form-control" type="password" name="pass3">
    </div>
    <div class="mb-3">
    <button class="btn btn-success">Ubah Password <i class="fa-solid fa-download"></i></button>
    </div>
    </form>
        </div>
    </div>
@endsection