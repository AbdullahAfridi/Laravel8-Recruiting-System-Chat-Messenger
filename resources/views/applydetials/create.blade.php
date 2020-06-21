@extends('master')


@section('content')


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

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background:#2F4F4F"> <span style="font-size:30px;color:white;font-style: italic">Enter Your Information </span></div>

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

                                                    <form class="col-sm-12" method="POST" action="{{ url('applydetials') }}"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="col-sm-4 form-group">
                                                        <label style="margin-left: 35px;font-size:15px">Full Name</label>
                                                      <input  class="form-control" type="text" name="FullName" >

                                                  </div>

                                                  <div class="col-sm-4 form-group">
                                                    <label style="margin-left: 35px;font-size:15px">Job_Title</label>
                                                  <input  class="form-control" type="text" name="Jobtitle">
                                              </div>


                                              <div class="col-sm-4 form-group">
                                                <label style="margin-left: 35px;font-size:15px">Experience </label>
                                              <input  class="form-control" type="text" name="Experience">
                                          </div>

                                                    <div class="col-sm-4 form-group">
                                                          <label style="margin-left: 25px;font-size:15px">Primary-Skills</label>
                                                        <input  class="form-control" type="text" name="PrimeSkills">
                                                    </div>

                                                    <div class="col-sm-4 form-group">
                                                          <label style="margin-left: 18px;font-size:15px">Work_Authorization</label>
                                                        <input  class="form-control" type="text" name="WorkAutho">
                                                    </div>
                                                    <div class="col-sm-4 form-group">
                                                        <label style="margin-left: 33px;font-size:15px">Contact_Address</label>
                                                      <input  class="form-control" type="text" name="Contact">
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
