
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

    @if (  auth()->user()->role=="Manager"){


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
                        @if(count($errors) >0 )
                        <div class="alert alert-danger">
                          <ul>

                            @foreach ($errors-> all() as $error )

                          <li> {{$error}}</li>

                            @endforeach
                          </ul>
                        </div>
                        @endif
                        @if(\Session::has('success'))
                        <div class=" alert alert-success">
                        <p style="font-size:25px">  {{ \Session::get('success')}}</p>

                        </div>

                        @endif

                  <div class="content__wrapper">
                        <h1> <strong>  <b> Your Requirements Here... </b></strong></h1>
            <div class="content__wrapper">

                <form method="post" action="{{ url('requirment') }}">
                        {{ csrf_field() }}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4" style="font-size:17px">Job_Title</label>
                        <input type="text" name="Jobtitle" class="form-control" id="inputEmail4" placeholder=" Enter Job_Title...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4" style="font-size:17px">Location</label>
                        <input type="text"   name="Location"class="form-control" id="inputPassword4" placeholder="Enter Job_Location....">
                      </div>
                    </div>
                    <div class="md-form">

                        <label for="form-text" style="font-size:17px">Job_Description</label>
                        <textarea id="form-text" name="Jobdesc" class="form-control md-textarea" rows="3" placeholder=" Enter Job_Description..."></textarea>

                      </div>
                    <div class="form-group">
                      <label for="inputAddress2" style="font-size:17px">Company_Rate</label>
                      <input type="text" class="form-control"  name="Companyrate" id="inputAddress2" placeholder=" Enter Compant_Rate...">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity" style="font-size:17px">Pay_Rate</label>
                        <input type="text" class="form-control"  name="Canrate" id="inputCity" placeholder="Pay_Rate...">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState" style="font-size:17px">Recruiter_Name</label>
                        <input type="text" id="inputState"  name="Recname" class="form-control" placeholder=" Enter Recruiter Name...">

                      </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                 

</article>
}
@else
{{ auth()->user()->role=="Employee"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Sorry Employees Cannot Access This page </b></strong> </h1>
@endif





<script >

var preloader=document.getElementById('wrapper');
  function myFunction(){
  preloader.style.display = 'none';}
      






  </script>


