<?php

namespace App\Http\Controllers;

use App\Applydetials;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applydetials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [

            'FullName' => 'required',
            'Jobtitle' => 'required',
            'Experience' => 'required',
            'PrimeSkills' => 'required',
            'WorkAutho' => 'required',
            'Contact' => 'required'


        ]);
        $applydetials = new Applydetials([
            'FullName' => $request-> get('FullName'),
         'Jobtitle' => $request-> get('Jobtitle'),
         'Experience'=> $request-> get('Experience'),
         'PrimeSkills'=> $request->get('PrimeSkills'),
         'WorkAutho'=> $request->get('WorkAutho'),
         'Contact'=> $request->get('Contact')

        ]);
        $applydetials-> save();
        return redirect()-> route('applydetials.create')->with('success', ' Your Record Has Been Saved! ');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
