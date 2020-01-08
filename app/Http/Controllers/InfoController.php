<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InfoController extends Controller
{
    public function create()
    {
        return view('infos.infosCreate');

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



        $info = new Info();

        if(request()->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName();
            Image::make($img)->save(public_path('/images/infos/'.$imgName));
            $info->img = $imgName;
        }

        $info->title = request('title');
        $info->sub_title = request('sub_title');
        $info->body = request('body');




        $info->save();

        return redirect('/l2admin/infos');

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
    public function edit(Info $infos)
    {
        return view('infos.editInfos',compact('infos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Info $infos)
    {
        request()->validate([
            'title' => 'required|unique:infos',
            'sub_title' => 'required',
            'body' => 'required',
        ]);;

        $infos->title = request('title');
        $infos->sub_title = request('sub_title');
        $infos->body = request('body');
        if(request()->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName();
            Image::make($img)->save(public_path('/images/infos/'.$imgName));
            $infos->img = $imgName;
        }

        $infos->save();

        return redirect('/l2admin/infos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Info::where('id' , $id)->delete();
        return redirect('/l2admin/infos');
    }

    protected function validateRequest(){
        return request()->validate([
            'img' => 'required',
            'title' => 'required|unique:infos',
            'sub_title' => 'required',
            'body' => 'required',
        ]);
    }
}
