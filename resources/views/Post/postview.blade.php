@extends('layouts.frontend')

@section('content')


    <div class="section padding-top-big padding-bottom over-hide">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title-wrap text-center parallax-fade-top">
                    <p class="primary-color">{{ $Post->postID }}</p>
                    <h1>{{ $Post->title }}</h1>
                    <p class="primary-color">{{ $Post->description }}</p>

                </div>
            </div>
        </div>
    </div>

@endsection

