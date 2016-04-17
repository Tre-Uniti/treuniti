@extends('app')
@section('siteTitle')
    Welcome!
@stop

@section('centerText')
    <div class = "welcome">
        <a href={{ url('/about') }}><img src={{asset('img/tre-uniti.png')}} alt="tre-uniti" height = "250px" width = "250px%"></a>
    </div>
    <div class = "welcome">
    <h2>Be inspired through community</h2>
    </div >
    <div class = "welcome">
        <a href={{ url('/idee') }}><img src={{asset('img/idee.png')}} alt="idee" height = "200px" width = "200px"></a>
        <a href={{ url('/creatori') }}><img src={{asset('img/creatori.png')}} alt="creatori" height = "200px" width = "200px"></a>
        <a href={{ url('/studenti') }}><img src={{asset('img/studenti.png')}} alt="studenti" height = "200px" width = "200px"></a>
    </div>

@stop
