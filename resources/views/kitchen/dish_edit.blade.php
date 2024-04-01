@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Dish</h1>
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
                                <h3 class="card-title">{{ Str::ucfirst($dish->name) }}</h3>
                                <a href="/dish" class="btn btn-sm btn-default" style="float: right">Back</a>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('dish.update',$dish) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label  class="form-label">Dish Name</label>
                                            <input type="text" name="name" value="{{ old('name',$dish->name) }}" class="form-control" placeholder="exp: pizza">
                                            @error('name')
                                                <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                                          <div class="col-md-6">
                                            <label  class="form-label">Category</label>
                                            <select name="category_id" class="form-control">
                                                <option  selected disabled>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $category->id == $dish->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                                    </div>
                                      <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label  class="form-label d-block">Dish Image</label>
                                                <img src="{{ asset('storage/'.$dish->image) }}" class=" img-bordered img-thumbnail" width="120px" height="100px">
                                                <input type="file" name="image" class="">
                                                @error('image')
                                                    <small class=" text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label d-block">Dish Price</label>
                                                <input type="number" name="price" value="{{ old('price',$dish->price) }}" class=" form-control" placeholder="0">
                                                @error('price')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                      </div>
                                      <div class=" text-center mt-5">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
