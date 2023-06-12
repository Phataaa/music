@extends('singer.layout');
@section('content')

<div class="container">
      <div class="row mt-5">
          <h2 class="list-product-title">Singer</h2>
          
          @foreach($Singer as $singer)
      
                      <div class = "singer">
                        <div class="singerbox">
                        <div>
                        <img src="{{asset('image/singer/'.$singer->img)}}" class="imagesinger" >
                      </div>
                        <div >
                          <h5 >{{$singer->name}}</h5>
                          
                          <a class="btn btn-primary" href="#">Song</a>
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