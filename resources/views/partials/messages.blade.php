@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
       <strong>Errores</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
        </ul>
    </div>
@endif


@if(Session::has('save'))
    <div class="alert alert-success" role="alert">
        <strong>{{Session::get('save')}}</strong>
    </div>
@endif
