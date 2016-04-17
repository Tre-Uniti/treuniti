@extends('app')
@section('siteTitle')
    Studenti Invite
@stop
@section('centerMenu')
    <a href="/"><img src={{secure_asset('img/studenti.png')}} alt="studenti" height = "35%" width = "35%"></a>
@stop
@section('centerText')

    <div id = "inviteInner">
        <h3>What is Bella-Studenti?</h3>
        <ul class = "tour">
            <li>A community of teachers, students, and alumni</li>
            <li>Integrated with local and global schools</li>
            <li>Powered by Laravel & Open Source</li>
            <li>Moderated based on respect and tolerance</li>
            <li>Supported by sponsors with promotions</li>
            <li>Community Questions about topics and research</li>
            <li>Maintained by Tre-Uniti LLC</li>
        </ul>
</div>
        {!! Form::open(['url' => '/creatori/invite']) !!}
        <table class = "formData">
            <tr>
                <th> {!! Form::label('email', 'Email') !!}</th>
            </tr>
            <tr>
                <td>{!! Form::text('email', null, ['class' => 'createAttributes', 'placeholder' => 'Send invite to:']) !!}</td>
            </tr>
        </table>
        <div class = "createSubmit">
            {!! Form::submit('Request an Invite', ['class' => 'navButton']) !!}
            {!! Form::close()   !!}
        </div>
        @include('errors.errorList')
@stop
@section('centerFooter')
    <hr/>
    <a href={{url('/')}}><button type = "button" class = "interactButton">Back to Tre-Uniti</button></a>
@stop
