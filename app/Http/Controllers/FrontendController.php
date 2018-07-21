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


        return view('master-content', compact('contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                    ->with('title', $post->title)
                    ->with('settings', Setting::first())
                    ->with('categories', Category::take(5)->get())
                    ->with('next', Post::find($next_id))
                    ->with('prev', Post::find($prev_id))
                    ->with('tags', Tag::all());
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                    ->with('title', $category->name)
                    ->with('settings', Setting::first())
                    ->with('categories', Category::take(5)->get());
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
