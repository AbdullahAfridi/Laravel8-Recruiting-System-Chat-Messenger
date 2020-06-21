<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirment;

class RequirmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirments=Requirment::all()->toArray();
            return view('requirment.index',compact('requirments'));
    }

    public function check()
    {
        $requirments=Requirment::all()->toArray();
            return view('requirment.check',compact('requirments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requirment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'Jobtitle' =>'required',
        'Location' =>'required',
        'Jobdesc' =>'required',
        'Companyrate' =>'required',
        'Canrate' =>'required',
        'Recname' =>'required'

       ]);

       $requirment =new Requirment([

        'Jobtitle' =>$request->get('Jobtitle'),
        'Location' =>$request->get('Location'),
        'Jobdesc' =>$request->get('Jobdesc'),
        'Companyrate' =>$request->get('Companyrate'),
        'Canrate' =>$request->get('Canrate'),
        'Recname' =>$request->get('Recname')

       ]);
       $requirment->save();
       return redirect()-> route('requirment.create')->with('success',' Your Data Has Been Added Successfully. ');


    }

    public function UpdateRequirmentascompleted($id){

        $requirment=Requirment::find($id);
        $requirment->Status=1;
        $requirment->save();
        return redirect()->back();
    }

    public function UpdateRequirmentasnotcompleted($id){

        $requirment=Requirment::find($id);
        $requirment->Status=0;
        $requirment->save();
        return redirect()->back();
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

        $requirment =Requirment::find($id);
        return view('requirment.edit',compact('requirment','id'));

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
            'Jobtitle' =>'required',
            'Location' =>'required',
            'Jobdesc' =>'required',
            'Companyrate' =>'required',
            'Canrate' =>'required',
            'Recname' =>'required'

           ]);

           $requirment =Requirment::find($id);
           $requirment->Jobtitle=$request->get('Jobtitle');
           $requirment->Location=$request->get('Location');
           $requirment->Jobdesc=$request->get('Jobdesc');
           $requirment->Companyrate=$request->get('Companyrate');
           $requirment->Canrate=$request->get('Canrate');
           $requirment->Recname=$request->get('Recname');

           $requirment->save();

           return redirect()->route('requirment.index')->with('Data Updated','Success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requirment =  Requirment :: find($id);
        $requirment->delete();

        return redirect()->route('requirment.index')-> with('success', 'Record Deleted Successfully!');
    }
}
