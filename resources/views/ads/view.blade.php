@extends('layouts.app')

@section('title-block'){{ $ad->title }}@endsection

@section('content')
<h1>{{ $ad->title }}</h1>
{{ $ad->description }}
@endsection


@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection
