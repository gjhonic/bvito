@extends('back.layouts.app')

@section('title-block')Редактировать объявление {{ $ad->title }}@endsection

	@section('content')
		<h1>Редактировать объявление <i>{{ $ad->title }}</i> </h1>

	  {{ Form::open(array('url' => 'ads/update/'.$ad->id)) }}

			<div class="form-group">
				<label for="title">Название объявления</label>
				<input type="text" class="form-control" id="title" name="title" value="{{ $ad->title }}">
			</div>

			<div class="form-group">
				<label for="title">Price</label>
				<input type="text" class="form-control" id="title" name="price" value="{{ $ad->price }}">
			</div>

			<div class="form-group">
    		<label for="description">Описание</label>
    		<textarea class="form-control" id="description" rows="3" name="description">{{ $ad->description }}</textarea>
  		</div>

			<button type="submit" class="btn btn-success">Изменить</button>

		{{ Form::close() }}


	@endsection
