@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Post') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{route('post.insert')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control" name="description" rows="5"
                                          placeholder="Enter description" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input class="form-control" name="thumbnail" type="file">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
