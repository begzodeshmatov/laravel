<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NavbarRequest;
use App\Navbar;
use App\Http\Resources\NavbarResource;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NavbarResource::collection(Navbar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NavbarRequest $request)
    {
        $requestData=$request->all();
        $requestData['name']=Str::slug($requestData['name']);
        return Navbar::create($requestData);
        // return $request->all();   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(NavbarRequest $request, Navbar $category)
    {
        $category->update($request->all());
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $category)
    {
        $category->delete();
        return "Deleted message";
    }
}
