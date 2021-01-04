@extends('layouts.app')

@section('title-block')Создание обьявления@endsection

	@section('content')
		<h1>Создание обьявления</h1>

	  {{ Form::open(array('url' => 'ad/save')) }}

			<div class="form-group">
				<label for="title">Название Обьявления</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
    		<label for="description">Описание</label>
    		<textarea class="form-control" id="description" rows="3" name="description"></textarea>
  		</div>
			<button type="submit" class="btn btn-success">Сохранить</button>

		{{ Form::close() }}


	@endsection
