<?php
namespace App\Repositories;

use App\Post;

class PostRepository implements PostInterface {

    public function all()
    {
        return Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(3);
    }
    public function main_page_posts()
    {
//        $data = Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->take(5)->get();
//        $array = [];
//        foreach($data as $k => $val){
//            $array = $val;
//        }
        return  Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->take(5)->get();
    }
}
