<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="robots" content="index, follow"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <title>Admin_Panel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- jQuery library -->
<script src=" {{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src=" {{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>



  <link href=" {{ asset('https://fonts.googleapis.com/css?family=Roboto') }}" rel="stylesheet">


  <link   href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">





      </head>









      <body class="site">




        <header role="header" class="site__header header" id="home">
            <div class="header__wrapper">

              <div class="header__brand">
                <img src="{{ asset('css/brand.png') }}" />
                <div style="font-size:35px;color:white ">
                 <b> Goergia_Ink</b>
                </div>
              </div>
              <p style="font-size:25px;margin-left:200px;"> <b> {{Carbon\Carbon::now()}} </b></p>
              <h1></h1>
              <div class="header__account account account--has-login" >
                  <div class="account__wrapper" >
                    <img class="account__img" src="{{ asset('css/Abdul.jpg') }}" />
                    <span class="account__name" style="color:white;font-size:15px"><b> {{ ucfirst(Auth::user()->username) }}</b></span>
                  </div>
                  <i class="account__arrow fa fa-angle-down js--show-dropdown-menu"></i>

                  <div class="account__menu">
                    <ul class="account__menu-wrapper">
                      <li class="account__menu-item"><a href="#profil">Profile</a></li>
                      <li class="account__menu-item">
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                      </li>
                  </div>

              </div>

              <div class="header__nav--mobile">
                <div class="header__nav-btn" id="menu-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

            </div>
        </header>


        <main role="main" class="site__main main"  >

          <nav class="main__nav nav"  >

            <ul class="nav__wrapper" >

                    <li class="nav__item">
                <a href="http://127.0.0.1:8000/dash">
                    <i class="fa fa-bank" style="font-size:18px;color:white"></i> Dashboard </a>

              </li>

              <li class="nav__item nav__item--has-child">
                <a href="#">
                  <i class="fas fa-user-shield" style="font-size:18px;color:white"></i> Manager Management
                  <i class="nav__arrow fa fa-angle-down "> </i>
                </a>

                <ul class="nav__wrapper nav__wrapper--child">
                  <li class="nav__item--child"><a href="http://127.0.0.1:8000/shm">  Manage Mangers</a></li>

                </ul>
              </li>



             <li class="nav__item nav__item--has-child">
                <a href="#">
                  <i class="fas fa-allergies" style="font-size:18px;color:white"></i> Leave Management
                  <i class="nav__arrow fa fa-angle-down"></i>
                </a>

                <ul class="nav__wrapper nav__wrapper--child">
                  <li class="nav__item--child"><a href="http://127.0.0.1:8000/allleave"> Manage Leaves</a></li>

                </ul>
                <ul class="nav__wrapper nav__wrapper--child">
                    <li class="nav__item--child"><a href="http://127.0.0.1:8000/approvedleave"> Approved Leaves</a></li>

                  </ul>
                  <ul class="nav__wrapper nav__wrapper--child">
                    <li class="nav__item--child"><a href="http://127.0.0.1:8000/rejectedleave"> Rejected Leaves</a></li>

                  </ul>
                  <ul class="nav__wrapper nav__wrapper--child">
                    <li class="nav__item--child"><a href="http://127.0.0.1:8000/pending"> Pending Leaves</a></li>

                  </ul>
                  <li class="nav__item"><a href="http://127.0.0.1:8000/allleave">
                    <i class="nav__icon fa fa-edit" style="font-size:18px;color:white" ></i> Leave Confirmations</a>
                  </li>
                  <li class="nav__item nav__item--has-child">
                        <a href="#">
                          <i class="fas fa-user-shield" style="font-size:18px;color:white"></i> Salary Management
                          <i class="nav__arrow fa fa-angle-down "> </i>
                        </a>

                        <ul class="nav__wrapper nav__wrapper--child">
                          <li class="nav__item--child"><a href="http://127.0.0.1:8000/salary?">  Manage Salary</a></li>

                        </ul>
                        <ul class="nav__wrapper nav__wrapper--child">
                            <li class="nav__item--child"><a href="http://127.0.0.1:8000/salary/create"> Add Salary</a></li>

                          </ul>
                      </li>
                      <li class="nav__item"><a href="http://127.0.0.1:8000/job/create">

<i class='fab fa-dropbox' style='font-size:20px'></i> Requirement Posting </a>
</li>

                      <li class="nav__item"><a href="http://127.0.0.1:8000/job">

<i class='fab fa-buromobelexperte' style='font-size:20px'></i> Assigned Requirements </a>
</li>

                      
                <li class="nav__item nav__item--has-child">
                        <a href="#">
                          <i class="far fa-handshake" style="font-size:18px;color:white"></i> Task Management
                          <i class="nav__arrow fa fa-angle-down"></i>
                        </a>

                        <ul class="nav__wrapper nav__wrapper--child">
                          <li class="nav__item--child"><a href="http://127.0.0.1:8000/requirment">Manage Tasks</a></li>

                        </ul>
                        <ul class="nav__wrapper nav__wrapper--child">
                                <li class="nav__item--child"><a href="http://127.0.0.1:8000/requirment/create">Add Requirements</a></li>

                              </ul>



              </li>
              <li class="nav__item"><a href="http://127.0.0.1:8000/live_search">

<i class='fas fa-keyboard' style='font-size:18px'></i> Assigned Tasks </a>
</li>
              <li class="nav__item"><a href="">

                <i class="far fa-bell" style="font-size:18px;color:white"></i> Login Requests </a>
              </li>
              <li class="nav__item"><a href="http://127.0.0.1:8000/contact/">

                <i class="fas fa-book-dead" style="font-size:18px;color:white"></i>  Complaint </a>
              </li>
              <li class="nav__item"><a href="http://127.0.0.1:8000/chats">
                <i class='far fa-envelope'  style="font-size:18px;color:white"></i>  Messanger</a>
              </li>

              <li class="nav__item nav__item--has-child">
                <a href="#">
                  <i class="fa fa-heartbeat"  style="font-size:18px;color:white"></i> Apply For Leaves
                  <i class="nav__arrow fa fa-angle-down "> </i>
                </a>

                <ul class="nav__wrapper nav__wrapper--child">
                  <li class="nav__item--child"><a href="http://127.0.0.1:8000/applyleave">make Leaves</a></li>

                </ul>
                <ul class="nav__wrapper nav__wrapper--child">
                    <li class="nav__item--child"><a href="http://127.0.0.1:8000/myleave">Leave Status</a></li>

                  </ul>
              </li>


              <li class="nav__item"><a href="http://127.0.0.1:8000/contact/create">
                <i class="nav__icon fa fa-edit" style="font-size:18px;color:white" ></i> Submission</a>
              </li>








            </ul>






        <script src="https://mazipan.github.io/library/jquery.min.js"></script>

        <script src=" {{ asset('js/lightweight-admin-template.js') }}"></script>



      <div class="container">
      @yield('content')
      </div>

      </body>
      </html>
