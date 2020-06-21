
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



                    @if(\Session::has('success'))

                    <p  style="color:green ;font-size:20px; margin-left:900px">  <b>{{ \Session::get('success')}}</b></p>



                    @endif
                  <hr>
                  <div class="content__wrapper">


                    <table class="table table-hover table-dark">
          <thead>
            <tr>

                    <th>Jobtitle</th>
                    <th>Location</th>
                    <th>Job_Description</th>
                    <th>Company_Rate</th>
                    <th>PayRate</th>
                    <th>Recruiter_Name</th>
                    <th>Status</th>
                    <th>Marks</th>
                    <th>Action</th>

            </tr>
          </thead>

          <tbody>
                <tr>
            @foreach($requirments as $row)

                <td>{{ $row['Jobtitle'] }}</td>
                <td>{{ $row['Location'] }}</td>
                <td>{{ $row['Jobdesc'] }}</td>
                <td>{{ $row['Companyrate'] }}</td>
                <td>{{ $row['Canrate'] }}</td>
                <td>{{ $row['Recname'] }}</td>

                <td>
                @if($row['Status'])
                <button class="btn btn-success">Open</button>
                @else
                <button class="btn btn-danger">closed</button>
                @endif
                </td>
            <td>
                @if(!$row['Status'])

                    <a href="/markascompleted/{{ $row['id'] }}" class="btn btn-success">Mark as completed</a>
                @else
                    <a href="/markasnotcompleted/{{ $row['id'] }}" class="btn btn-primary">Mark as Open/Close</a>
                    @endif
                </td>
                <td>
                <form method="post" class="delete_form" action="{{action('RequirmentController@destroy',$row['id'])}}">
                    {{csrf_field()}}
                    <div class="btn-group">
                        <a href="http://127.0.0.1:8000/dash"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                          <i class="glyphicon glyphicon-pencil" style="font-size:20px"></i>
                       </a>

                   <input type="hidden" name="_method" value="DELETE" />
                   <button type="submit" class="btn btn-danger btn-xs" style="font-size:16px"> Delete

                   </button>


                  </form>
                </td>

            </tr>

            @endforeach

        </table>

    </div>
</div>

</article>
@else
{{ auth()->user()->role=="Employee"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only  Manager Can Access This page </b></strong> </h1>
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


