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
                <h4 class="text-center card-header">My Forum </h2>
                <div class="card-body">
                    <a class="btn btn-light" href="{{ '/forum' }}">back</a>

                    @foreach ($forum_user as $fr )
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $fr->fr_title }}</td>
                                <td>{{ $fr->fr_author }}</td>
                                <td>
                                    <a class="btn btn-light" href="{{ route('/forum/show',$fr->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('forum/edit',$fr->id) }}">Edit</a>
                                        <form action="{{ route('forum/destroy',$fr->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> 
                                                Hapus
                                            </button>
                                        </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection