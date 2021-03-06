<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Category;
use App\Article;
use App\Comment;
use Event;
use DB;
class ArticlesController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $matches = Match::orderBy(DB::raw('RAND()'))->take(1)->get();
    //     return view('layouts.index', compact('matches'));
    // }
    public function index()
    {
    $articles = Article::with('article_category')
                    ->take(5)->where(['status'=>0])
                    ->orderBy('date_created','desc')
                    ->get();
        return view('articles.index', compact('articles'));
    }

    public function detail($alias, $id){
        if(Article::where(['alias'=>$alias, 'id'=>$id])->count()<=0){
            return redirect('/error_404');
        }else{
            $article  = Article::with('article_category')
                                ->with('article_member')
                                ->with('comments')
                                ->where(['fc_articles.id' => $id, 'fc_articles.alias'=> $alias, 'fc_articles.status'=>0])
                                ->get();
            $same_articles = Article::where(['id_cate'=>$article[0]->id_cate])
                                        ->where('id','!=', $article[0]->id)
                                        ->take(2)
                                        ->get();
            $comments = Comment::with(['article', 'member'])->orderBy('date_time','ASC')->where('id_article', $id)->get();
            return view('articles.detail')->with(['article'=>$article, 'same_articles'=>$same_articles, 'comments' => $comments]);
        
        }
    }
    // public function list_in_cate($alias ='', $id='')
    // {
    //     $list_in_cate = CategoriesModel::with('articles_this')->where('id', $id)->get();
    //     // echo "<pre>";
    //              // print_r($list_in_cate);
    //              // exit();
    //         // foreach ($article as  $key) {
    //         //     // print_r($key->categories);
    //         //     // foreach ($key->categories as  $value) {
    //         //      print_r($key->categories);
                    
    //         //     // }
    //         // }
    //     // echo "</pre>";
    //     return view('articles.list_in_cate', compact($list_in_cate, 'list_in_cate'));
    // }

    public function manage(){
        return view('admin.article.index');
    }

    public function create(){
        return view('admin.article.create');
    }

    public function store(){
        $article = new Article();
        $article->id_cate = 1;
        $article->id_user = 1;
        $article->title = Input::get('title');
        $article->alias = Input::get('title').'-alias';
        $article->description = Input::get('title').'-description';
        $article->content = Input::get('content');
        $article->date_created = date('Y-m-d H:i:s');
        $article->date_updated = date('Y-m-d H:i:s');
        $article->tags = 'tags tags tags'; //Input::get('tags');
        $article->views = 0;
        $article->status = 0;
        $article->save();
        return redirect('/admin/articles');
    }

}
