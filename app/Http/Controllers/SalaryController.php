<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = Salary::all()-> toArray();

        return view('salary.index',compact('salary'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salary.create');
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

            'Name' => 'required',
            'Year' => 'required',
            'Month' => 'required',
            'Leave' => 'required',
            'Salary' => 'required'


        ]);
        $salary = new Salary([
            'Name' => $request-> get('Name'),
         'Year' => $request-> get('Year'),
         'Month'=> $request-> get('Month'),
         'Leave'=> $request->get('Leave'),
         'Salary'=> $request->get('Salary'),
         'Total'=> $request->get('Total')

        ]);
        $salary-> save();
        return redirect()-> route('salary.create')->with('success', ' Data Has Been Saved! ');
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
        $salary = Salary :: find($id);
        $salary->delete();

        return redirect()->route('salary.index')-> with('success', 'Record Deleted Successfully!');
    }
}
