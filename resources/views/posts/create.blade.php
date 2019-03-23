@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form class="form" action="{{ route('post.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <textarea class="form-group" name="content" id="" cols="30" rows="10">

                            </textarea>
                            <br/>
                            <input type="submit" value="submit" class="form-group btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
