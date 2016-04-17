@extends('app')
@section('siteTitle')
    Thank you
@stop

@section('centerText')
        <a href="/"><img src={{secure_asset('img/tre-uniti.png')}} alt="creatori" height = "35%" width = "35%"></a>
        <div id = "inviteInner">
            <h3>Thank you for requesting an invite!</h3>
            <p>We will send your invite code when the site is ready.</p>
            <p>In the meantime feel free to check out: <a href="https://belle-idee.org"><button type = "button" class = "navButton">Belle-Idee</button></a></p>
        </div>

@stop