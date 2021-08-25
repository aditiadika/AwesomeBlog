<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;
use App\Category;
use App\Setting;
use App\Profile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $recommendationId = 2;
        $postTags = DB::table('post_tag')
            ->where('tag_id', $recommendationId)
            ->pluck('post_id');
        $recommendations = Post::whereIn('id', $postTags)
            ->whereNull('deleted_at')
            ->get()
            ->sortByDesc('created_at');
//        dd($postTags);

//        dd($recommendations->toArray());
//        $contents = Post::whereHas('tags', function ($query) {
//            $query->where('tag_id', 2);
//        })->with('tags')->take(3)->latest()->get();
//        $programs = Post::whereHas('tags', function ($query) {
//            $query->where('tag_id', 3);
//        })->with('tags')->orderBy('created_at')->take(3)->get();
//        $articles = Post::whereHas('tags', function ($query) {
//            $query->where('tag_id', 4);
//        })->with('tags')->orderBy('created_at')->take(3)->get();
//        $setting = Setting::first();
//        $profile = Profile::first();

//        dd($profile);

        return view('frontend.index', compact('recommendations'));
    }

    public function masterContent()
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $contents = Post::orderBy('created_at')->take(5)->paginate(5);
        $contentNotActives = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 2);
        })->with('tags')->take(5)->latest()->paginate(5);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();

        return view('blog.analysis', compact('contentNotActives','contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('frontend.recommendation_detail', compact('post', 'recentPosts', 'categories', 'profile', 'setting'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

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

    public function tradingGuides()
    {
        # code...
        $setting = Setting::first();
        $profile = Profile::first();
        $contents = Post::orderBy('created_at')->take(5)->paginate(5);
        $tradingGuides = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 1);
        })->with('tags')->orderBy('created_at')->take(5)->paginate(5);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();

        return view('blog.Trading-Guides.index', compact('tradingGuides','contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function detailTradingGuides($slug)
    {
        # code...
        $post = Post::where('slug', $slug)->first();
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('blog.Trading-Guides.detail-tradings', compact('post', 'recentPosts', 'categories', 'profile', 'setting'));
    }

    public function programs()
    {
        # code...
        $setting = Setting::first();
        $profile = Profile::first();
        $contents = Post::orderBy('created_at')->take(5)->paginate(5);
        $programs = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 3);
        })->with('tags')->orderBy('created_at')->take(5)->paginate(5);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();

        return view('blog.Programs.index', compact('programs','contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function detailPrograms($slug)
    {
        # code...
        $post = Post::where('slug', $slug)->first();
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('blog.Programs.detail-programs', compact('post', 'recentPosts', 'categories', 'profile', 'setting'));
    }

    public function getArticle()
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $contents = Post::orderBy('created_at')->take(5)->paginate(5);
        $articles = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 4);
        })->with('tags')->orderBy('created_at')->take(5)->paginate(5);
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();

        return view('blog.article.index', compact('articles','contents', 'profile', 'setting', 'recentPosts', 'categories'));
    }

    public function detailArticle($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $recentPosts = Post::orderBy('created_at')->take(3)->get();
        $categories = Category::all();
        $setting = Setting::first();
        $profile = Profile::first();

        return view('blog.article.detail-article', compact('post', 'recentPosts', 'categories', 'profile', 'setting'));
    }
}
