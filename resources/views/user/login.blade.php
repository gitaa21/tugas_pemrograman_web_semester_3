<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{asset('css/bootstrap.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
       <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <form method="POST" action="{{ route('user.login.action') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            {{$title}}
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $err)
                                            <li>{{$err}}</li>
                                        @endforeach
                                    </ul>
                                </div>  
                            @endif
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
       </div>
    </div>
</body>
</html>