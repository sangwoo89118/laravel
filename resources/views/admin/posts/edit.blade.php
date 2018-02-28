
@extends('layouts.admin')


@section('content')

    <h1>Update Post</h1>

    <div class="row">


        <div class="col-sm-6">


            <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>




        <div class="col-sm-6">

            {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows' => 5]) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary pull-left']) !!}
            </div>
            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete post', ['class'=>'btn btn-danger pull-right']) !!}
            </div>
            {!! Form::close() !!}



        </div>


    </div>

    <div class="row">
        @include('includes.form_error')
    </div>




@stop