@extends('m4.layout')
@section('content')
<div class="container" style="margin: 5%" >
    <h2 align="center">Pendidikan</h2>
    <div style="display: flex; align-items: center;">
        <img src="https://s3-ap-northeast-1.amazonaws.com/bhive-jp/media/yabai/article/3137/Osamu_Dazai_photographed_by_Tadahiko_Hayashi.jpg" alt=""  width="200" height="320">
        <div style="border: 2px solid #ccc; padding: 20px; margin-left: 20px;">
            <p><b>Pendidikan TK: </b>{{$tk}}</p>
                <p><b>Pendidikan SD: </b>{{$sd}}</p>
                <p><b>Pendidikan SMP: </b>{{$smp}}</p>
                <p><b>Pendidikan SMA/SMK: </b>{{$smk}}</p>
                <p><b>Pendidikan Kuliah: </b>{{$kuliah}}</p>
                <p><b>Lainnya: </b><br>
                    <a href="<?php echo route ('identitas')?>">Identitas</a>
                    <a href="<?php echo route ('skill')?>">Skill</a></p>
        </div>
    </div>
@endsection