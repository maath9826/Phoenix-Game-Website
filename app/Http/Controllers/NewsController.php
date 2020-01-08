<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.newsCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.editNews',compact('news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id' , $id)->delete();
        return redirect('/l2admin/news');
    }
}
