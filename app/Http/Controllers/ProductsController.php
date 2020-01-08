<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProductsController extends Controller
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
        return view('productsCreate');

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



        $product = new products();

        $product->name = request('name');
        $product->price = request('price');
        if(request()->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName();
            Image::make($img)->save(public_path('/images/uploads/products/'.$imgName));
            $product->img = $imgName;
        }


        $product->save();

        return redirect('/l2admin/products');

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
    public function edit(Products $product)
    {
        return view('editProducts',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Products $product)
    {
        $this->validateRequest();

        $product->name = request('name');
        $product->price = request('price');
        if(request()->file('img'))
        {
            $img = request()->file('img');
            $imgName = $img->getClientOriginalName();
            Image::make($img)->save(public_path('/images/uploads/products/'.$imgName));
            $product->img = $imgName;
        }

        $product->save();

        return redirect('/l2admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id' , $id)->delete();
        return redirect('/l2admin/products');
    }

    protected function validateRequest(){
        return request()->validate([
            'name' => 'required|unique:products',
            'price' => 'required',
            'img' => 'required',
        ]);
    }
}
