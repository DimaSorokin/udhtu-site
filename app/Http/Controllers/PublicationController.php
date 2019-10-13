<?php

namespace App\Http\Controllers;

use App\Repositories\PublicationInterface;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PublicationController extends Controller
{
    protected $publications;

    public function __construct(PublicationInterface $publications)
    {
        $this->publications = $publications;
    }

    public function index()
    {
        $seo = Page::where('slug', 'piblikaciyi-kafedri-informacijnih-sistem')->get();
        $data = ['publications' => $this->publications->getMainPublication(), 'seo' => $seo[0]];
        return view('publication', $data);
    }
}
