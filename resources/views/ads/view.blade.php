@extends('layouts.app')

@section('title-block'){{ $ad->title }}@endsection

@section('content')

<div class="jumbotron">
  <h1 class="display-4">{{ $ad->title }}</h1>
  <p class="lead">{{ $ad->description }}</p>
  <hr class="my-4">
  <p>{{ $ad->getUser()->name }}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/ads/update/{{ $ad->id }}" role="button">Редактировать</a>
    <a class="btn btn-danger btn-lg" href="/ads/delete/{{ $ad->id }}" role="button">Удалить</a>
  </p>
</div>

<p>
  <a href="/ads" class="btn btn-primary">Назад к объявлениям</a>
</p>

@endsection
