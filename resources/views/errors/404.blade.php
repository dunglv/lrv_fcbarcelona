@extends('layouts.master')
@section('title', 'Not found page')
@section('content')
	<div class="body-error _404">
		<div class="alert-error">
			<div class="title-error">
				404 error NOT found page
			</div>
			<div class="desc-error">
				Whoop! We are not found your page that you want try visit. Please don't leave our website and we will check this mistake if reason from our. While waiting we fix this error, you can visit other page at <a href="{{ URL::to('/') }}">here</a>. Thanks!
			</div>
		</div>
		<div class="random_art">
			@foreach($articles as $a)
			<div class="article">
				<div class="title">
					<a href="{{ URL::to($a->alias.'.'.$a->id) }}">{{ $a->title }}</a>
				</div>
				<div class="excerpt">
					{{ $a->description }}
				</div>
				<div class="operation" style="padding: 5px 10px;">
					<a class="btn-readmore" href="{{ URL::to($a->alias.'.'.$a->id) }}">Read more</a>
				</div>
			</div>
			@endforeach
			{{--BUTTON IGNORE--}}
			<div class="btn-ignore _more"><i class="fa fa-refresh"></i></div>
		</div>
	</div>
@stop