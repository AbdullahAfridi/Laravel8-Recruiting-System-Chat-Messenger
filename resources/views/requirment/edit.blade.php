@extends('master')


@section('content')

<div class="row">
    <div class="col-md-12">
        <br/>
        <h3>Edit Records</h3>
        <br/>
        @if(count($errors) >0)

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    
                @endforeach
            </ul>

        </div>


        @endif

        <form method="post" action="{{ action('RequirmentController@update','$id') }}">

            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH"/>

            <div class="form-group">
                <input type="text" name="Jobtitle" class="form-control" value="{{ $requirment ->Jobtitle }}" placeholder="Enter"

            </div>


            <div class="form-group">
                <input type="text" name="Location" class="form-control" value="{{ $requirment ->Location}}" placeholder="Enter"

            </div> 

            <div class="form-group">
                <input type="text" name="Jobdesc" class="form-control" value="{{ $requirment ->Jobdesc}}" placeholder="Enter"

            </div>  

            <div class="form-group">
                <input type="text" name="Companyrate" class="form-control" value="{{ $requirment ->Companyrate }}" placeholder="Enter"

            </div>

            
            <div class="form-group">
                <input type="text" name="Canrate" class="form-control" value="{{ $requirment ->Canrate }}" placeholder="Enter"

            </div>
               
            <div class="form-group">
                <input type="text" name="Recname" class="form-control" value="{{ $requirment ->Recname }}" placeholder="Enter"

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit" />

            </div>

        </form>



    </div>



</div>

    
@endsection