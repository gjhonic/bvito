@extends('layouts.app')

@section('title-block')Создание обьявления@endsection

@section('content')
<h1>Создание обьявления</h1>

{{ Form::open(array('url' => 'foo/bar')) }}
	//
{{ Form::close() }}

@endsection
