@extends('app')
@section('siteTitle')
    About Tre-Uniti
@stop
@section('centerMenu')
    <a href="/"><img src={{secure_asset('img/idee.png')}} alt="idee" height = "35%" width = "35%"></a>
@stop
@section('centerText')

    <div id = "inviteInner">
        <h3>What is Belle-Idee?</h3>
        <ul class = "tour">
            <li>A community of idea & belief journeyers</li>
            <li>Integrated with local and global Beacons</li>
            <li>Powered by Laravel & Open Source</li>
            <li>Moderated based on respect and tolerance</li>
            <li>Supported by sponsors with promotions</li>
            <li>Community Questions about ideas & beliefs</li>
            <li>Maintained by <a href = "https://tre-uniti.org" target="_blank" class = "welcomeLink">Tre-Uniti LLC</a></li>
        </ul>

    </div>
@stop
@section('centerFooter')
    <a href="https://belle-idee.org/auth/login"><button type = "button" class = "navButton">Login</button></a>
    <a href="https://belle-idee.org/auth/register"><button type = "button" class = "navButton">Register</button></a>
    <a href="https://belle-idee.org/demo"><button type = "button" class = "navButton">View Demo Page</button></a>
    <hr/>
    <a href={{url('/')}}><button type = "button" class = "interactButton">Back to Tre-Uniti</button></a>
@stop
