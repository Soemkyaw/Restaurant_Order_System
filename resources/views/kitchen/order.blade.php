@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Order List</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-sm-12 col-md-12 col-lg-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Dish</th>
                                    <th scope="col">Table</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Ctrated At</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $order->dish->image) }}" width="100px"></td>
                                        <td>{{ $order->dish->name }}</td>
                                        <td>{{ $order->table->number }}</td>
                                        <td>{{ $order->qty }}</td>
                                        <td class="text-danger">{{ $order->created_at->diffForHumans() }}</td>
                                        <td class="text-info">{{ $status[$order->order_status] }}</td>
                                        <td>{{ $order->note }}</td>
                                        <td>
                                            <a href="{{ route('order.approve',$order) }}" class="btn btn-sm btn-primary">Approve</a>
                                            <a href="{{ route('order.ready',$order) }}" class="btn btn-sm btn-success">Ready</a>
                                            <a href="{{ route('order.cancel',$order) }}" class="btn btn-sm btn-danger">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
