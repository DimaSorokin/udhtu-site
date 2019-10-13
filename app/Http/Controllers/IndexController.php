<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repositories\PostInterface;
use App\Slider;
use App\Student;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class IndexController extends Controller
{
    public function __construct(PostInterface $posts)
    {
        $this->posts = $posts;
    }

    //
    public function index()
    {
        $seo = Page::where('slug', 'main')->get();
        $posts = ['posts' => $this->posts->main_page_posts()];
            foreach($posts as $k => $val){
                $arra = $val;
            }
        $students = Student::all()->sortBy("id");
        $sliders = Slider::all()->sortBy("id");
        return view('welcome', ['posts' => $arra, 'students' => $students, 'sliders' => $sliders, 'seo' => $seo[0]]);
    }
}
