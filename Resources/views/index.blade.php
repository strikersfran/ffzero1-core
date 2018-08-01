@extends('core::layouts.master')

@section('content')
    <h1>Hola que tal!!!</h1>

    <p>
        Esta es una vista del module: {!! config('core.name') !!}
    </p>
@stop
