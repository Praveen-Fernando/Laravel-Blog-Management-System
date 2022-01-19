@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('All Posts') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table">

                                <thead>
                                <tr>
                                    <th scope="col">Post ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Post as $post)
                                <tr>

                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>
                                        <li class="nav-item">
                                            <a href="{{route('post.edit',$post->id)}}" class="fas fa-pencil-alt">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('post.delete',$post->id)}}">Delete</a>
                                        </li>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>

@endsection
