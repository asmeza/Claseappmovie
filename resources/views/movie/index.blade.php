@extends('layauts.main')

@section('content')

    <div class="panel panel-heading">
        @include('partials.messages')
        Listado de Pelicula
        <p class="navbar-text navbar-right">

            <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn">Nuevo</button>
        </p>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Nombre Pelicula
                        </th>
                        <th>
                            Tipo Pelicula
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($movies as $movie)

                      <tr>
                          <td>
                              {{$movie->id}}
                          </td>
                          <td>
                              {{$movie->movies}}
                          </td>
                          <td>
                              {{$movie->types}}
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $movies->links()!!}
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#nuevo").click(function(event)
        {
           document.location.href="{{route('movie.create')}}";
        });
    </script>

    @endsection