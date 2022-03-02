<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function list() {

        $list = DB::select('SELECT * FROM contacts;');

        return view('contacts.list', [
            'list' => $list
        ]);    
    }

    public function detail($id) {

        $data = DB::select('SELECT * FROM contacts WHERE id =:id',[
            'id' => $id
        ]);

        return view('contacts.detail',[
            'data' => $data[0]
        ]);   
    }

    public function add() {
        return view('contacts.add');
    }

    public function addAction(Request $request) {
        
        $request->validate([
            'name' => ['required', 'string', 'min: 5'],
            'contact' => ['required', 'string', 'min: 9'],
            'email' => ['required', 'string','email']
        ]);

        $name = $request->input('name');
        $contact = $request->input('contact');
        $email = $request->input('email');

        $validated = DB::select('SELECT * FROM contacts WHERE contact =:contact OR email =:email',[
            'contact' => $contact,
            'email' => $email
        ]);

        if(count($validated) <=0) {

        DB::insert('INSERT INTO contacts (name, contact, email) VALUES (:name, :contact, :email)', [
            'name' => $name,
            'contact' => $contact,
            'email' => $email
        ]);
        return redirect()->route('list'); 
        } else {
        return redirect()->route('add');
        }
    }

    public function edit($id) {

        $data = DB::select('SELECT * FROM contacts WHERE id =:id',[
            'id' => $id
        ]);

        if(count($data) >0) {
            return view('contacts.edit',[
                'data' => $data[0]
            ]);
        } else {
            return redirect()->route('list'); 
        }        
        return view('contacts.edit');
    }
    
    public function editAction(Request $request,$id) {

        $edit = DB::select('SELECT * FROM contacts WHERE id =:id',[
            'id' => $id
        ]);
    
        $request->validate([
            'name' => ['required', 'string', 'min: 5'],
            'contact' => ['required', 'string', 'min: 9'],
            'email' => ['required', 'string','email']
        ]);

        $name = $request->input('name');
        $contact = $request->input('contact');
        $email = $request->input('email');
        
        DB::update('UPDATE contacts SET name = :name, contact = :contact, email = :email WHERE id = :id',[
            'id' => $id,
            'name' => $name,
            'contact' => $contact,
            'email' => $email
        ]);        
        
        return redirect()->route('list');        
        
    }

    public function del($id) {
        
        DB::delete('DELETE FROM contacts WHERE id = :id',['id'=>$id]);

        return redirect()->route('list');

    }

}

