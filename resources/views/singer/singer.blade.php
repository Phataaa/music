
@extends('singer.layout');
@section('content')


  <div class="container">
      <div class="row mt-5">
          <h2 class="list-product-title">New product</h2>
          <div class="list-product-subtitle">
              <p>List product description</p>
          </div>
          @foreach($Singer as $singer)
      
                      <div class = "singer">
                        <div class="singerbox">
                        <div>
                        <img src="{{asset('image/singer/'.$singer->img)}}" class="imagesinger" >
                      </div>
                        <div >
                          <p>Singer:{{$singer->name}}</p>
                         
                          <a href="#">Song</a>
                          </div>	
                        </div>		
                    </div>
          
           @endforeach
      </div>
  </div>
 
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
@endsection