<!DOCTYPE html>
<html>
<head>
    <title>Homeopata</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/estilos.css') !!}" rel="stylesheet"/>
</head>
<body>

<header>
    <center>
        <img id="logoNav" src="{!! asset('assets/images/logoNav.png') !!}" alt="logoNav">
    </center>
</header>
    @yield('content')
<footer>
    <img id="logoFooter" src="{!! asset('assets/images/logoFooter.png') !!}" alt="logoFooter">
</footer>


<!-- Latest compiled and minified JavaScript -->
<script src="{!! asset('assets/js/operaciones.js') !!}"></script>
</body>
</html>