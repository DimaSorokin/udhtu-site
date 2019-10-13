<?php
namespace App\Repositories;

use App\Lesson;

class StudyRepository implements StudyInterface {

    public function all()
    {
        return Lesson::all();
    }
}
