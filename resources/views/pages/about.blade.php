@extends('app')
@section('siteTitle')
    About Tre-Uniti
@stop
@section('centerMenu')
    <a href="/"><img src={{secure_asset('img/tre-uniti.png')}}></a>
@stop
@section('centerContent')
        <h2>About Tre-Uniti</h2>
        <div id = "blankInner">
<p>We are passionate about utilizing technology to enhance communities.
The web applications we create and maintain are designed to help local and global communities collaborate and understand each other.
Each web app itself acts as an independent online community.
    Whenever a user from one of the online communities has a positive influence they are given the opportunity to help manage the administration of the given community.
This results in the most experienced and influential users managing the administration and can lead to full-time employment at Tre-Uniti.</p>
            <p>Tre-Uniti focuses on 3 areas of community to utilize technology for.</p>
            <ul>
                <li>
                    <a href = "https://belle-idee.org/" target = "_blank">Belle-idee</a> for spiritual Ideas
                </li>
                <li>
                    <a href = "https://tre-uniti.org/" target = "_blank">Belle-creatori</a> for creative Projects
                </li>
                <li>
                    <a href = "https://tre-uniti.org/" target = "_blank">Bella-studenti</a>for collaborative Learning
                </li>
            </ul>
        </div>
        <p>
            <a href = "{{ url('/') }}" class = "indexLink">Contact</a>
            <a href = "{{ url('/') }}" class = "indexLink">App Status</a>
        </p>

@stop
@section('centerFooter')

@stop