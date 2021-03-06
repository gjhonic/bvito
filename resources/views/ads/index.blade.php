@extends('layouts.app')

@section('title-block')Обьявления@endsection

@section('content')
<h1>Обьявления</h1>

<ul>
  @foreach($ads as $ad)
    <div class="jumbotron">
      <h1 class="display-4">{{ $ad->title }}</h1>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="ad/{{ $ad->id }}" role="button">Подробнее</a>
      </p>
    </div>
  @endforeach
</ul>
@endsection
