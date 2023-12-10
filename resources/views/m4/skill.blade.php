@extends('m4.layout')
@section('content')
<div class="container" style="margin: 5%" >
    <h2 align="center">Skill</h2>
    <div style="display: flex; align-items: center;">
        <img src="https://s3-ap-northeast-1.amazonaws.com/bhive-jp/media/yabai/article/3137/Osamu_Dazai_photographed_by_Tadahiko_Hayashi.jpg" alt=""  width="200" height="320">
        <div style="border: 2px solid #ccc; padding: 20px; margin-left: 20px;">
            <p><strong> Soft Skill yang saya miliki : </strong></p>
            <ul>
                @foreach ($softskill as $val)
                    <li>{{ $val }}</li>
                @endforeach
            </ul>
            <p><strong> Hard Skill yang saya miliki : </strong></p>
            <ul>
                @foreach ($hardskill as $val)
                    <li>{{ $val }}</li>
                @endforeach
            </ul> 
            <p><b>Lainnya: </b><br>
                <a href="<?php echo route ('identitas')?>">Identitas</a>
                <a href="<?php echo route ('pendidikan')?>">Pendidikan</a> 
        </div>
    </div>
@endsection