@extends('layouts.app')
@section('content')
<div class="container">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
        @endif

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Forum Diskusi </h2>
                <div class="card-body">
                    <a class="btn btn-light" href="{{ '/forum' }}">back</a>
                    <a class="btn btn-light" href="{{ '/user/myforum' }}">My Forum</a>
                    <hr>
                    <h2 class="text-center">{{ $forum->fr_title }}</h2>
                    <p>Posted by : {{ $forum->fr_author }}</p>
                    <p>Date : {{ $forum->created_at }}</p>
                    <br>
                    <p>{{ $forum->fr_body }}</p>
                </div>
            </div>
            <br>
            <div class="card">
                <p class="card-header">Comment</p>
                <div class="card-body">

                </div>
            </div>
            <br>
            <div class="card">
                <p class="card-header">Add Comment</p>
                <div class="card-body">
                    <form action="{{ route('/comment/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="cm_user_id" name="cm_user_id" value="{{ Auth::user()->id }}" hidden>
                        <input type="text" class="form-control" id="cm_forum_id" name="cm_forum_id" value="{{ $forum->id }}" hidden>
                        <input type="text" class="form-control" id="cm_author" name="cm_author" value="{{ Auth::user()->name }}" hidden>
                        <input type="text" class="form-control" id="cm_body" name="cm_body">
                    </div>
                    <br>
                    <button href="submit" class="btn btn-dark">Post !</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection