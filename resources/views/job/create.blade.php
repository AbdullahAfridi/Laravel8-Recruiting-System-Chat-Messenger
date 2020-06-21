
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="">
<h1>Daily Requirments</h1>
<br/>

                @if(count($errors)>0)
                <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                           @endforeach
                        </ul>

                </div>
                @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                </div>

            @endif


                <form method="post" action="{{ url('job') }}">
                    {{ csrf_field() }}

                    <div class="col-md-9 col-md-offset-1">
                        <br><br><label>JobTitle</label><br><br>
                            <input type="text" name="jobtitle" class="form-control" placeholder="Enter your JobTitle "/><br><br>
                    </div>

                    <div class="col-md-9 col-md-offset-1">
                      <label> Location </label><br><br>
                            <input type="text" name="location" class="form-control" placeholder="Enter Your Location"/><br><br>
                    </div>

                    <div class="col-md-9 col-md-offset-1">
                        <label>JobDescrption </label><br><br>
                        <textarea name="Descrption" rows="30"  class="form-control" placeholder="Enter Your JobDescrption" id="article-ckeditor" /> </textarea>
                    </div>

                    <div class="col-md-9 col-md-offset-1">
                            <div class="text-center">

                            <br><br><br><br> <input type="submit" name="submit" class="btn btn-primary">

                    </div>

            </form>
            </div>


        </div>
        </div>






        </body>
        </html>

