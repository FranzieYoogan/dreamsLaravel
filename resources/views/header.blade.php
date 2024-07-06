<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


 
        <link rel="stylesheet" href="{{asset('/css/header.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary"  onload="event()">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img class="navicon" src="{{asset('icons/dream.png')}}" alt=""> My dreams</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navItems collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="anchorTipos" class="anchorStyle tipos nav-link" href="/">Tipos de Sonho</a>
        </li>
        <li class="nav-item">
          <a id="anchorSonhos" class="anchorStyle nav-link" href="/dreams">Sonhos</a>
        </li>
        
      </ul>
    </div>
  </div>

  <script>

    window.onload = function() {
  
      if(window.location.pathname === "/dreams") {
        console.log('dreams')
        document.getElementById('anchorSonhos').style.setProperty('color','black','important')
        document.getElementById('anchorTipos').style.setProperty('color','gray','important')
      }
  
    }
  
  </script>

</nav>

</body>
</html>