@extends('layouts.app')
@section('head')
    <script>
        function search_forum() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("forumsearchbar");
            filter = input.value.toUpperCase();
            table = document.getElementById("myforum");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
@section('content')
    <div class="container">

        <div class="row mt-5">
            <div class="col-8 my-auto">
                <h1 style="font-weight: 800; font-size: 40px;"><i class="bi bi-chat-left-text-fill me-4"></i></i>My Forum</h1>
            </div>
            <div class="col-4">
                <div class="card border-0 shadow" style="border-radius: 12px">
                    <div class="card-body">
                        <form action="{{ '/forum/search' }}" method="get" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari topik" onkeyup="search_forum()"
                                    aria-label="cariforum" aria-describedby="button-addon2" name="searchbar"
                                    id="forumsearchbar"
                                    style="background: rgba(217, 217, 217, 1);font-weight: 400;font-size: 16px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="card p-3 border-0 shadow" style="border-radius: 12px;">
                <div class="table-responsive">
                    <table class="table table-hover" id="myforum">
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th class="col-5">Judul</th>
                                <th class="col-3">Author</th>
                                <th class="col-3 text-center">Action</th>
                            </tr>
                        </thead>

                        @foreach ($forum_user as $fr)
                            <tbody>
                                <tr>
                                    <th class="col-1 align-middle" scope="row">{{ $count++ }}</th>
                                    <td class="col-5 align-middle">{{ $fr->fr_title }}</td>
                                    <td class="col-3 align-middle">{{ $fr->fr_author }}</td>
                                    <td class="col-3">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <a class="btn" href="{{ route('/forum/show', $fr->id) }}" style="color: #3B63B0; font-size: 20px;"><i class="bi bi-eye-fill"></i></a>
                                            <a class="btn" href="{{ route('forum/edit', $fr->id) }}" style="color: #038C11; font-size: 20px;"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('forum/destroy', $fr->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="color: #CD0202; font-size: 20px;">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
