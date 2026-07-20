<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogPostController extends Controller
{
    public function getImageUrl($request)
    {
        $slug = Str::slug($request->title);
        $image = $request->file('image');
        $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
        $directory = 'blog-images/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function index()
    {
        $posts = BlogPost::orderBy('id', 'desc')->get();
        return view('admin.blog-post.index', compact('posts'));
    }

    public function edit($id)
    {
        $posts = BlogPost::orderBy('id', 'desc')->get();
        $editItem = BlogPost::find($id);
        return view('admin.blog-post.index', compact('posts', 'editItem'));
    }

    public function store(Request $request)
    {
        $post = new BlogPost();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->published_date = $request->published_date;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        if ($request->file('image')) {
            $post->image = $this->getImageUrl($request);
        }
        if ($request->status) { $post->status = $request->status; } else { $post->status = 0; }
        $post->save();
        Alert::success('Blog Post Added Successfully');
        return redirect()->route('blog-post.index');
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->published_date = $request->published_date;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        if ($request->file('image')) {
            if (file_exists($post->image)) { unlink($post->image); }
            $post->image = $this->getImageUrl($request);
        }
        if ($request->status) { $post->status = $request->status; } else { $post->status = 0; }
        $post->save();
        Alert::success('Blog Post Updated Successfully');
        return redirect()->route('blog-post.index');
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);
        if (file_exists($post->image)) { unlink($post->image); }
        $post->delete();
        Alert::success('Blog Post Deleted Successfully');
        return redirect()->back();
    }
}
