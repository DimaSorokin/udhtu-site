<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Repositories\StudyInterface;
use App\Schedule;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class StudyController extends Controller
{
    protected $studies;

    public function __construct(StudyInterface $studies)
    {
        $this->studies = $studies;
    }

    public function index()
    {
        $seo = Page::where('slug', 'uchbovi-materiali')->get();
        $studies = $this->studies->all();
        $schedules = Schedule::all();
        $data = [];
        foreach ($studies as $key=>$study){
            if($study->type == 'Бакалавр'){
                $data[0][] = $study;
            }else{
                $data[1][] = $study;
            }
        }
        return view('study', ['studies' => $data, 'schedules' => $schedules, 'seo' => $seo[0]]);
    }
}
