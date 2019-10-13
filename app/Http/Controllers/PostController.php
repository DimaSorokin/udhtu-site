<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Repositories\PostInterface;
use TCG\Voyager\Models\Page;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostInterface $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $seo = Page::where('slug', 'novini-kafedri-informacijnih-sistem')->get();
        $data = ['posts' => $this->posts->all(), 'seo' => $seo[0]];
        return view('post', $data);
    }
    public function show($slug){
        $data = Post::where('slug', $slug)->firstOrFail();
        return view('single-post', ['post' => $data]);
    }
}
