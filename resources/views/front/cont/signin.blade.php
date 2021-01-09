@extends('front.layouts.app')

@section('title-block')Аутентификация@endsection

@section('content')
  <h1>Аутентификация</h1>

  {{ Form::open(array('url' => '/signin_proc')) }}

    <div class="form-group">
      <label for="exampleInputUserName">Your login: </label>
      <input type="text" class="form-control" id="exampleInputUserName" placeholder="" name="username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password: </label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="" name="password">
    </div>
    <button type="submit" class="btn btn-success">Sign in</button>
    <a href="/signup" class="btn btn-light">No account - signup</a>
  </form>

  {{ Form::close() }}

@endsection
