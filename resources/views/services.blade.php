@extends('layouts.landing')

@section('title', 'services')


@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title','Service 1')
        @slot('content','Lorem ipsum dolor sit amet consectetur adipisicing elit.')     
    @endcomponent
    @component('_components.card')
        {{-- Para cuando se va a introducir un texto --}}
        @slot('title','Service 2')
        {{-- Para cuando se va a introducir html --}}
        @slot('content')
        <h3>Example</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        @endslot     
    @endcomponent
    @component('_components.card')
        @slot('title','Service 3')
        @slot('content','Lorem ipsum dolor sit amet consectetur adipisicing elit.')     
    @endcomponent

@endsection
