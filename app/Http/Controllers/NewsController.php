<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index()
    {
        
        $cate = DB::table("news")
        ->join('categories', 'categories.id_category','=','news.idCT')
        -> select('id','title','summarise','image_url','category','idCT')->get();
        $categ = DB::table("news")->orderBy('idCT','desc')->get();
        $data = ['cate' => $cate,'categ' => $categ];
        return view("partials/index", $data);
    }

    function details($id = 0)
    {
        $news = DB::table('news')->where("id", $id)->first();
        $cate = DB::table("news")-> select('id','title','summarise','image_url')->get();
        
        $data = ['id' => $id, 'news' => $news,'cate' => $cate]; 
        return view("partials/details", $data);
    }
    function category($idCT = 0)
    {

        $listcate = DB::table("news")->where('idCT',$idCT)
        ->join('categories', 'category.id_category','=','news.idCT')
    
        ->orderBy('idCT','desc')->get();
        $cate = DB::table("news")-> select('id','title','summarise','image_url')->get();
        $data = ['idCT' => $idCT , 'listcate' => $listcate , 'cate' => $cate];
        return view("partials/category", $data);
    }
    function search()
    {
        $search_bar_input = request()->get('query');
        $news = DB::table("news")->orderBy("id","desc")
        ->whereAny([
            'title',
            'content',
            'summarise',
            'category',
            'author',
        ], 'like' ,'%'. $search_bar_input .'%')
        ->get();
        $results = $news ;

        

        $data= [ 'news' => $news ,'search_bar_input'=> $search_bar_input ,'results'=> $results];
        if ($data != 0) {
            return view('partials/result' , $data);
        }else {
            echo "Error";
        }
        
        
    }
    
}
