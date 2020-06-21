
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

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" style="background:#2F4F4F"> <span style="font-size:30px;color:white;font-style: italic"> Store Employee Salary </span></div>

                                                <div class="panel-body" style="background:	#FFF0F5" >
                                                    <div class="row">
                                                        <div class="col-sm-12" style="background:	#FFF0F5">
                                                            <div class="panel panel-bd lobidrag" style="background:	#FFF0F5">
                                                                <div class="panel-heading" style="background:	#FFF0F5">
                                                                    <div class="btn-group" style="background:	#FFF0F5">

                                                                        </a>
                                                               </div>
                                                                </div>
                    <div class="panel-body">
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
                        <p style="font-size:20px">  {{ \Session::get('success')}}</p>

                        </div>

                        @endif

                        <form class="col-sm-12" method="POST" action="{{ url('salary') }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-sm-4 form-group">
                            <label>Employee Name</label>
                          <input  class="form-control" type="text" name="Name">
                      </div>

                      <div class="col-sm-4 form-group">
                        <label>Year</label>
                        <select class="form-control" name="Year" id="exampleSelect">
                              <option disabled="">Select Year</option>
                              <option value="2017">2017</option>
                              <option value="2018">2018 </option>
                              <option value="2018">2019</option>
                              <option value="2020">2020</option>
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024t">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>

                        </select>
                  </div>


                        <div class="col-sm-4 form-group">
                              <label>Month</label>
                              <select class="form-control" name="Month" id="exampleSelect">
                                    <option disabled="">Select Month</option>
                                    <option value="January">January</option>
                                    <option value="Febraury">Febraury </option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>

                              </select>
                        </div>

                        <div class="col-sm-4 form-group">
                              <label>Leaves</label>
                            <input  class="form-control" type="number" name="Leave" id="lv" >
                        </div>

                        <div class="col-sm-4 form-group">
                              <label>Salary Amount</label>
                            <input  class="form-control" type="number" name="Salary" id="sal" >
                        </div>
                        <div class="col-sm-4 form-group">
                            <label> Total Salary To Pay </label>
                          <input  class="form-control" type="text" name ="Total" id="tl">
                      </div>


                            <div class="col-sm-12 reset-button">
                              <button class="btn btn-primary" type="reset">Reset</button>
                              <button onclick="salarycal()" class="btn btn-success" type="submit">Save</button>

                           </div>
                       </form>



</article>
@else
{{ auth()->user()->role=="Employee"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only  Manager Can Access This page </b></strong> </h1>
@endif

<script >





    var preloader=document.getElementById('wrapper');
    function myFunction(){
    preloader.style.display = 'none';}
    function salarycal(){

        var field1=document.getElementById('lv').value;
        var field2=document.getElementById('sal').value;

            if( field1>1 && field1<3 ){

                var result=parseFloat(field2)-1500;
                document.getElementById("tl").value=result;
            }
            else if (field1 >=3 && field1<=6){
                var result=parseFloat(field2)-2500;
                document.getElementById("tl").value=result;

            }
            else if (field1 >=7 && field1<=10){
                var result=parseFloat(field2)-3500;
                document.getElementById("tl").value=result;

            }
            else if (field1 >=11 && field1<=20){
                var result=parseFloat(field2)-6000;
                document.getElementById("tl").value=result;

            }
            else{
                var result=parseFloat(field2);
                document.getElementById("tl").value=result;

            }
      }
  </script>


