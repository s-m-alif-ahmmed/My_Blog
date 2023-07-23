<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blog, $blogs = [];

    public function index()
    {
        return view('public.home.home',[
            'blogs' => Blog::all(),
        ]);
    }
    public function about()
    {
        return view('public.home.about');
    }
    public function contact()
    {
        return view('public.home.contact');
    }
    public function detail($id)
    {
        return view('public.home.detail',[
            'categories' => Category::all(),
            'blog' => blog::find($id),
            ]);
    }
    public function searchBlogs(Request $request)
    {
        if ($request->search) {
            $searchBlogs = Blog::where('blog_title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('blog_author', 'LIKE', '%' . $request->search . '%')
                ->orWhere('blog_description', 'LIKE', '%' . $request->search . '%')
                ->latest()
                ->paginate(1);

            return view('public.pages.search', compact('searchBlogs'));
        } else {
            return redirect()->back()->with('message', 'No matching result found.');
        }
    }
}
