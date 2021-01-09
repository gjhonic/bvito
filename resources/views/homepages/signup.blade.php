@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('content')
  <h1>Регистрация</h1>

  {{ Form::open(array('url' => '/signup_proc')) }}

    <div class="form-group">
      <label for="exampleInputName">Your name:</label>
      <input type="text" class="form-control" id="exampleInputName" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputUserName">Your login:</label>
      <input type="text" class="form-control" id="exampleInputUserName" placeholder="" name="username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="" name="password">
    </div>
    <button type="submit" class="btn btn-success">Sign up</button>

  {{ Form::close() }}

@endsection
