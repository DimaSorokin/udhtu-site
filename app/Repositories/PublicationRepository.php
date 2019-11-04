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
        return Publication::where('check_student', 'students')->paginate(3);
    }
    public function getMonograph()
    {
        return Publication::where('check_student', 'monograph')->paginate(3);
    }
}
