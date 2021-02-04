<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}" /> 

    <title>Nepal Agro Yantra</title>
</head>
<style>

</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    

    </div>
    <ul class="nav navbar-nav">
      <li class="">
            <i class="fa fa-phone"> 9846638013 / 98676757786 </i>
            <i class="fa fa-envelope"  href="mailto:agroyantra@gmail.com">  agroyantra@gmail.com </i>
      </li>
      
    </ul>
    <ul class="nav  navbar-right">
    <li class = "nav-item">
      <div class="nav-iteam" >
        @guest
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Account</a>

                    @endauth
                </div>
            @endif 
            @else
            <li class="nav-iteam dropdown">
             <a href="" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                 data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false"v-pre>{{Auth::user()-> name}}<span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-mwnu-right"
                    aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" >
                            {{__('logout')}}</a>

                        <form action="{{route('logout')}}" id="logout-form" method="POST">
                            @csrf</form>    
                    </div>
            </li>
            @endguest
        </div>
      </li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light ">
  <!-- <img src="{{asset('storage/img/logo.jpeg')}}" alt="Logo" > -->
  <a class="navbar-brand" href="/welcome"><img src="{{asset('storage/img/logo.jpeg')}}" alt="Logo" ></a>
  <h3>Nepal <span>Agro Yantra</span></h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/whyus">Why Us?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/consultant">Consultant</a>
          <a class="dropdown-item" href="/trunkey">Trunkey Project</a>
          <a class="dropdown-item" href="/supports">Installation/Support</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">Our Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
</body>
</html>