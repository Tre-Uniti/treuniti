@extends('app')
@section('siteTitle')
    Contact Tre-Uniti
@stop
@section('centerMenu')
    <a href="/"><img src={{secure_asset('img/tre-uniti.png')}} alt="creatori" height = "35%" width = "35%"></a>
@stop
@section('centerText')

    <div id = "inviteInner">
        <h3>Contact Us:</h3>
        <ul class = "tour">
            <li><a href = "https://www.facebook.com/TreUniti" target = "_blank" class = "welcomeLink">Facebook</a></li>
            <li><a href = "https://twitter.com/Tre_Uniti" target = "_blank" class = "welcomeLink">Twitter</a></li>
            <li>Email: brendan.mcgoffin@tre-uniti.org</li>
            <li>Phone: 360-333-8783</li>
            <li>Address: PO Box 888</li>
            <li>Sedro-Woolley, Washington</li>
            <li>United States of America</li>
        </ul>
    </div>
@stop
@section('centerFooter')
    <hr/>
    <a href={{url('/about')}}><button type = "button" class = "interactButton">About Us</button></a>
@stop