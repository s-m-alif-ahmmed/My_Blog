<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category, $categories, $status;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.manage',['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::createCategory($request);
        return back()->with('message','Category Info save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.category.detail',['category' => Category::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.category.edit-category',['category' => Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category')->with('message','Category update successfully.');
    }

    public function categoryChangeStatus($id)
    {
        $getStatus = Category::select('status')->where('id',$id)->first();
        if($getStatus->status == 1)
        {
            $status = 0;
        }
        elseif($getStatus->status == 0)
        {
            $status = 1;
        }
        Category::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::deleteCategory($id);
        return redirect('/category')->with('message', 'Category delete successfully.');
    }
}
