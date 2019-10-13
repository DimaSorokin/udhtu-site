<?php
namespace App\Repositories;

use App\Photo;

class PhotoRepository implements PhotoInterface {

    public function all()
    {
        return Photo::orderBy('id', 'desc')->get();
    }
}
