<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('/css/home.css')}}">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @include('header')
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <div id="carouselExampleControls" class="divCarousel carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card  " style="width: 18rem;">
        <a href="/normal">
  <img src="{{asset('/icons/normal.png')}}" class="card-img-top" alt="...">
</a>
  <div class="card-body">
    <h5 class="card-title">Normal Dream</h5>
    
  </div>
</div><div class="card" style="width: 18rem;">
    <a href="/nightmare">
  <img src="{{asset('/icons/nightmare.png')}}" class="card-img-top" alt="...">
</a>
  <div class="card-body">
    <h5 class="card-title">Nightmare</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
            <a href="/lucid">
  <img src="{{asset('/icons/lucid.png')}}" class="card-img-top" alt="...">
            </a>
  <div class="card-body">
    <h5 class="card-title">Lucid Dream</h5>
    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
        <a href="/daydream">
  <img src="{{asset('/icons/daydream.png')}}" class="card-img-top" alt="...">
        </a>
  <div class="card-body">
    <h5 class="card-title">Daydream</h5>
    
  </div>
</div><div class="card" style="width: 18rem;">
    <a href="/recurringdream">
  <img src="{{asset('/icons/recurringdream.png')}}" class="card-img-top" alt="...">
    </a>
  <div class="card-body">
    <h5 class="card-title">Recurring Dream</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
            <a href="/nightterrors">
  <img src="{{asset('/icons/nightterrors.png')}}" class="card-img-top" alt="...">
            </a>
  <div class="card-body">
    <h5 class="card-title">Night Terrors</h5>
    
  </div>
</div>
    </div>
    </div>


    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

    </body>
</html>
