<?php
namespace App\Repositories;

use App\Contact;

class ContactRepository implements ContactInterface {

    public function all()
    {
        return Contact::all();
    }
}
