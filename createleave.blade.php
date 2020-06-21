
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

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background:#2050b3"> <span style="font-size:30px;color:white"> Make Leaves </span></div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-bd lobidrag">
                                                <div class="panel-heading">
                                                    <div class="btn-group">

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    @if(isset($status))
                                                      <div class="alert alert-success alert-dismissable" style="margin:20px">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                                                          {{ $status}}
                                                      </div>
                                                    @endif

                                                    @if(isset($error))
                                                      <div class="alert alert-danger alert-dismissable" style="margin:20px">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4>  <i class="icon fa fa-times"></i> please Enter Valid Date</h4>
                                                          {{ $error}}
                                                      </div>
                                                    @endif

                                                    <form class="col-sm-12" method="POST" action="{{ url('applyleave') }}"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                                    <div class="col-sm-4 form-group">
                                                          <label>Type of Leave</label>
                                                          <select class="form-control" name="type_of_leave" id="exampleSelect">
                                                                <option disabled="">Select Leave</option>
                                                                <option value="Sick Leave">Sick Leave</option>
                                                                <option value="Maternity Leave">Maternity Leave</option>
                                                                <option value="Normal Leave">Normal Leave</option>
                                                                <option value="Others">Others</option>
                                                          </select>
                                                    </div>

                                                    <div class="col-sm-4 form-group">
                                                          <label>Leave Start</label>
                                                        <input  class="form-control" type="date" name="leave_start">
                                                    </div>

                                                    <div class="col-sm-4 form-group">
                                                          <label>Leave End</label>
                                                        <input  class="form-control" type="date" name="leave_end">
                                                    </div>


                                                        <div class="col-sm-12 reset-button">
                                                          <button class="btn btn-primary" type="reset">Reset</button>
                                                          <button class="btn btn-success" type="submit">Save</button>
                                                       </div>
                                                   </form>
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
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only Employees Can Access This page </b></strong> </h1>
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
