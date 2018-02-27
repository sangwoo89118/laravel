

@extends('layouts.app')

@section('content')



    <h1>Edit Post</h1>



    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]  ]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">

            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

        </div>

        {{csrf_field()}}

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id] ]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
        </div>


    {!! Form::close() !!}






    {{--<form method='post' action="/posts/{{$post->id}}">--}}

    {{--<input type="hidden" name="_method" value="PUT">--}}


    {{--<input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">--}}
    {{--{{csrf_field()}}--}}
    {{--<input type="submit" name="submit" value="UPDATE">--}}

    {{--</form>--}}

    {{--<form method="post" action="/posts/{{$post->id}}">--}}
        {{--{{csrf_field()}}--}}
        {{--<input type="hidden" name="_method" value="DELETE">--}}
        {{--<input type="submit" value="DELETE">--}}
    {{--</form>--}}




@stop

@section('footer')



@stop
