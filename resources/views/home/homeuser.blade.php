@extends('layout');
@section('content')

  <!-- end menu -->
  <!-- slide -->
  
  <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
       
        <img class="slidesong" width="auto" height="530px" src="{{asset('image/song/'.$Song[0]->img )}}" alt="First slide" ">
        
      </div>
      <div class="carousel-item">
        <img class="slidesong" width="auto" height="530px" src="{{asset('image/song/'.$Song[1]->img )}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="slidesong" width="auto" height="530px" src="{{asset('image/song/'.$Song[2]->img )}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end slide -->
  <!-- list product -->
  <div class="container">
      <div class="row mt-5">
          <h6 style="font-size: 30px">Song</h6>
          <div class="list-product-subtitle">
              <p>List Top Song</p>
          </div>
          @foreach($Song as $song)
      
                      <div class = "song">
                        <div class="songbox">
                        <div>
                        <img src="{{asset('image/song/'.$song->img)}}" class="imagesong" >
                      </div>
                        <div >
                          <h5 >{{$song->name}}</h5>
                          <h6>Singer:{{$song->name_singer}}</h6>
                          <audio controls controlsList="nodownload" style="width: 180px;" ontimeupdate="myAudio(this)">
                            <source src="{{ asset('audio/song/'.$song->file_mp3) }}" type="audio/mpeg">
                            </audio> <br>
                          <a href="{{route('showsong', $song->id)}}" class="btn btn-primary">Show</a>
                          <a href="" class="btn btn-primary">add</a>
                          </div>	
                        </div>		
                    </div>
          
           @endforeach
      </div>
  </div>
  <!-- end list product -->
  
  <!-- Load jquery trước khi load bootstrap js -->
  <script src="css/jquery-3.3.1.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
@endsection