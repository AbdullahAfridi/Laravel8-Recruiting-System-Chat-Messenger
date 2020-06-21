@extends('layouts.app')

@section('content')
    <h1>Submissions</h1>
    <a href="/getPDF" class="btn btn-primary">Generate Report</a>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Submitted on {{$post->created_at}} by {{$post->user['name']}}</small>
                    </div>

                
            </div>    
        @endforeach
        {{$posts->links()}}
    @else
            <p>No CVs  found</p> 
    @endif
@endsection