<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Document</title>
</head>
<body>
    
    =
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">HOMEADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
          
        </div>
      </nav> <br>
      <div class="contain">
        <div class="left">
            <p>Management</p>
            <ul>
                <li>Management Song</li>
                <li>Management Singer</li>
                <li>Management Category</li>
            </ul>
        </div>
        <div class="right">
            @yield('content');
        </div>
      </div>
    @yield('content')
</body>
</html>