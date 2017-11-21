@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Idea de contenido</div>

                    <div class="panel-body">
                        <div class="video2">
                            <p id="textos">Las mejores jugadas de la temporada de 2017!</p>

                            <iframe class="video" width="300" height="200"
                                    src="https://www.youtube.com/embed/MMM8fLz2lCQ">
                            </iframe>
                        </div>
                        <div class="video2">
                            <p id="textos">Mejor partido de la historia de la ACB!</p>
                            <iframe class="video" width="300" height="200"
                                    src="https://www.youtube.com/embed/wSEvzHyKVK0">
                            </iframe>
                        </div>
                        <div class="video2">
                            <p id="textos">Las mejores jugadas de la historia de la NBA!</p>

                            <iframe class="video" width="300" height="200"
                                    src="https://www.youtube.com/embed/SIngWFflA3g">
                            </iframe>
                        </div>
                        <div class="video2">
                            <p id="textos">Mejor partido de la historia de la NBA!</p>
                            <iframe class="video" width="300" height="200"
                                    src="https://www.youtube.com/embed/CLwDohQD82w">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection