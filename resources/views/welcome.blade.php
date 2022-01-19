@extends('layouts.frontend')

@section('content')

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">

            @foreach($Posts as $post)

                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('Post.postview', $post->id)}}">More Info</a></div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
