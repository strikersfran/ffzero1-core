@extends('core::layouts.master')

@section('content')
    <h1>Hola que tal!!!</h1>

    <p>
        This view is loaded from module: {!! config('core.name') !!}
    </p>
@stop
