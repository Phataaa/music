<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/create.css">
	
    <title>Document</title>
</head>
<body>
    <style>
.admin{
    height: 40px;
    
    background-color: rgb(248, 243, 237)
}
 .admin >ul >li:first-of-type{
    
    margin-left: 500px;
    display: inline;
  }
     .admin >ul >li{
    
    margin-left: 100px;
    margin-top: 200px;
    display: inline;
    font-size: 20px;
  }
    </style>
    
    <br>
    <br>
    <div class="admin">
        <ul>
            <li>HOMEADMIN</li>
            <li>Management Song</li>
            <li>Management User</li>
            <li>Management Category</li>
            <li>Management Singer</li>
        </ul>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
        
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-left">
            
            <h2>Singer Management</h2>
            
            </div>
            
            
            <div class="pull-right">
            
            <a class="btn btn-success" href="{{ route('singer.create') }}"> Create New Singer</a>
            
            </div>
            
            </div>
            
            </div>
            
            @if ($message = Session::get('success'))
            
            <div class="alert alert-success">
            
            <p>{{ $message }}</p>
            
            </div>
            
            @endif
            
            <table class="table table-bordered">
            
            <tr>
            
            <th>No</th>
            
            <th>Name</th>
            
            <th>Image</th>

            <th width="280px">Action</th>
            
            </tr>
            
            @foreach($Singer as $key => $singer)
            
            <tr>
            
            <td>{{$key+1}}</td>
            
            <td>{{ $singer->name }}</td>
            <td><img src="{{asset('image/singer/'.$singer->img)}}" alt="" srcset="" height="150" width="200"></td>
            
            
            <td>
            
          
            
            <a class="btn btn-info" href="{{ route('singer.show',$singer->id) }}">Show</a>
            
            <a class="btn btn-primary" href="{{ route('singer.edit',$singer->id) }}">Edit</a>
            
            <a class="btn btn-primary" href="{{ route('singer.delete',$singer->id) }}">Delete</a>
            
           
            
            </td>
            
            </tr>
            @endforeach
            </table>
        </div>
</body>
</html>