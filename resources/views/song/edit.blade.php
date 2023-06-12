<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/createsong.css') }}">
    <title>Document</title>
</head>
<main>

   
    <form class="form" action="{{route('song.update', $Song->id)}}" method="post"  enctype="multipart/form-data">
        @if ($errors->any())

        <div class="alert alert-danger">
    
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    
        <ul>
    
        @foreach ($errors->all() as $error)
    
        <li>{{ $error }}</li>
    
        @endforeach
    
        </ul>
    
        </div>
    
        @endif
        @csrf
        <div class="brand-logo"></div>
        <div class="brand-title">EDIT SONG</div>
        <div class="form-group">
            <Strong>Name</Strong>
        
            <input type="text" name="name" value="{{$Song->name}}" placeholder="Name">
            <br>
        </div>
        <div class="form-group">
        <strong>Audio</strong>      
        <audio controls controlsList="nodownload" style="width: 180px;" ontimeupdate="myAudio(this)">
            <source src="{{ asset('audio/song/'.$Song->file_mp3) }}" type="audio/mpeg">
            </audio>
            <input type="file" name="filemp3" id="3">
        </div>
        <div class="form-group">
        <strong>Imge</strong>
        <img src="{{asset('image/song/'.$Song->img)}}" alt="" srcset="">
            <input type="file" id="4" placeholder="Image" value="" name="img" />
        </div>
        <div class="form-group">
        <strong>Singer</strong>
        
            <select name="singername" id="5">
                @foreach($Singer as $singer)
                <option value="{{$singer->name}}">{{$singer->name}}</option>
                @endforeach
                <label for="">{{$Song->singername}}</label>
            </select>
        </div>
        <div class="form-group">
            <strong>Singer ID</strong>
            
                <select name="singerid" id="6">
                    @foreach($Singer as $singer)
                    <option value="{{$singer->id}}">{{$singer->name}}</option>
                    @endforeach
                </select>
            </div>   
            <div class="form-group">
                <strong>Category ID</strong>
            
                
                <select name="categoryid" id="8">
                    @foreach($Category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>     
            <div class="form-group">  
                <strong>Category</strong>
         
                    <select name="category" id="9">
                        @foreach($Category as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>          
                <div class="form-group">
                    <strong>Description</strong>
                   
                    <textarea name="description" id="2" cols="30" rows="10" >{{$Song->description}}</textarea>

                <br>
            </div>
            <div class="form-group">  
        <input type="submit" value="Submit">
    </div>
    </form>

</main>
</html>