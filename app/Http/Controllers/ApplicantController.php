<?php

namespace App\Http\Controllers;

use App\Repositories\ApplicantInterface;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class ApplicantController extends Controller
{
    protected $applicants;

    public function __construct(ApplicantInterface $applicants)
    {
        $this->applicants = $applicants;
    }
    public function index()
    {
        $seo = Page::where('slug', 'dopomoga-abituriyentu')->get();
        $data = ['applicants' => $this->applicants->all(), 'seo' => $seo[0]];
        return view('applicants', $data);
    }
}
