<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/createstyle.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="brand-logo"></div>
        <div class="brand-title">Register</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit">Register</button>
        </div>
        </div>
        </div>
    </form>
</body>
</html>