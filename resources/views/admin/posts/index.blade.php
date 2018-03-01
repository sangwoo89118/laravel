
@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>

    @if(Session::has('deleted_post'))

        <p class="bg-danger">{{session('deleted_post')}}</p>

    @endif
    @if(Session::has('added_post'))

        <p class="bg-success">{{session('added_post')}}</p>

    @endif
    {{--@if(Session::has('updated_user'))--}}

        {{--<p class="bg-success">{{session('updated_user')}}</p>--}}

    {{--@endif--}}


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>body</th>
            <th>Post Links</th>
            <th>Comments</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td> <img height="100" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-rounded"></td>


                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    {{--<td>{{$post->is_active == 1 ? 'Active' : 'Not Active'}}</td>--}}

                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body, 20)}}</td>
                    <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                    <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @stop