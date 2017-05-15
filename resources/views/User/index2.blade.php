@extends('layauts.main')

@section('content')
    <h1>Listado de Usuarios</h1>


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
                            first_name
                        </th>
                        <th>
                            last_name
                        </th>
                        <th>
                            date_birthay
                        </th>
                        <th>
                            gender
                        </th>
                        <th>
                            biography
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($users as $user)

                      <tr>
                          <td>
                              {{$user->id}}
                          </td>
                          <td>
                              {{$user-> first_name}}
                          </td>
                          <td>
                              {{$user->last_name}}
                          </td>
                          <td>
                              {{$user->date_birthay}}
                          </td>
                          <td>
                              {{$user->gender}}
                          </td>
                          <td>
                              {{$user->biography}}
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection