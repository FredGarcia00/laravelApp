@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    
 
    {!! Form::open(['action' => 'App\Http\Controllers\PostController@store','method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id'=> 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    {{-- <form action="app\Http\Controllers\PostController@store" method="POST">
        <label >title</label>
        <input name="title" type="text">
        <label >body</label>
        <textarea name="body" cols="30" rows="10"></textarea>
        <input type="submit" class="btn btn-primary">
    </form> --}}
@endsection