<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    {{-- <table border="1">
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Image</th>
        <th></th>
        </tr>
        @foreach($Singer as $key => $singer)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$singer->name}}</td>
            <td><img src="{{asset('image/singer/'.$singer->img)}}" alt="" srcset="" border="3" height="150" width="200"></td>
            <td><button><a href="{{route('singer.edit', $singer->id)}}">Edit</a></button> <button><a href="{{route('singer.delete', $singer->id)}}">Delete</a></button> <button><a href="{{route('singer.show', $singer->id)}}">Show</a></button></td>
        </tr>
        @endforeach
    </table> --}}
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