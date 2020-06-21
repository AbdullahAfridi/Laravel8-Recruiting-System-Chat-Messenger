@extends('master')


    @section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Apply leave</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
<div class="container">
                <h1>Daily Requirments</h1>


@foreach ($jobs as $row)
    <form action="{{ url('job') }}" method="POST">
        {{csrf_field()}}

        <div class="col-md-9 col-md-offset-1">
             <br>   <label>JobTitle</label><br>  <br>
            <input type="text" name="jobtitle" class="form-control" value=" {{$row->jobtitle}}" >
        </div>
        <br>
        <br>
        <div class="col-md-9 col-md-offset-1">

                <br>    <label>Location</label><br> <br>

            <input type="text" name="location" class="form-control" value=" {{$row->location}}" >
        </div><br>
        <div class="col-md-9 col-md-offset-1">

                <br>  <label>Job Descrption</label><br>  <br>
                <textarea name="Descrption" cols="30" rows="20"  class="form-control" >{{$row->Descrption}}</textarea>



        </div>

    </form>
</div>
@endforeach
</div>
<br><br>
<div class="col-md-4 col-md-offset-3">

{{ $jobs->links() }}

</div>
</body>
</html>
