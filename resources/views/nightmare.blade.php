<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/nightmare.css')}}">

</head>
<body>

    @include('header')

    <section class="containerAll">


        <form method="POST" action="/nightmare" class="containerItems">

            @csrf

            <div class="containerImage">

                <img class="imageStyle" src="{{asset('/icons/nightmare.png')}}" alt="">
               
            </div>
            
            <div class="containerTitle">
                <h1 class="title">NIGHTMARE DREAM</h1>
            </div>

            <div>

                <input id="date" name="nightmareDate" class="inputDate" type="date">

            </div>
            
    <div class="form-floating">
        <textarea name="nightmareAbout" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
        <label for="floatingTextarea2">About your dream</label>
      </div>

      <div class="containerButton">

        <button type="submit" class="buttonStyle btn btn-primary">Submit</button>

      </div>

    </form>

    </section>

    @if (isset($ok))

    <h1 class="aboutStyle">About Registered</h1>

    <script>

        setTimeout(() => {

            window.location.href = "/";

        }, 2000);

    </script>
        
    @endif
    
</body>
</html>