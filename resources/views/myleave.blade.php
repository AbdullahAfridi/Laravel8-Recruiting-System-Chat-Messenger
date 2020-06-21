
    @extends('master')


    @section('content')
<!DOCTYPE html>

<html>


<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link   href="{{ asset('css/load.css') }}" rel="stylesheet">
</head>


<body onload="myFunction()">

    <div id="wrapper">
        <div class='circle'>
            <div class="circle-cutter"></div>
            <div class="circle-inner"></div>
        </div>
    </div>

  <footer>

        <p style="color: #333"><b>  Goergai_INK</b> </p>
    </footer>
    @if (  auth()->user()->role=="Employee")
 <article class="main__content content" style="background-color:#ffffff;">


          <div class="content__wrapper">
            <div class="content__wrapper">
              <div class="content__wrapper">
                <div class="content__wrapper">
                  <div class="content__wrapper">
            <div class="content__wrapper">
              <div class="content__wrapper">
                <div class="content__wrapper">
                  <div class="content__wrapper">
            <div class="content__wrapper">
              <div class="content__wrapper">
                <div class="content__wrapper">


                  <div class="content__wrapper">

            <div class="content__wrapper">


                <div class="btn-group" style="margin-left:1075px">
                    <a class="btn btn-primary" href="{{ url('applyleave') }}"> <i class="fa fa-plus"></i> Make leaves
                    </a>
                </div>

                    @if(\Session::has('success'))

                    <p  style="color:green ;font-size:20px; margin-left:900px">  <b>{{ \Session::get('success')}}</b></p>



                    @endif
                  <hr>
                <div class="content__wrapper">


            <table class="table table-hover table-dark">
  <thead>
    <tr>

        <th>Type of leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Duration</th>
        <th> Status</th>


    </tr>
  </thead>

  <tbody>
    @forelse($myleave as $leave)
    <tr>
        <td>
            <label>{{ $leave->type_of_leave }}</label>
        </td>
        <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($leave->leave_start))->toFormattedDateString() }}</td>
        <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($leave->leave_end))->toFormattedDateString() }}</td>
        <td>
            {{  \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $leave->leave_end)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $leave->leave_start)) }}
        </td>
        <td>
            @if( $leave->status==NULL)
                <span class="btn btn-warning" style="background-color:orange">Yet to be approved</span>
            @elseif($leave->status=="Approved")
            <span class="btn btn-success" >Approved</span>
            @else
            <span class="btn btn-danger" >Rejected</span>

            @endif
        </td>
    </tr>
    @empty
    @endforelse
</tbody>

          </table>


      </div>



            </div>
          </div>
        </div>

      </div>

  </div>
    </div>
   </div>
  </div>
</div>


</article>
@else
{{ auth()->user()->role=="Manager"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only  Employees Can Access This page </b></strong> </h1>
@endif

<script >

  var preloader=document.getElementById('wrapper');
  function myFunction(){
  preloader.style.display = 'none';}


  </script>


