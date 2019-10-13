<?php

namespace App\Http\Controllers;

use App\Repositories\AnnouncementInterface;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class AnnouncementController extends Controller
{
    protected $announcements;

    public function __construct(AnnouncementInterface $announcements)
    {
        $this->announcements = $announcements;
    }
    public function index()
    {
        $seo = Page::where('slug', 'ogoloshennya-kafedri')->get();
        $data = ['announcements' => $this->announcements->all(), 'seo' => $seo[0]];
        return view('announcement', $data);
    }
}
