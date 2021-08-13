<?php

namespace App\Http\Controllers;

use App\Models\FrontendController;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class FrontendControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $data = Blog::join('users','users.id','=','blogs.created_by')
        ->select('blogs.*','users.name')
        ->latest()
        ->get();

        $popular = Blog::where('popular', 'false')->latest()->get();
        $featured = Blog::where('featured', 'false')->latest()->first();
        return view('front.blog',compact('data','popular','featured'));
    }


    public function index()
    {
        $data = Blog::join('users','users.id','=','blogs.created_by')
        ->select('blogs.*','users.name')
        ->latest()
        ->limit(3)
        ->get();

        $popular = Blog::where('popular', 'false')->latest()->get();
        $featured = Blog::where('popular', 'false')->latest()->first();
        return view('front.index',compact('data','popular','featured'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function single_blog($id)
    {
        $data = Blog::where('id', $id)->first();

        $author = User::where('id', $data->created_by)->first();

        return view('front.blog2',compact('data','author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontendController $frontendController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontendController $frontendController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontendController $frontendController)
    {
        //
    }
}
