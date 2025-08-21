<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     
    public function index(){
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            $contact->nome = decrypt($contact->nome);
            $contact->email = decrypt($contact->email);
            $contact->telefone = decrypt($contact->telefone);
            $contact->data_nascimento = $contact->data_nascimento;
        };
       return view('contact', compact('contacts'));

    }
    public function storeDataEncrypt(){
        $contact = new contact();

        $contact->nome = encrypt('guilherme');
        $contact->email = encrypt('guilherme@exemplo.com');
        $contact->telefone = encrypt('1234567890');
        $contact->data_nascimento = '2015-06-08';
        $contact->save();

    }
}
