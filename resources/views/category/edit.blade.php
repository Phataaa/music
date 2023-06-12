<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/createstyle.css') }}">
    <title>Document</title>
</head>
<body>

    
    <form class="form" action="{{route('category.update', $Category->id)}}" method="post">
        @csrf
        
        <div class="brand-logo"></div>
        <div class="brand-title">ADD CATEGORY</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
            
            <strong>Name:</strong>
            
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$Category->name}}">
            
            </div>
            
            </div>
        <div class="form-group">

           
            <input type="submit" value="Submit">
         </div>

        </div>
    </form>
    
</body>
</html>