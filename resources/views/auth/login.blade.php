<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/createstyle.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   
    <div class="alert alert-danger">
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
</div>
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="brand-logo"></div>
        <div class="brand-title">Login</div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email"  class="form-control" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required><br>
            
           
        </div>


        <div class="form-group">
            <button type="submit">Login</button>
        </div>
        </div>
    </div>
    
    </form>
</body>
</html>