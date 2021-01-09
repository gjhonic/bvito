@extends('layouts.app')

@section('title-block')Создание объявления@endsection

	@section('content')
		<h1>Создание объявления</h1>

	  {{ Form::open(array('url' => 'ads/save')) }}

			<div class="form-group">
				<label for="title">Название Объявления</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="title">Price</label>
				<input type="text" class="form-control" id="title" name="price">
			</div>
			<div class="form-group">
    		<label for="description">Описание</label>
    		<textarea class="form-control" id="description" rows="3" name="description"></textarea>
  		</div>
			<button type="submit" class="btn btn-success">Сохранить</button>

		{{ Form::close() }}


	@endsection
