<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function tag(){
        return $this->belongsTo(Tag::class, 'cat_id', 'id');
    }
}
