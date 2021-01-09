@extends('layouts.app')

@section('title-block')Аутентификация@endsection

@section('content')
  <h1>Аутентификация</h1>
  <form method="POST" action="/signup_proc">
    <div class="form-group">
      <label for="exampleInputUserName">Your login: </label>
      <input type="text" class="form-control" id="exampleInputUserName" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password: </label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="">
    </div>
    <button type="submit" class="btn btn-success">Sign in</button>
  </form>

@endsection
