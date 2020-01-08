<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Intervention\Image\Facades\Image;
class AlbumController extends Controller
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
        return view('albums.albumsCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $this->validateRequest();



        $albums = new Album();
        if(request()->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName();
            Image::make($img)->save(public_path('/images/albums/'.$imgName));
            $albums->img = $imgName;
        }
        $albums->video = request('video');

        $albums->save();

        return redirect('/l2admin/albums');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::where('id' , $id)->delete();
        return redirect('/l2admin/albums');
    }

    protected function validateRequest(){
        return request()->validate([
            'img' => 'required',
        ]);
    }
}
