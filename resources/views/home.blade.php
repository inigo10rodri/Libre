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
                            <input type="button" value="Ver contenido">
                        </div>
                    </div>
                    <div class="panel panel-danger tamanopanel" >
                        <div class="panel-heading">NBA</div>
                        <div class="panel-body">
                            <p>La mejor liga del mundo </p>
                            <input type="button" value="Ver contenido">
                        </div>
                    </div>
                    <div class="panel panel-primary tamanopanel" >
                        <div class="panel-heading">Liga Endesa y NBA</div>
                        <div class="panel-body">
                            <p>Todos los partidos de españa y NBA! </p>
                            <input type="button" value="Ver contenido">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
