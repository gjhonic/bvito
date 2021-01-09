@extends('back.layouts.app')

@section('title-block')Мои Объявления@endsection

@section('content')
<h1>Мои Объявления</h1>

<p>
  <a href="/ads/create" class="btn btn-success btn-lg">Добавить объявление</a>
</p>

  @foreach($ads as $ad)
    <div class="jumbotron">
      <h1 class="display-4">{{ $ad->title }}</h1>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/ads/{{ $ad->id }}" role="button">Подробнее</a>
      </p>
    </div>
  @endforeach
@endsection
