<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Halo, nama saya <strong> {{$nama}}</strong>, nilai saya adalah <strong> {{$nilai}}</strong> :
    @if ($nilai >= 80)
        Grade A
    @elseif ($nilai >= 60)
        Grade B
    @elseif ($nilai >= 40)
        Grade C
    @elseif ($nilai >= 20)
        Grade D
    @else
        Grade E
    @endif
</body>
</html>