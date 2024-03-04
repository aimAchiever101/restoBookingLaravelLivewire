<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @livewireStyles
    <style>
      nav{
        width:100%;
      }
        .container-fluid{
            background-color:olive;
            color:white;
        }
        .picture{
          background-image:url("{{asset('storage/images/back23.png')}}");
          width:100%;
          height:650px;
          background-size:cover;
          background-repeat:no-repeat;
          margin-left:0px
        
        }
        .caption{
          background-color:black;
          color:silver;
          font-size:36px;
          
        }
        .picture1{
          background-image:url("{{asset('storage/images/green.png')}}");
          width:100%;
          height:1500px;
          background-size:contain;
          /* background-repeat:no-repeat; */
          /* margin-left:0px */
        
        }
        .chef{
          width:100%;
          height:400px;
        }
        .category{
          background-color:green
          width:500px;
          height:400px;
          obeject-fit:contain;
        }
        border{
          border:2px solid-black;
        }
        img{
          transition:all 1.4s;
        }
        img:hover{
          cursor:pointer;
          tranform:scale(1.1);
        }
        .reserve{
          margin-left:200px;
          margin-right:200px;
          margin-top:50px;
          margin-bottom:200px;
          /* boder-color:2px solid-blue; */
        }
        
        input{
          /* border-radius:2%; */
          border:none;
          border-bottom:2px solid gold;

          color:gold;
          background-color:transparent;
          

        }
        body{
          overflow-x:hidden;
          background-color:black;
          
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary border-1">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-family:elephant;font-size:40px">GarhKumaou <img src="{{asset('storage/images/kumau.jpeg')}}" style="width:50px; height:50px;border-radius:50%; object-fit:cover;"alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/team')}}">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/menu')}}">Our Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/reservation')}}">Make Reservations</a>
        </li>
        <li class="nav-item my-0">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  
    @yield('content')

    @livewireScripts
</body>
</html>