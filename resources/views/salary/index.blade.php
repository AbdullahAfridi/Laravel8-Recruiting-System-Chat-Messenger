
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

      <th scope="col">Full Name</th>
      <th scope="col">Year</th>
      <th scope="col">Month</th>

      <th scope="col">Monthly Salary</th>
      <th scope="col">Total Salary</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>

  <tbody>

    <tr>




        @foreach ($salary as $row )

    <td>{{$row['Name']}}</td>
        <td>{{$row['Year']}}</td>
        <td>{{$row['Month']}}</td>


        <td>

            {{$row['Salary']}}


        </td>
        <td>

            {{$row['Total']}}


        </td>


        <td>
          <form method="post" class="delete_form" action="{{action('SalaryController@destroy',$row['id'])}}">
            {{csrf_field()}}
            <div class="btn-group">
                <a href=""  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                  <i class="glyphicon glyphicon-pencil" style="font-size:13px"></i>
               </a>

           <input type="hidden" name="_method" value="DELETE" />
           <button type="submit" class="btn btn-danger btn-xs"> Delete

           </button>


          </form>

           </td>



         </tr>


       </tbody>

       @endforeach



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

   </body>
  </html>
