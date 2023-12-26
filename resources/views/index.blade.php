@extends('layout.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                All Posts

                <a class="btn btn-success"href="">Create</a>
                <a class="btn btn-warning"href="">Trashed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" width="10%">Image</th>
                            <th scope="col" width="20%">Title</th>
                            <th scope="col" width="30%">Description</th>
                            <th scope="col" width="10%">Category</th>
                            <th scope="col" width="15%">Publish Date</th>
                            <th scope="col" width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img width="80px"
                                    src="https://images.unsplash.com/photo-1510906594845-bc082582c8cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dGVjaG5vbG9neSUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D"
                                    alt="">
                            </td>
                            <td>Lorem ipsum dolor sit amet consectetur </td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit dolorem sit delectus sunt.
                                Eveniet voluptas cum deserunt </td>
                            <td>NEWS</td>
                            <td>20-05-2023</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href=""><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
