@extends('layouts.doctor')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <hr id="lineNav">
                        <a href="/login/"><div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div></a>
                        <a href="/login/code/"><div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div></a>
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
@endsection