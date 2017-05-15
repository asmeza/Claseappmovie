@extends('layauts.main')

@section('content')

    <div class="row">

        <div class="col-md-10">
            <div class="panel-default">
                <div class="panel-heading">
                    Nuevo Producto
                </div>

                {!! Form::open(['route' => 'movie.store', 'method'=>'POST']) !!}

                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('name', null, [
                    'id'=>'name',
                    'class'=>'form-control',
                    'placeholder'=>'Nombre de la pelicula']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('Tipo de Pelicula') !!}
                    {!! Form::select('movie_types_id',$movie_types, null, [
                    'id'=>'movie_types_id',
                    'class'=>'form-control',
                    ]) !!}

                </div>


                <div class="form-group">

                    {!! Form::submit('Guardar', [
                    'name'=>'guardar',
                    'id'=>'guardar',
                    'content'=>'<span> Guardar</span>',
                    'placeholder'=>'Tipo de pelicula',
                    'class' =>'btn btn-warning btn-sm10']) !!}

                </div>







                {!! Form::close() !!}



















            </div>


        </div>

    </div>








@endsection