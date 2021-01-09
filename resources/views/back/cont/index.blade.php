@extends('back.layouts.app')

@section('title-block')Главная@endsection

@section('content')
<h1>Доска объявлений Бвито</h1>

<form>
  <div class="form-row align-items-center">
    <div class="col-sm-8 my-1">
      <input type="text" class="form-control" id="inlineFormInputName" name="text_find">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>
</form>
<br>

@foreach($ads as $ad)
  <div class="jumbotron">
    <h1 class="display-4">{{ $ad->title }}</h1>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="ads/{{ $ad->id }}" role="button">Подробнее</a>
    </p>
  </div>
@endforeach

@endsection
