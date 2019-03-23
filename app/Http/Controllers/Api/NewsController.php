<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsCollection;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','DESC')->paginate(10);
        return NewsCollection::collection($news);
    }

    public function show($id){
        $new = News::findOrfail($id);
        return new NewsCollection($new);
    }

    public function store(Request $request){
        $news = new News();
        $news->title = $request->title;
        $news->short_desc = $request->short_desc;
        $news->content = $request->content;
        $news->add_date = date('D M Y');
        $news->save();
        return NewsCollection::collection(News::orderBy('created_at','DESC')->paginate(10));
    }

    public function update($id , Request $request){
        $news = News::findOrfail($id);
        $news->title = $request->title;
        $news->short_desc = $request->short_desc;
        $news->content = $request->content;
        $news->add_date = date('D M Y');
        $news->save();
        return new NewsCollection($news);
    }
}
