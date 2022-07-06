@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 mx-5">
            <div class="col text-align-start">
                <h2>Kelola Hotel</h2>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            </div>
        </div>
        <div class="row mt-5 mx-5 shadow bg-white" style="border-radius:12px">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="select-all">
                            </div>
                        </th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="select">
                            </div>
                        </th>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
