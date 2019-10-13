<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StateInterface;
use TCG\Voyager\Models\Page;

class StateController extends Controller
{
    protected $states;

    public function __construct(StateInterface $states)
    {
        $this->states = $states;
    }

    public function index()
    {
        $seo = Page::where('slug', 'shtat')->get();

        $data = ['states' => $this->states->all(), 'seo' => $seo[0]];
        return view('state', $data);
    }
}
