@extends('profesor.perfil')
{!! Html::script('bower_components/jquery/dist/jquery.min.js')!!}
{!! Html::script('scripts/cursos.js')!!}

{!! Html::style('bower_components/bootstrap-material-design-icons/css/material-icons.css') !!}
{!! Html::style('css/adaptaciones.css') !!}


@section('content')
<div class="jumbotron jumbotron-fluid">
<h1 class="display-3">Curso seleccionado</h1>
<br>
<p class="lead"> Detalles del curso seleccionado
</div>


@endsection