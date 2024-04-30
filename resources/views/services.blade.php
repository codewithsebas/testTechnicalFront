@extends('layouts.services')

@section('title','Servicios')

@section('content')
<div class="w-full max-w-[1440px] p-3 xl:p-0">
    Hello world
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('description', 'Lorem ipsum')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('description', 'Lorem ipsum')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('description', 'Lorem ipsum')
    @endcomponent
</div>
@endsection