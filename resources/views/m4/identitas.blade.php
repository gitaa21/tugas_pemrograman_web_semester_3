@extends('m4.layout')
@section('content')
<div class="container" style="margin: 5%" >
    <h2 align="center">Identitas</h2>
    <div style="display: flex; align-items: center;">
        <img src="https://s3-ap-northeast-1.amazonaws.com/bhive-jp/media/yabai/article/3137/Osamu_Dazai_photographed_by_Tadahiko_Hayashi.jpg" alt=""  width="200" height="350">
        <div style="border: 2px solid #ccc; padding: 20px; margin-left: 20px;">
            <p><b>Nama:</b>{{$nama}}</p>
            <p><b>Alamat:</b> {{$alamat}}</p>
            <p><b>Tempat, Tanggal Lahir:</b>{{$ttl}}</p>
            <p><b>Jenis Kelamin:</b> {{$jeniskelamin}}</p>
            <p><b>Lainnya:</b><br>
                <a href="<?php echo route ('pendidikan')?>">Pendidikan</a>
                <a href="<?php echo route ('skill')?>" >Skill</a></p> 
        </div>
    </div>
@endsection