@extends('front.layouts.app')

@section('title-block')Главная@endsection

@section('pers_content')

<h1>Дарова {{ $user['name'] }} </h1>
<p>
  <a href="ads/create" class="btn btn-success btn-lg">Добавить объявление</a>
</p>

@endsection
