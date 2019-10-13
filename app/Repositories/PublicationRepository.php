<?php
namespace App\Repositories;

use App\Publication;

class PublicationRepository implements PublicationInterface {

    public function getMainPublication()
    {
        return Publication::paginate(10);
    }
    public function getStudentPublication()
    {
        return Publication::where('check_student', 1)->paginate(3);
    }
}
