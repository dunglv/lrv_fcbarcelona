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
    // $list_cate = CategoriesModel::with('articles_this')->get();
    // $list_cate = CategoriesModel::with(array('articles_this', 'user'))
                        // ->get();
    // echo "<pre>";
    //         foreach ($list_cate as  $key) {
    //             // $list_cate->articles_this()->first();
    //            print_r($key);
    //         }
    //     echo "</pre>";
    //     exit();
        // foreach ($list_cate as $value) {
        //     $wh = ['id_cate' => $value['id'], 'status'=> 0];
        //     $list_article = Articles::all()->where('id_cate', $value['id'])->get();
        // }
    // $d= "the maim is tation";
        $articles = Article::all();
        return view('articles.index', compact('articles'));

    }

    public function detail($alias, $id){
        $article  = Articles::with('categories')->with('user')->where(array('fc_articles.id' => $id, 'alias'=> $alias))->get();
        // echo "<pre>";
        //          // print_r($article);
        //          // exit();

        //     foreach ($article as  $key) {
        //         // print_r($key->categories);
        //         // foreach ($key->categories as  $value) {
        //          print_r($key->user);
                    
        //         // }
        //     }
        // echo "</pre>";
        // exit();
        return view('articles.detail', compact($article, 'article'));
    }
    public function list_in_cate($alias ='', $id='')
    {
        $list_in_cate = CategoriesModel::with('articles_this')->where('id', $id)->get();
        // echo "<pre>";
                 // print_r($list_in_cate);
                 // exit();
            // foreach ($article as  $key) {
            //     // print_r($key->categories);
            //     // foreach ($key->categories as  $value) {
            //      print_r($key->categories);
                    
            //     // }
            // }
        // echo "</pre>";
        return view('articles.list_in_cate', compact($list_in_cate, 'list_in_cate'));
    }


}
