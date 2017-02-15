@extends('app')
@section('siteTitle')
    Welcome!
@stop

@section('centerContent')
        <a href={{ url('/about') }}><img src={{asset('img/tre-uniti.png')}} alt="tre-uniti"></a>
    <!--<h2>Be inspired through community</h2>
        <p>We provide web apps for communities and individuals to inspire, develop, and learn cooperatively</p>
    -->
    <hr/>

        <h2>Upgrade in Progress</h2>
    <p>Requests can be sent to brendan.mcgoffin@tre-uniti.org</p>
@stop
