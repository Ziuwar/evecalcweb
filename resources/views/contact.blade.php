@extends('layouts.app')

@section('content')
  <h1> Contact </h1>

  <p>Name and E-Mail Address are mandatory. Your data shall not leave my server.</p>

  {!! Form::open(array('url' => 'http://evecalc.net/contact/submit')) !!}

    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>

    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
    </div>

    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
    </div>

    <div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>

  {!! Form::close() !!}
@endsection
