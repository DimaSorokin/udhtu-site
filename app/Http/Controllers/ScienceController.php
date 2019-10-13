<?php

namespace App\Http\Controllers;

use App\Olimpiad;
use App\Publication;
use App\Repositories\PublicationInterface;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class ScienceController extends Controller
{
    //
    protected $publications;

    public function __construct(PublicationInterface $publications)
    {
        $this->publications = $publications;
    }

    public function index(){
        $page = Page::where('id', 8)->get();
        $olimpiads = Olimpiad::all();
        $data = ['publications' => $this->publications->getStudentPublication(), 'olimpiads' => $olimpiads, 'seo' => $page[0]];
        return view('science', $data);
    }
    public function ajaxRequestPost(Request $request)
    {
        $publication = Publication::where('check_student', 1)->paginate(3);
        if ($request->ajax()) {
            $view = view('science',compact('publication'))->render();
            return response()->json(['html'=>$view]);
        }
    }
}
