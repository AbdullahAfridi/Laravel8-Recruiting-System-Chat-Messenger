<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use Auth;
use DB;
use Carbon\Carbon;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function myleave()
    {
        $userid = Auth::user()->id;
        $myleave = Leave::where('deleted_at', NULL)->where('userid', $userid)->get();
        return view('myleave', compact('myleave'));
    }

    public function allleave()
    {
        $users = User::where('deleted_at', NULL)->get();
        $allleave = Leave::where('deleted_at', NULL)->paginate(10);
        return view('allleave', compact('allleave', 'users'));
    }


    public function pending()
    {
        $pending = "Not Approved";
        $users = User::where('deleted_at', NULL)->get();
        $allleave = Leave::where('deleted_at', NULL)->where('status', NULL)->paginate(10);
        return view('allleave', compact('allleave', 'users', 'pending'));
    }


    public function approvedleave()
    {
        $approvedleave = "Approved";
        $users = User::where('deleted_at', NULL)->get();
        $allleave = Leave::where('deleted_at', NULL)->where('status', $approvedleave)->paginate(10);
        return view('allleave', compact('allleave', 'users', 'approvedleave'));
    }


    public function rejectedleave()
    {
        $rejectedleave = "Rejected";
        $users = User::where('deleted_at', NULL)->get();
        $allleave = Leave::where('deleted_at', NULL)->where('status', $rejectedleave)->paginate(10);
        return view('allleave', compact('allleave', 'users', 'rejectedleave'));
    }

    public function applyleave()
    {
        $status = request('status');
        $error = request('error');
        return view('createleave', compact('status', 'error'));
    }


    public function storeleave(Request  $request)
    {
        $start_leave = $request->leave_start;
        $end_leave = $request->leave_end;
        $leave_typee = $request->type_of_leave;
        $today = Carbon::Today();


        if (($start_leave <= $today) || ($end_leave <= $today)) {
            $error = "P error message. This shows th";
            return redirect()->route('applyleave', array('error' => $error));
        }
        else
        {
            Leave::create($request->all());
            $status = "Your request has been noted and will soon be attended by the admin";
            return redirect()->route('applyleave', array('status' => $status));
        }
    }

    public function assignrole(Request  $request)
    {
        $id = $request->id;
        $role = $request->role;
        $user = User::findOrFail($id);
        $user->role = $role;
        $user->update();
       return redirect()->route('users');

    }


    public function users()
    {
        $users = User::where('deleted_at', NULL)->paginate(10);
        return view('users', compact('users'));
    }

     public function destroy($id)
    {
        User::destroy($id);
        return back();
    }

    public function approve()
    {
        $id= request('id');
        $leave = Leave::findOrFail($id);
        $leave->status = "Approved";
        $leave->update();
        return back();
    }

    public function reject()
    {
        $id= request('id');
        $leave = Leave::findOrFail($id);
        $leave->status = "Rejected";
        $leave->update();
        return back();
    }
}
