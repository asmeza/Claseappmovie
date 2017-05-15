<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;
use App\MovieType;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MovieCreateRequest;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$movies = Movie::all();


        $movies = Movie::
        select('movies.id', 'movies.name as movies',
            'movie_types.name as types')
            ->join('movie_types','movie_types.id','=',
                'movies.movie_types_id')
            ->paginate(3);
        return view('movie.index')
            ->with('movies',$movies);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movie_types=MovieType::get()
            ->pluck('name','id')
            ->prepend('Seleccione un tipo de pelicula');
                return view('movie.create')
        ->with('movie_types',$movie_types);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        return view('movie.delete');
    }

    public function report()
    {
        return view('movie.report');
    }

    public function store(MovieCreateRequest $request)// para que guarde los datos en el formulario
    {

        Movie::create($request->all());
        Session::flash('save','El registro se ha crado correctamente');
        return redirect()->route('movie.index');
    }

    public function update()
    {
        return view('movie.update');
    }
}


