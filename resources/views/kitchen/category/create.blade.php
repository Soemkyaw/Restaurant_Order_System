@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Category</h1>
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
                                <h3 class="card-title">Category</h3>
                                <a href="/dish" class="btn btn-sm btn-default" style="float: right">Back</a>
                            </div>

                            <div class="card-body py-5">
                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-6 offset-3">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control" placeholder="">
                                            @error('name')
                                                <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
