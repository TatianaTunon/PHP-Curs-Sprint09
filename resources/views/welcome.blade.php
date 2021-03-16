<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <head>
        <title>Inicioi</title>
        <meta charset="UTF-8">
        <meta name= "author" content="Tatiana Tuñón">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <!--conjunto de herramientas de fuentes e iconos basado en CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">    
    </head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menú Vistas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('hola')}}">Bienvenido/a</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('hi')}}">Welcome</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('benvinguts')}}">Benvinguts</a>
      </li>
    </ul>
  </div>
</nav>

</html>
