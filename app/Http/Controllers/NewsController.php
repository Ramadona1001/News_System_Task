<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','DESC')->paginate(10);
        return view('welcome',compact('news'));
    }

    public function create(){
        return view('add');
    }

    public function add_news(Request $request){
        $news = new News();
        $news->title = $request->title;
        $news->short_desc = $request->short_desc;
        $news->content = $request->content;
        $news->add_date = date('D M Y');
        $news->save();
        return redirect('/');
    }

    public function update($id){
        $news = News::findOrfail($id);
        return view('update',compact('news'));
    }

    public function update_news(Request $request){
        $news = News::findOrfail($request->id);
        $news->title = $request->title;
        $news->short_desc = $request->short_desc;
        $news->content = $request->content;
        $news->add_date = date('D M Y');
        $news->save();
        return back();
    }

    public function delete($id){
        $news = News::findOrfail($id);
        $news->delete();
        return redirect('/');
    }
}
