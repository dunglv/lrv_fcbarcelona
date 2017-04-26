@extends('admin.index')
@section('title', 'Add new an articles')
@section('style')
	{!! HTML::style('/stylesheet/admin/articles.css') !!}
@stop
@section('script', HTML::script('/tool/ckeditor/ckeditor.js'))
@section('admin.content')
	<div id="_new_a_ad" class="create-art-new">
		{!! 
			Form::open([
				'method' => 'POST',
				'route' => ['admin.article.store'],
				'role' => 'form'
			]) 
		!!}
			{{ csrf_field() }}
			<legend>Create an new article</legend>
		
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" id="" name="title" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Category</label>
				<select name="category" id="in_category">
					<option value="0">Lorem ipsum dolor.</option>
					<option value="0">Consectetur adipisicing elit</option>
					<option value="0">Lorem ipsum dolor.</option>
					<option value="0">Lorem ipsum dolor.</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Content</label>
				<textarea name="content" id="editor_1" cols="30" rows="10"></textarea>
			</div>
			<div class="form-group">
				<p>
					<label for="add_tags">Tags</label>
				</p>
				<div class="add-tag" name="tags">
					<div class="add-wrap-tag">
						
					</div>
					<input type="text" class="e-tag" id="_e_tag">
				</div>
				<div class="_expl">
					**Enter tag and press comma char to enter other tags.
				</div>
			</div>
			<div class="form-group allow-comment">
				<label for="cmt_chk_off"> comment of this article</label>
				<div class="lock-cmt">
					<input type="checkbox" name="lock_comment" value="1" id="cmt_chk_off" class="chk_off">
					<label for="cmt_chk_off">Disable</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		{!! Form::close() !!}
	</div>
	<script>
		 CKEDITOR.replace( 'editor_1' );
	</script>
@stop