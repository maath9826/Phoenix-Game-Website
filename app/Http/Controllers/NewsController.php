<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{

    // ------------ dashboard news -----------
    public function index()
    {

    }


    public function create()
    {
        return view('news.newsCreate');

    }


    public function store(Request $request)
    {

        // dd($request->file('img'));

        $request->validate([
            'title' => 'required|unique:news',
            'body' => 'required',
            'img' => 'required',
        ]);

        $news = new News();

        $news->title = request('title');
        $news->body = request('body');
        if($request->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName().'.'.$img->getClientOriginalExtension();
            Image::make($img)->save(public_path('/images/news/'.$imgName));
            $news->img = $imgName;
        }


        $news->save();

        return redirect('/l2admin/news');

    }

    public function edit(News $news)
    {
        return view('news.editNews',compact('news'));

    }

    public function update(News $news , Request $request)
    {

        $request->validate([
            'title' => 'required|unique:news',
            'body' => 'required',
            'img' => 'required',
        ]);

        $news->title = request('title');
        $news->body = request('body');
        if($request->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName().'.'.$img->getClientOriginalExtension();
            Image::make($img)->save(public_path('/images/news/'.$imgName));
            $news->img = $imgName;
        }

        $news->save();

        return redirect('/l2admin/news');
    }

    public function destroy($id)
    {
        News::where('id' , $id)->delete();
        return redirect('/l2admin/news');
    }

    // ------------ client news -----------

    public function showSingleNews($id){
        $news = News::where('id',$id)->get();
        // return dd($news);

        return view('singleNews' , compact('news'));
    }

}
