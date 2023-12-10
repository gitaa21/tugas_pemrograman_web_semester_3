<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Minggu 5 : Latihan 5</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto" >
                @if ($errors->any())
                    <div class="alert alert-secondary">
                        <ul>
                            @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('m5.luas.action')}}">
                    @csrf
                    <div class="mb-3">
                        <label>Masukkan Alas Segitiga : </label>
                        <input type="text" class="form-control" name="alas"/>
                    </div>
                    <div class="mb-3">
                        <label>Masukkan Tinggi Segitiga : </label>
                        <input type="text" class="form-control" name="tinggi"/>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>