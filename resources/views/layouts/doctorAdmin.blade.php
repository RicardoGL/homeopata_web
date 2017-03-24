<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>Homeopata</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/estilos.css') !!}" rel="stylesheet"/>
    <!-- angular cdnj -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> -->
    <!-- summer note -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img id="logoBrand" src="{!! asset('assets/images/logoNav.png') !!}" alt="logoNav"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <center>
          <ul class="nav navbar-nav" style="display: inline-block; float: none;">
            <li><a href="#">PACIENTES</a></li>
            <li><a href="#">NUEVA CONSULTA</a></li>
          </ul>
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">FRANCISO MEJÍA</a></li>
            <li><a href="#">SALIR</a></li>
          </ul>
      </center>
    </div>
  </div>
</nav>

    @yield('content')

<footer>
    <img id="logoFooter" src="{!! asset('assets/images/logoFooter.png') !!}" alt="logoFooter">
</footer>

<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="{!! asset('assets/js/summernoteOperaciones.js') !!}"></script>
<!-- operaciones -->
<script src="{!! asset('assets/js/operaciones.js') !!}"></script>
<!-- angular -->
<script src="{!! asset('assets/angular/root.js') !!}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>