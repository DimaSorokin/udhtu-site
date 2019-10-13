<?php
namespace App\Repositories;

use App\State;

class StateRepository implements StateInterface {

    public function all()
    {
        return State::all();
    }
}
