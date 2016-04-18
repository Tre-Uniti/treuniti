@extends('app')
@section('siteTitle')
    Creatori Invite
@stop

@section('centerText')
        <a href="/"><img src={{secure_asset('img/creatori.png')}} alt="creatori" height = "35%" width = "35%"></a>
        <div id = "inviteInner">
        <h3>What is Belle-Creatori?</h3>
        <ul class = "tour">
        <li>A community of developers and end users</li>
        <li>Integrated with local and global Projects</li>
        <li>Powered by Laravel & Open Source</li>
        <li>Moderated based on respect and tolerance</li>
        <li>Supported by sponsors with promotions</li>
        <li>Community Questions about features / security</li>
        <li>Maintained by Tre-Uniti LLC</li>
        </ul>
</div>
    {!! Form::open(['url' => '/creatori/invite']) !!}
    <table class = "formData">
        <tr>
            <th> {!! Form::label('email', 'Email') !!}</th>
        </tr>
        <tr>
            <td>{!! Form::text('email', null, ['class' => 'createAttributes']) !!}</td>
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