@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Ya puedes disfrutar de todo nuestro contenido y ver todos los partidos donde y cuando quieras!</p>
                    <div class="panel panel-success tamanopanel">
                        <div class="panel-heading">Liga Endesa</div>
                        <div class="panel-body">
                            <p>Las mejores jugadas y todos los partidos de la mejor liga europea! </p>
                            <a href="acb"><input type="button" value="Ver contenido" ></a>
                        </div>
                    </div>
                    <div class="panel panel-danger tamanopanel" >
                        <div class="panel-heading">NBA</div>
                        <div class="panel-body">
                            <p>La mejor liga del mundo! </p>
                            <a href="nba"><input type="button" value="Ver contenido" ></a>
                        </div>
                    </div>
                    <div class="panel panel-primary tamanopanel" >
                        <div class="panel-heading">Liga Endesa y NBA</div>
                        <div class="panel-body">
                            <p>Todos los partidos de españa y NBA! </p>
                            <a href="working"><input type="button" value="Ver contenido" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
