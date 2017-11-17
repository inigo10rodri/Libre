@extends('layouts.app')
@section('content')
<html>
    <head>
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <div class="video1">
        <p id="textos">Las mejores jugadas de la temporada de 2017!</p>

        <iframe class="video" width="420" height="315"
                src="https://www.youtube.com/embed/MMM8fLz2lCQ">
        </iframe>
    </div>
    <div class="video1">
        <p id="textos">Mejor partido de la historia de la ACB!</p>
        <iframe class="video" width="420" height="315"
            src="https://www.youtube.com/embed/wSEvzHyKVK0">
        </iframe>
    </div>
</html>
    @endsection