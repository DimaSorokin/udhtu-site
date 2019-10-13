<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Repositories\PhotoInterface;
use App\Tag;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PhotoController extends Controller
{
    //
    protected $photos;

    public function __construct(PhotoInterface $photos)
    {
        $this->photos = $photos;
    }

    public function index()
    {
        $tags = Tag::all();
        $photos = Photo::with('tag')->get();
        $seo = Page::where('slug', 'fotogalereya-kafedri-informacijnih-sistem')->get();

        return view('photo', ['photos' => $photos, 'tags'=> $tags, 'seo' => $seo[0]]);
    }
}
