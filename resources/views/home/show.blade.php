<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/show.css') }}">
    <title>Document</title>
</head>
<body>
    
   
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
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                
            </div>
            <div>
                
            </div>
        </div>
      </nav>
   
      <br>
      <br>
      <br>
      <br>


  <div class="player">
   <ul>
      <li class="cover"><img src="{{asset('image/song/'.$Song->img)}}"/></li>
      <li class="info">
         <h1>{{$Song->name}}</h1>
         <br>
         <h2>{{$Song->name_singer}}</h2>

         <div class="button-items">
            <audio id="music" preload="auto" loop="false">
               <source src="{{asset('audio/song/'.$Song->file_mp3)}}" type="audio/mp3">
                
            </audio>
            <div id="slider"><div id="elapsed"></div></div>
            <p id="timer">0:00</p>
            <div class="controls">
               <span class="expend"><svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
                  <g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
               </svg></span>

               <svg id="play" viewBox="0 0 25 25" xml:space="preserve">
                   <defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
                  <g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
                  </g>
               </svg>
              

               <svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
                  <g>
                     <rect x="6" y="4.6" width="3.8" height="15.7"/>
                     <rect x="14" y="4.6" width="3.9" height="15.7"/>
                  </g>
               </svg>

               <span class="expend"><svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
                  <g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
                </svg></span>
            </div>
         </div>
      </li>
   </ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<
<br>
<div>
    <h5 style="margin-left: 100px">Description</h5>
    <h6 style="margin-left:100px; margin-right:100px; text-align: justify">{{$Song->description}}</h6>
</div>
   <script src="{{asset('css/show.js')}}"></script>
</body>
</html>
    