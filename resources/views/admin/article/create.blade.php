@extends('admin.main.master')
@section('title', 'Add new an articles')
@section('style')
	HTML::style('/stylesheet/admin/articles.css')
@stop
@section('script', HTML::script('/tool/ckeditor/ckeditor.js'))
@section('main.content')
	<form action="" method="POST" role="form">
		<legend>Create an new article</legend>
	
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Title</label>
			<select name="in_category" id="in_category">
				<option value="0">Lorem ipsum dolor.</option>
				<option value="0">Consectetur adipisicing elit</option>
				<option value="0">Lorem ipsum dolor.</option>
				<option value="0">Lorem ipsum dolor.</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea name="editor_1" id="editor_1" cols="30" rows="10"></textarea>
		</div>
		<div class="form-group">
			<p>
				<label for="add_tags">Tags</label>
			</p>
			<textarea name="add_tags" id="add_tag" cols="30" placeholder="Input tags of article"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Create</button>
	</form>
	<script>
		 CKEDITOR.replace( 'editor_1' );
	</script>
@stop