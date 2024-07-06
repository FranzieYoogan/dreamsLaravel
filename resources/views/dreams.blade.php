<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('/css/dreams.css')}}">


</head>
<body>

    @include('header')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Dream Type</th>
            <th scope="col">Dream Date</th>
         
          </tr>
        </thead>
        <tbody>

            @foreach ($dreams as $dream)

            <tr>
               
                   <div style="display: flex">

                 
                <th scope="row">{{$dream->dreamId}}</th>
                <td>{{$dream->dreamType}}</td>
                <td>{{$dream->dreamDate}} 
                  <form style="display: inline" method="POST" action="/about">
                    @csrf
                  <input name="id" style="display: none;" type="text" value="{{$dream->dreamId}}">
                    <button class="buttonStyle"><img src="{{asset('/icons/show.png')}}" alt=""></button>
                  
                  </form>  

                  <form style="display: inline" method="POST" action="/dreams">
                    @csrf
                  <input name="id" style="display: none;" type="text" value="{{$dream->dreamId}}">
                    <button class="buttonStyle"><img class="delete" src="{{asset('/icons/delete.png')}}" alt=""></button>
                  
                  </form> 
                  </td>
                

              </div>
              </tr>
                
            @endforeach
         
       
        
        </tbody>
      </table>
    
</body>
</html>