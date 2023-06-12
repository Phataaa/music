<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
    <title>Document</title>
</head>
<body>
    
    <style>
        #login{
            position: absolute;
            margin-left: 60%;
        }
        #register{
            position: absolute;
            margin-left: 64%;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Your Labrary <span class="glyphicon glyphicon-home sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Category
                        </a>
                       
                        <div class="dropdown-content">
                            @foreach($Category as $category)
                            <a class="dropdown-item" href="{{route('song.category', $category->id)}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Nation
                        </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="#">USA</a>
                            <a class="dropdown-item" href="#">UK</a>
                            <a class="dropdown-item" href="#">VIET NAM</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('singer.homesinger')}}"> <span class="glyphicon glyphicon-user"></span>Singer</a>
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0" action="" method="post"  enctype="multipart/form-data">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="btn btn-outline-success my-2 my-sm-0" id ="login"><a href="">Logout</a></button>
            
            </div>
            <div>
                
            </div>
        </div>
      </nav>
    @yield('content')
</body>
</html>