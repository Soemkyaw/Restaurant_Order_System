@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dishes</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Dish Table</h3>
                                <a href="/dish/create" class="btn btn-sm btn-primary" style="float: right">Create New Dish</a>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dishes as $dish)
                                            <tr>
                                                <td class="text-center">
                                                    <img src="{{ asset('storage/'.$dish->image) }}" width="80px" height="70px">
                                                </td>
                                                <td class="align-middle">{{ $dish->name }}</td>
                                                <td class="align-middle">{{ $dish->category->name }}</td>
                                                <td class=" text-right align-middle">{{ $dish->price }} <span class=" text-success ms-2">MMK</span></td>
                                                <td class="align-middle">{{ $dish->created_at }}</td>
                                                <td class="align-middle">
                                                    <div class="row justify-content-around align-items-center">
                                                            <a href="{{ route('dish.edit',$dish->id) }}" class="btn  btn-warning">Edit</a>

                                                        <form action="{{ route('dish.destroy',$dish) }}" method="POST" class=" mb-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="Delete" class="btn btn-danger">
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
