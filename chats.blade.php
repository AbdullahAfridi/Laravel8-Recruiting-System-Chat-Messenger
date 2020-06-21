@extends('master')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat ROOM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>



            <article    id="app"  style="background-color:#ffffff;margin-left: 310px;margin-top: 150px">




                    <chats :user="{{ auth()->user()->role=="Employee" }}"></chats>


                  </article>
                  @if(  auth()->user()->role=="Manager")

                  <h1 style="color:red;margin-left:600px;margin-top:300px;"><strong><b> Only Employees Can Access This page </b></strong> </h1>
                  @endif

    <script src="{{ ('js/app.js') }}"></script>
</body>
</html>



