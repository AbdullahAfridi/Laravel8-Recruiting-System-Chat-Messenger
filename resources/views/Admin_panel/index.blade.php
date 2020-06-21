
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


                    <div class="jumbotron text-center" style="background-color:#efeee8">
                            <h1>Welcome!</h1>
                            <span  style="color:rgb(51, 51, 51);font-size:40px"> <strong><b> {{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->lastname) }}</b> </strong></span>
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
