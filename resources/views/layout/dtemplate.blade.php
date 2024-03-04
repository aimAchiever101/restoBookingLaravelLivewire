<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Document</title>
    @livewireStyles
    <style>
      .container-fluid{
            background-color:olive;
            color:white;
      }
      input{
          /* border-radius:2%; */
          border:none;
          border-bottom:2px solid gold;

          color:gold;
          background-color:transparent;
          

        }
      .picture1{
          background-image:url("{{asset('storage/images/green.png')}}");
          width:100%;
          height:2000px;
          background-size:contain;
          /* background-repeat:no-repeat; */
          /* margin-left:0px */
        
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link" href="{{url('/customer_detail')}}">customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/daily-details')}}">Daily Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/staff-details')}}">staff details</a>
        </li>
        <li class="nav-item my-0">
          <a class="nav-link" href="{{url('/menu_add')}}">menu chnage</a>
        </li>
        <li class="nav-item my-0">
          <a class="nav-link" href="{{url('/food')}}">Food Stock</a>
        </li>
        <li class="nav-item my-0">
          <a class="nav-link" href="{{url('/reservation-seats')}}">reservation list</a>
        </li>
        <li class="nav-item my-0">
          <a class="nav-link" href="{{url('/request_list')}}">advance payment</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
   @yield('content')
    @livewireScripts
    
</body>
</html>