@extends('admin.main.master')
@section('title', 'Manage articles')
@section('style')
	{!! HTML::style('/stylesheet/admin/articles.css') !!}
@stop
@section('main.content')
<div class="today-block">
    <div class="tit-block">
        <h2>Total Articles</h2>
        <div class="right-fil filter">
            <select name="filter_num" id="filer_num">
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="200">200</option>
            </select>
        </div>
    </div>
    <div class="statis-sub-block">
        <div class="left col-tit">
            <i class="fa fa-user-plus"></i>
        </div>
        <div class="right col-quan">
            30
        </div>
    </div>
    <div class="list-block">
        <div class="head-list t-head">
            <div class="t-cell a-id">
                ID
            </div>
            <div class="t-cell a-user">
                User
            </div>
            <div class="t-cell a-name">
                Title
            </div>
            <div class="t-cell a-status">
                Status
            </div>
            <div class="t-cell a-date-pub">
                Date pub
            </div>
            <div class="t-cell a-hand">
                Proccess
            </div>
        </div>
        <div class="body-list t-body">
            <div class="i-m t-row">
                <div class="t-cell a-id">
	                1
	            </div>
	            <div class="t-cell a-user">
	                dung
	            </div>
	            <div class="t-cell a-name">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sunt.
	            </div>
	            <div class="t-cell a-status">
	                OK
	            </div>
	            <div class="t-cell a-date-pub">
	                10-10-2016 00:00:00
	            </div>
                <div class="t-cell a-hand">
                	<button type="button" class="btn btn-default"><i class="fa fa-lock"></i></button>
                	<button type="button" class="btn btn-success"><i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
</div>
@stop


