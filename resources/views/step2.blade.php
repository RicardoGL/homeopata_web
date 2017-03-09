<!DOCTYPE html>
<html>
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
    </head>
    <body>

        <header>
            <center>
                <img id="logoNav" src="{!! asset('assets/images/logoNav.png') !!}" alt="logoNav">
            </center>
        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <center>
                          <hr id="lineNav">
                          <a href="/"><div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div></a>
                          <a href="step2"><div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div></a>
                        </center>
                    </div>
                </div>
            </div>
        </section>

        <section id="bg_index">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <center>
                            <form>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>INGRESAR CODIGO</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <input type="password" class="form-control" placeholder="**********" required>
                                    </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default">Enviar</button>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <img id="logoFooter" src="{!! asset('assets/images/logoFooter.png') !!}" alt="logoFooter">
        </footer>


        <!-- Latest compiled and minified JavaScript -->
        <script src="{!! asset('assets/js/operaciones.js') !!}"></script>
    </body>
</html>
