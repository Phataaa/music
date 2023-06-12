@extends('category.layout');
@section('content')

<div class="container">
    <div class="row mt-5">
    
        {{-- <h2 class="list-product-title">{{$Category[0]->name}}</h2> --}}
        
        @foreach($Song as $song)
    
                    <div class = "song">
                      <div class="songbox">
                      <div>
                      <img src="{{asset('image/song/'.$song->img)}}" class="imagesong" >
                    </div>
                      <div >
                        <h5 >{{$song->name}}</h5>
                        <p>Singer:{{$song->name_singer}}</p>
                        <audio controls controlsList="nodownload" style="width: 180px;" ontimeupdate="myAudio(this)">
                          <source src="{{ asset('audio/song/'.$song->file_mp3) }}" type="audio/mpeg">
                          </audio> <br>
                        <a href="#">Show</a>
                        </div>	
                      </div>		
                  </div>
        
         @endforeach
    </div>
</div>

  <!-- end list product -->
  
  <!-- Load jquery trước khi load bootstrap js -->
  <script src="{{asset('css/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
@endsection