@extends('app')
@section('siteTitle')
    Welcome!
@stop

@section('centerContent')
    <a href={{ url('/') }}><img src={{asset('img/tre-uniti.png')}} alt="tre-uniti"></a>
   <h2>Be inspired through community</h2>
    <p>We provide web apps to help people inspire, develop, and learn cooperatively.</p>
    <p>
        <a href = "{{ url('/') }}" class = "indexLink">About Us</a>
        <a href = "{{ url('/') }}" class = "indexLink">Contact</a>
        <a href = "{{ url('/') }}" class = "indexLink">App Status</a>
    </p>
    <div>
        <a href = "{{ url('https://www.facebook.com/TreUniti/') }}" target = "_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
        <a href = "{{ url('https://twitter.com/Tre_Uniti') }}" target = "_blank"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
        <a href = "{{ url('https://plus.google.com/+TreUnitiLLCSedroWoolley') }}" target = "_blank"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
    </div>

@stop
