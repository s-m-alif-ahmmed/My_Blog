<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.manage-blog',[
            'categories' => Category::all(),
            'blogs' => Blog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add-blog',[
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        Blog::newBlog($request);
        return back()->with('message','Blog Info save successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit-blog',[
            'categories'    => Category::all(),
            'blog'          => Blog::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog')->with('message','Blog update successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('admin.blog.detail',[
            'categories' => Category::all(),
            'blog' => Blog::find($id),
            ]);
    }

    public function blogChangeStatus($id)
    {
        $getStatus = Blog::select('status')->where('id',$id)->first();
        if($getStatus->status == 1)
        {
            $status = 0;
        }
        elseif($getStatus->status == 0)
        {
            $status = 1;
        }
        Blog::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Blog Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Blog::destroyBlog($id);
        return back()->with('message','Blog delete successfully.');
    }
}
