@extends('layouts.app')
@section('content')
    <html>
    <head>
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <div class="video1">
        <p id="textos">Las mejores jugadas de la historia de la NBA!</p>

        <iframe class="video" width="420" height="315"
                src="https://www.youtube.com/embed/SIngWFflA3g">
        </iframe>
    </div>
    <div class="video1">
        <p id="textos">Mejor partido de la historia de la NBA!</p>
        <iframe class="video" width="420" height="315"
                src="https://www.youtube.com/embed/CLwDohQD82w">
        </iframe>
    </div>
    </html>
@endsection