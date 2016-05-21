<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleFormRequest;
use App\Comment;
use Illuminate\Support\Facades\Input;
class CommentsController extends Controller
{
    public function store(ArticleFormRequest $request)
    {
    	$comment = new Comment;
    	$comment->id_user = '1';
    	$comment->id_article = Input::get('id_article');
    	$comment->date_time = date('Y-m-d H:i:s');
    	$comment->content = $request->input('content_comment');
    	$comment->status ='0';
    	$comment->save();
    	return redirect()->route('article.detail', [Input::get('slug'), Input::get('id_article')]);
    }
}
