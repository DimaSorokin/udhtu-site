<?php

namespace App\Http\Controllers;

use App\Repositories\ContactInterface;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $seo = Page::where('slug', 'kontakti-kafedri')->get();
        $data = ['contact' => $this->contact->all(), 'seo' => $seo[0]];
        return view('contact', $data);
    }
}
