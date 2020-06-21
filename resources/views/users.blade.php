
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

        <th>Full Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
        <th>Delete</th>

    </tr>
  </thead>

  <tbody>
    @forelse($users as $user)
    <tr>
        <td><label>{{ ucfirst($user->firstname) }} {{ ucfirst($user->lastname) }}</label></td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td>
            <form method="POST" action="{{ url('/users') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <select name="role" class="form-control">
                    <option value="Employee">Employee</option>
                    <option value="Manager">Manager</option>
                    <option value="Developer">Employee</option>
                    <option value="Company">Company</option>
                </select>
                <button type="submit" class="btn btn-info btn-xs">Assign Role</button>
            </form>
        </td>
        <td>
            <form action="{{ url('/deleteuser') }}/{{$user->id}}" method="POST">
              {{ csrf_field() }}
              {{ Method_field('DELETE') }}

               <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"> Delete</i></button>
            </form>
        </td>
    </tr>
    @empty
    @endforelse
</tbody>

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
{{ auth()->user()->role=="Employee"}}
<h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Sorry Employees Cannot Access This page </b></strong> </h1>
@endif

<script >





  var preloader=document.getElementById('wrapper');
  function myFunction(){
  preloader.style.display = 'none';}


  </script>


