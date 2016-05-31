@extends('admin.main.master')
@section('title', 'Add new an articles')
@section('style')
	{!! HTML::style('/stylesheet/admin/articles.css') !!}
@stop
@section('script', HTML::script('/tool/ckeditor/ckeditor.js'))
@section('main.content')
	<div id="_new_a_ad" class="create-art-new">
		<form action="" method="POST" role="form">
			<legend>Create an new article</legend>
		
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Category</label>
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
				<div class="add-tag">
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
		</form>
	</div>
	<script>
		 CKEDITOR.replace( 'editor_1' );
	</script>
@stop