@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
<h1>Главная</h1>

<ul>
  @foreach($ads as $ad)
    <li>
      {{
        $ad->title
      }}
    </li>
  @endforeach
</ul>

@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection
