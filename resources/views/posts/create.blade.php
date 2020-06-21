@extends('layouts.app')

@section('content')
    <h1>Submit your CV</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Job Title')}}
            {{Form::text('title', '', ['class' => 'form-control','placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Qualifications')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Body Text'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
{!!Form::close() !!}
    
@endsection