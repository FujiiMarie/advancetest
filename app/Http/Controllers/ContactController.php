<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', ['txt' => 'お問い合わせ']);
    }

    // public function confirm(ContactRequest $request)
    // {
    //     $inputs = $request->all();
    //     return view('contact.confirm', ['inputs' =>$inputs]);
    // }
    
    public function send(ContactRequest $request)
    {
        return view('contact.send', ['txt' => 'ご意見いただきありがとうございました']);
    }

    public function find(Request $request)
    {
        $items = Contact::Paginate(4);
        return view('find.index', ['items' => $items]);
    }

}