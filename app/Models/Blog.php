<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['blog_title','blog_author','blog_image','short_description','long_description','quote_author','blog_quote','category_id'];

    private static $blog, $image, $imageName, $imageUrl, $directory;

    public static function newBlog($request)
    {
        self::$imageUrl = self::imageUpload($request);

        self::$blog = new Blog();
        self::$blog->category_id        = $request->category_id;
        self::$blog->blog_title         = $request->blog_title;
        self::$blog->blog_author        = $request->blog_author;
        self::$blog->blog_image         = self::$imageUrl;
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->quote_author       = $request->quote_author;
        self::$blog->blog_quote         = $request->blog_quote;
        self::$blog->save();
    }

    public static function imageUpload($request)
    {
        self::$image        = $request->file('blog_image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "img/upload/";
        self::$image -> move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if ($request->file('blog_image'))
        {
           if(file_exists(self::$blog->blog_image))
           {
               unlink(self::$blog->blog_image);
           }
           self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$blog->blog_image;
        }
        self::$blog->category_id        = $request->category_id;
        self::$blog->blog_title         = $request->blog_title;
        self::$blog->blog_author        = $request->blog_author;
        self::$blog->blog_image         = self::$imageUrl;
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->quote_author       = $request->quote_author;
        self::$blog->blog_quote         = $request->blog_quote;
        self::$blog->save();
    }

    public static function destroyBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->blog_image))
        {
            unlink(self::$blog->blog_image);
        }
        self::$blog->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
