<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Database\Eloquent\Model;
use DB;
use Dotenv\Regex\Success;
use App\Quotation;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all()-> toArray();

        return view('contact.index',compact('contact'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this-> validate($request,[

            'Name' => 'required',
            'Email' => 'required',
            'Subject' => 'required',
            'Message' => 'required'


        ]);
        $contact = new Contact([
            'Name' => $request-> get('Name'),
         'Email' => $request-> get('Email'),
         'Subject'=> $request-> get('Subject'),
         'Message'=> $request->get('Message')

        ]);
        $contact-> save();
        return redirect()-> route('contact.create')->with('success','Thank You!. We Will Contact You Shortly ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view( 'contact.edit',compact('contact','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'Name' => 'required',
            'Email' => 'required',
            'Subject' => 'required',
            'Message' => 'required'


        ]);
        $contact = Contact :: find($id);
        $contact->Name = $request>get('Name');
        $contact->Email = $request>get('Email');
        $contact->Subject = $request>get('Subject');
        $contact->Message = $request>get('Message');
        $contact->save();
        return redirect()->route('contact.index')-> with('success', 'Record Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact =  Contact :: find($id);
        $contact->delete();

        return redirect()->route('contact.index')-> with('success', 'Record Deleted Successfully!');
    }
}
