@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('post.create') }}" class="btn btn-success" style="margin-bottom:20px">Create Post</a>
        </div>
        <br/>
        <div class="col-md-12">
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">{{ $post->user->name }}</div>

                        <div class="card-body">
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection
