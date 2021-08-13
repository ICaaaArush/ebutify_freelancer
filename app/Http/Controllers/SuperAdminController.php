<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Auth;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('super-admin');
    }
    public function index()
    {
        // if(Auth::user()->user_type == 'admin'){
            return view('admin.index');
        // }else{
        //     return back();
        // }
        
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
        if($request->image != null)
        {
        $path = $request->image->store('blog/uploads', 'public');
        }
        $add = new Blog;
        $add->heading = $request->heading;
        $add->image = $path;
        $add->body = $request->editor;
        if($request->popular == "false"){
            $add->popular = 'false';    
        }else{
            $add->popular = 0;
        }
        if($request->featured == 'false'){
            $add->featured = 'false';    
        }else{
            $add->featured = 0;
        }
        $add->created_by = Auth::user()->id;
        $add->save();

        return redirect()->back()->with('status', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function blog()
    {
        return view('admin.blog-create');
    }

    public function blog_index(){
        $blog = Blog::latest()->get();
        return view('admin.blog-index',compact('blog'));
    }

    public function blog_edit($id){

        $data = Blog::where('id', $id)->first();

        return view('admin.blog-create',compact('data'));
    }

    public function blog_update(Request $request,$id){
        if($request->popular == 'false' or $request->popular == '0'){
            $popular = 'false';    
        }else{
            $popular = 0;
        }
        if($request->featured == 'false' or $request->featured == '0'){
            $featured = 'false';    
        }else{
            $featured = 0;
        }

        if(isset($request->image)){
            $path = $request->image->store('blog/uploads', 'public');

            $update = Blog::where('id', $id)->update([
                'heading' => $request->heading,
                'image' => $path,
                'body' => $request->editor,
                'featured' => $feature,
                'popular' => $popular
            ]);
            }else{
                $update = Blog::where('id', $id)->update([
                    'heading' => $request->heading,
                    'body' => $request->editor,
                    'featured' => $featured,
                    'popular' => $popular
                ]);
            }
            return redirect()->back()->with('status', 'Blog updated successfully');
    }

    public function blog_delete($id){
        $delete = Blog::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Blog Deleted Successfully!');
    }
}
