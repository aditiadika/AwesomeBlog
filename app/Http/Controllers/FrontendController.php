<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;
use App\Category;
use App\Setting;
use App\Profile;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $contents = Post::orderBy('created_at')->take(3)->get();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('layouts.frontend', compact('contents', 'setting', 'profile'));
    }

    public function masterContent()
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $contents = Post::orderBy('created_at')->take(5)->paginate(5);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();

        return view('blog.analysis', compact('contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('blog.analysis-detail', compact('post', 'recentPosts', 'categories', 'profile', 'setting'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();
        // $blogCategories = Post::whereHas('category')->get();
        // dd($blogCategories->toArray());
        // $blogCategories = Post::whereHas('category', function ($query) use ($category) {
        //     $query->where('slug', strtolower($id));
        // })->with('category')->get();
        // dd($blogCategories->toArray());

        return view('category', compact('category', 'recentPosts', 'categories', 'profile', 'setting'));
    }

    public function tag($id)
    {
        $tag        = Tag::find($id);
        $title      = $tag->title;
        $settings   = Setting::first();
        $categories     = Category::take(5)->get();

        return view('tag', compact('tag', 'title', 'settings', 'categories'));
    }
}
