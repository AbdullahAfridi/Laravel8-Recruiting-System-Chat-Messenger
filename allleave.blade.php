
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
    @if (  auth()->user()->role=="Manager")

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



                  <form class="form-inline md-form mr-auto mb-4">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search" >
                      <button class="btn btn-dark" stype="submit">Search</button>


                    </form>
                    @if(\Session::has('success'))

                    <p  style="color:green ;font-size:20px; margin-left:900px">  <b>{{ \Session::get('success')}}</b></p>



                    @endif
                  <hr>
                <div class="content__wrapper">


            <table class="table table-hover table-dark">
  <thead>
    <tr>

      <th scope="col">Users</th>
      <th scope="col">Type Of Leave </th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Status</th>


    </tr>
  </thead>

  <tbody>


        @forelse($allleave as $leave)
        <tr>
            <td>
                <label>
                    @forelse($users as $user)
                        @if($user->id==$leave->userid)
                            {{ ucfirst($user->lastname) }} {{ ucfirst($user->firstname) }} ({{ $user->username }})
                        @endif
                    @empty
                    @endforelse
                </label>
            </td>
            <td>{{ $leave->type_of_leave }}</td>
            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($leave->leave_start))->toFormattedDateString() }}</td>
            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($leave->leave_end))->toFormattedDateString() }}</td>
            <td>
                {{  \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $leave->leave_end)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $leave->leave_start)) }}
            </td>
            <td>
                @if($leave->status==NULL)
                    <a href="{{ url('/approve') }}/?id={{ $leave->id }}" class="btn btn-success">Accept</a> <a href="{{ url('/reject') }}/?id={{ $leave->id }}" class="btn btn-danger">Reject</a>
                @elseif($leave->status=="Approved")
               <span style=" color:green;font-size:17px"><b>  Accepted</b></span>
                @else
                <span style=" color:red;font-size:17px"> <b> Rejected </b></span>
                @endif
            </td>
        </tr>
        @empty
        @endforelse
    </tbody>

          </table>
        </div>
        <div class="pagination">{{$allleave->links("pagination::bootstrap-4")}}</div>
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
</div>


</article>
@else
{{ auth()->user()->role=="Employee"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Sorry Employees Cannot Access This page </b></strong> </h1>
@endif

<script >




  $(document).ready(function(){

    $('.delete_form').on('submit',function(){
      if(confirm(  "Are You Sure To Delete This Record ? ")){
          return true;
      }
        else{
          return false;
        }
    });


  });
  var preloader=document.getElementById('wrapper');
  function myFunction(){
  preloader.style.display = 'none';}


  </script>

   </body>
  </html>
