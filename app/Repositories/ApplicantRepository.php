<?php
namespace App\Repositories;

use App\Applicant;

class ApplicantRepository implements ApplicantInterface {

    public function all()
    {
        return Applicant::all();
    }
}
