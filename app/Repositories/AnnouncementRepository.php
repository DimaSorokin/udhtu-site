<?php
namespace App\Repositories;

use App\Announcement;

class AnnouncementRepository implements AnnouncementInterface {

    public function all()
    {
        return Announcement::orderBy('id', 'desc')->get();
    }
}
