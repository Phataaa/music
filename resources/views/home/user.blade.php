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
            
            <h2>User Management</h2>
            
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
            <th>Email</th>
            <th>Password</th>
           
           
            <th width="280px">Action</th>
            
            </tr>
            
            @foreach($User as $key => $user)
            
            <tr>
            
            <td>{{$key+1}}</td>
            
            <td>{{ $user->name }}</td>
           
            
           <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            
            <td>
            
          
            
           
            
            
            <a class="btn btn-primary" href="{{ route('user.delete', $user->id) }}">Delete</a>
            
           
            
            </td>
            
            </tr>
            @endforeach
            </table>
        </div>
</body>
</html>