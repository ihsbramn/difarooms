@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">

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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- back & title section --}}
        <div class="row d-flex">
            <div class="col-2 text-start">
                <a class="btn btn-primary btn-lg mt-3 px-4" href="{{ '/forum' }}"
                    style="font-weight: 500; font-size: 20px; background: #47A2D6; border-color: #47A2D6; border-radius: 12px;"><i
                        class="bi bi-arrow-left me-2"></i>back</a>
            </div>
            <div class="col-8 text-center">
                <p style="font-weight: 700; font-size: 32px;">{{ $forum->fr_title }}</p>
            </div>
        </div>

        {{-- image section --}}
        <div class="row mt-3">
            @foreach ($forum_img as $img)
                <img src="/storage/uploads/{{ $img->name }}" alt="gambar" height="200px">
            @endforeach
        </div>

        {{-- body/isi section --}}
        <div class="row mt-3">
            <p style="font-weight: 500; font-size: 20px; text-align: justify;">{{ $forum->fr_body }}</p>
        </div>
        
        {{-- author section --}}
        <div class="row px-5">
            <hr class="mb-0">
            <p class="px-3 mb-0 mt-0" style="font-weight: 500; font-size: 16px;">Posted by : {{ $forum->fr_author }}</p>
            <p class="px-3 mb-0 mt-0" style="font-weight: 500; font-size: 16px;">Date : {{ $forum->created_at }}</p>
            <hr>
        </div>

        {{-- comment section view --}}
        <div class="container">
            <div class="card" style="border-radius: 12px 12px 0px 0px">
                <div class="card-header">
                    <p class="mb-0" style="font-weight: 700; font-size: 24px;">comments</p>
                </div>
                <div class="card-body">
                    @foreach ($comment as $cm)
                        <div class="card shadow-sm border-1 p-2" style="max-width: 68rem; border-radius: 10px">
                            <p class="mb-0" style="font-weight: 600; font-size: 18px;">{{ $cm->cm_author }}</p>
                            <p class="mb-0" style="font-weight: 400; font-size: 14px;">{{ $cm->cm_body }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- comment section input --}}
        <div class="container mt-3">
            <form action="{{ route('/comment/store') }}" method="POST">
                @csrf
                <div class="card border-1 shadow-sm p-2" style="border-radius: 0px 0px 12px 12px">
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="text" class="form-control" id="cm_user_id" name="cm_user_id"
                                    value="{{ Auth::user()->id }}" hidden>
                                <input type="text" class="form-control" id="cm_forum_id" name="cm_forum_id"
                                    value="{{ $forum->id }}" hidden>
                                <input type="text" class="form-control" id="cm_author" name="cm_author"
                                    value="{{ Auth::user()->name }}" hidden>
                                <input type="text" class="form-control" id="cm_body" name="cm_body"
                                    placeholder="Comment here">
                            </div>
                        </div>
                        <div class="col-2 text-center">
                            <button href="submit" class="btn btn-dark">Post !</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- <div class="row justify-content-center">
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
                    @foreach ($forum_img as $img)
                    <img src="/storage/uploads/{{ $img->name }}" alt="gambar" height="200px" >
                    @endforeach
                    <br>
                    <p>{{ $forum->fr_body }}</p>
                </div>
            </div>
            <br>
            <div class="card">
                <p class="card-header">Comment</p>
                <div class="card-body">
                    @foreach ($comment as $cm)
                    <div class="card">
                        <div class="card-header">
                            {{ $cm->cm_author }}
                        </div>
                        <div class="card-body">
                        {{ $cm->cm_body }}
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="card">
                
                <div class="card-body">
                    <form action="{{ route('/comment/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="cm_user_id" name="cm_user_id" value="{{ Auth::user()->id }}" hidden>
                        <input type="text" class="form-control" id="cm_forum_id" name="cm_forum_id" value="{{ $forum->id }}" hidden>
                        <input type="text" class="form-control" id="cm_author" name="cm_author" value="{{ Auth::user()->name }}" hidden>
                        <input type="text" class="form-control" id="cm_body" name="cm_body" placeholder="Comment here">
                    </div>
                    <br>
                    <button href="submit" class="btn btn-dark">Post !</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
@endsection
