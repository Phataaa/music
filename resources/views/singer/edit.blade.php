<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/createstyle.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <form class="form" action="{{route('singer.update', $Singer->id)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @if ($errors->any())

        <div class="alert alert-danger">
    
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    
        <ul>
    
        @foreach ($errors->all() as $error)
    
        <li>{{ $error }}</li>
    
        @endforeach
    
        </ul>
    
        </div>
    
        @endif
        
        <div class="brand-logo"></div>
        <div class="brand-title">EDIT SINGER</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
            
            <strong>Name:</strong>
            
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$Singer->name}}">
            
            </div>
            
            </div>
        <div class="form-group">
            
            <strong>Image:</strong>
            <img src="{{asset('image/singer/'.$Singer->img)}}" alt="" srcset="">
            <input type="file" class="form-control" placeholder="Image" value="" name="imagesinger" />
            <input type="submit" value="Submit">
         </div>

        </div>
    </form>
    
</body>
</html>