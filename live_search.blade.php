@extends('master')
@section('content')

<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <br />
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
   <br><br><br><h1 align="center">Daily Requirments</h1><br />
   <div class="panel panel-default">
    <div class="panel-heading">Search Requirments</div><br>
    <div class="panel-body">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>

     <div class="table-responsive">


      <h3 align="center">Total Requirments : <span id="total_records"></span></h3><br>

      <table class="table table-striped table-bordered" >

       <thead >
        <tr class="right">
         <th>JobTitle</th>
         <th>Location</th>
         <th>Client</th>
         <th>Recuriter Name</th>
         <th>Offered Rate</th>
         <th>Pay Rate</th>
         <th>Status</th>

        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  @else
{{ auth()->user()->role=="Manager"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only  Employee Can Access This page </b></strong> </h1>
@endif
 </body>
</html>

<script>
 var preloader=document.getElementById('wrapper');
    function myFunction(){
    preloader.style.display = 'none';}
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


