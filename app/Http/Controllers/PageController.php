<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    //
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->get();
        return view('page', ['page' => $page[0]]);
    }
}
