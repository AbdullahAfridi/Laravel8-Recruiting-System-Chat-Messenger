<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('requirments')
         ->where('Jobtitle', 'like', '%'.$query.'%')
         ->orWhere('Location', 'like', '%'.$query.'%')
         ->orWhere('Recname', 'like', '%'.$query.'%')

         ->orderBy('id', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('requirments')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
           $staus = $row->Status;
            if($staus=='0'){
                $stausValue = "<strong style='color:red;'>"."Closed"."<strong>";
            }
            if($staus=='1'){
                $stausValue = "<strong style='color:blue;'>"."Open"."<strong>";
            }

        $output .= '
        <tr>
         <td>'.$row->Jobtitle.'</td>
         <td>'.$row->Location.'</td>
         <td>'.$row->Jobdesc.'</td>
         <td>'.$row->Recname.'</td>
         <td>'.$row->Companyrate.'</td>
         <td>'.$row->Canrate.'</td>
         <td>'.$stausValue.'</td>




        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

