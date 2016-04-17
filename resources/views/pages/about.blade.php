@extends('app')
@section('siteTitle')
    About Tre-Uniti
@stop
@section('centerMenu')
    <a href="/"><img src={{secure_asset('img/tre-uniti.png')}} alt="creatori" height = "35%" width = "35%"></a>
@stop
@section('centerText')

    <div id = "inviteInner">
        <h3>What is Tre-Uniti?</h3>
        <ul class = "tour">
            <li>Builder and maintainer of community web apps</li>
            <li>Focus on local and global integration</li>
            <li>Owned and operated by the users of the apps</li>
            <li>Powered by Laravel & Open Source</li>
            <li>Located: Sedro-Woolley WA USA</li>
            <li>Current CEO: Brendan McGoffin</li>
            <li>Founded: September 27, 2015</li>
        </ul>
    </div>
@stop
@section('centerFooter')
    <hr/>
    <a href={{url('/contact')}}><button type = "button" class = "interactButton">Contact Us</button></a>
@stop