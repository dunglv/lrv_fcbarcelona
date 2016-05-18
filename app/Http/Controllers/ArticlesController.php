<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Article;
use Event;
use DB;
class ArticlesController extends Controller
{
    public function index()
    {
    $articles = Article::with('article_category')
                    ->take(5)->where(['status'=>0])
                    ->orderBy('date_created','desc')
                    ->get();
        return view('articles.index', compact('articles'));
    }

    public function detail($alias, $id){
        $article  = Article::with('article_category')
                            ->with('article_member')
                            ->where(['fc_articles.id' => $id, 'fc_articles.alias'=> $alias, 'fc_articles.status'=>0])
                            ->get();
        // $article = Article::find($id);
        // echo "<pre>";
        //          print_r($article);
        //     //      // exit();

        //     // foreach ($article as  $key) {
        //     //     // print_r($key->categories);
        //     //     // foreach ($key->categories as  $value) {
        //     //      print_r($key->user);
                    
        //     //     // }
        //     // }
        // echo "</pre>";
        // exit();
        return view('articles.detail', compact($article, 'article'));
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


}
