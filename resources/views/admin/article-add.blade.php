@extends('writing::admin.layout')

<?php
	$site_title = 'Add Article — '.Config::get('settings.title');
?>

@section('title', 'Create Article')

@section('content')

	<div class="admin-form">

		{{ Form::open(['url' => '/admin/article/add', 'method' => 'post']) }}

			<p>{{ Form::text('title', '', ['placeholder' => 'Title']) }}</p>

			<p>{{ Form::text('image', '', ['placeholder' => 'Image']) }}</p>

			<p>{{ Form::text('video', '', ['placeholder' => 'Video']) }}</p>

			<p>{{ Form::textarea('text', '', ['placeholder' => 'Text']) }}</p>
			
			<p>{{ Form::text('published_at', '', ['placeholder' => 'Publishing Date']) }}</p>

			<p>{{ Form::text('tags_str', '', ['placeholder' => 'Tags']) }}</p>			

			<p>{{ Form::submit('Create') }}</p>

		{{ Form::close() }}

	</div>

@endsection