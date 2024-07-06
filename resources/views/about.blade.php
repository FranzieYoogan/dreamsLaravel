<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/about.css')}}">

</head>
<body>

    @include('header')

    <section class="containerAll">

        <div class="containerItems">

            

                @foreach ($aboutData as $item)
                <div class="containerImage">
                    
                @if (isset($item->dreamType) && $item->dreamType == "normal")

                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/normal.png')}}" alt="">
                </div>
                
                <div class="containerTitle">
                 <h1 class="title">   {{$item->dreamType}} </h1>
                </div>
                
                @endif

                @if (isset($item->dreamType) && $item->dreamType == "daydream")
                
                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/daydream.png')}}" alt="">
              
                </div>

                <div class="containerTitle"> 
                   <h1 class="titleDaydream"> {{$item->dreamType}} </h1>
                </div>
                
                @endif


                @if (isset($item->dreamType) && $item->dreamType == "lucid")
                
                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/lucid.png')}}" alt="">
              
                </div>

                <div class="containerTitle"> 
                   <h1 class="titleLucid"> {{$item->dreamType}} </h1>
                </div>
                
                @endif

                @if (isset($item->dreamType) && $item->dreamType == "nightmare")
                
                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/nightmare.png')}}" alt="">
              
                </div>

                <div class="containerTitle"> 
                   <h1 class="titleNightmare"> {{$item->dreamType}} </h1>
                </div>
                
                @endif


                @if (isset($item->dreamType) && $item->dreamType == "nightterrors")
                
                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/nightterrors.png')}}" alt="">
              
                </div>

                <div class="containerTitle"> 
                   <h1 class="titleNightterrors"> {{$item->dreamType}} </h1>
                </div>
                
                @endif

                @if (isset($item->dreamType) && $item->dreamType == "recurringdream")
                
                <div class="containerImage2">
                    <img class="imgStyle" src="{{asset('/icons/recurringdream.png')}}" alt="">
              
                </div>

                <div class="containerTitle"> 
                   <h1 class="titleRecurringdream"> {{$item->dreamType}} </h1>
                </div>
                
                @endif
               
               

            </div>

 

            <div>
                <h1>{{$item->dreamAbout}}</h1>
            </div>
             

            @endforeach

        </div>


    </section>

    
</body>
</html>