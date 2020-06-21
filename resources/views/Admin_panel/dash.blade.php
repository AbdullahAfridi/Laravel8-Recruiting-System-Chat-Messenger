    @extends('master')

    @section('content')


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

  
    @if (  auth()->user()->role=="Manager")
<article class="main__content content" style="background-color: #ffffff;">
      <div class="content__wrapper">
      <br/>
      <br/>
      <br/>
          <div class="grid__row">

            <div class="grid__col-4 card__wrapper">
              <div class="card card--orange">
                <div class="card__header">
                  <div class="card__title">All Registered Staff</div>
                  <div class="card__tools">
                    <i class="fas fa-user-friends" style="font-size:22px;color:whites"></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                            {{ $contact = DB::table('users')->count()}}

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid__col-4 card__wrapper">
              <div class="card card--green">
                <div class="card__header">
                  <div class="card__title"> Leave Requests</div>
                  <div class="card__tools">
                    <i class="fas fa-tty" style="font-size:22px;color:whites" ></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                        {{ $contact = DB::table('leaves')->count()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid__col-4 card__wrapper">
              <div class="card card--red">
                <div class="card__header">
                  <div class="card__title">Complaints</div>
                  <div class="card__tools">
                    <i class="fas fa-braille"  style="font-size:22px;color:whites"></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                      {{ $contact = DB::table('contacts')->count()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid__col-4 card__wrapper">
                <div class="card card--red">
                  <div class="card__header">
                    <div class="card__title">CVs</div>
                    <div class="card__tools">
                      <i class="fas fa-braille"  style="font-size:22px;color:whites"></i>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="card__align">
                      <div class="card__big-text">
                     10
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="grid__col-4 card__wrapper">
                <div class="card card--green">
                  <div class="card__header">
                    <div class="card__title">Task Alocation</div>
                    <div class="card__tools">
                      <i class="fas fa-tty" style="font-size:22px;color:whites" ></i>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="card__align">
                      <div class="card__big-text">
                            {{ $contact = DB::table('requirments')->count()}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="grid__col-4 card__wrapper">
                <div class="card card--green">
                  <div class="card__header">
                    <div class="card__title">Company Requirments</div>
                    <div class="card__tools">
                      <i class="fas fa-tty" style="font-size:22px;color:whites" ></i>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="card__align">
                      <div class="card__big-text">
                            {{ $contact = DB::table('jobs')->count()}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="grid__col-4 card__wrapper">
                <div class="card card--orange">
                  <div class="card__header">
                    <div class="card__title"> JOB Requests</div>
                    <div class="card__tools">
                      <i class="fas fa-user-friends" style="font-size:22px;color:whites"></i>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="card__align">
                      <div class="card__big-text">
                      {{ $contact = DB::table('applydetials')->count()}}
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

        var preloader=document.getElementById('wrapper');
        function myFunction(){
        preloader.style.display = 'none';}
        


        </script>

