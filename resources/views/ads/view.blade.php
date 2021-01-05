@extends('layouts.app')

@section('title-block'){{ $ad->title }}@endsection

@section('content')

<div class="jumbotron">
  <h1 class="display-4">{{ $ad->title }}</h1>
  <p class="lead">{{ $ad->description }}</p>
  <hr class="my-4">
  <p>{{ $ad->getUser()->name }}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Редактировать</a>
  </p>
</div>

<p>
  <a href="/ad" class="btn btn-primary">Назад к обьявлениям</a>
</p>

@endsection
