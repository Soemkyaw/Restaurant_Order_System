@extends('layouts.homeMaster')

@section('content')
    <div class="container dishDetail mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $dish->image) }}" class=" rounded" width="100%">
            </div>
            <div class="col-lg-6">
                <div class=" mx-auto">
                    <h4 class=" text-center my-3">{{ Str::ucfirst($dish->name) }}</h4>
                    <div class="my-3">
                        <label class="form-label d-block">Description - </label>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit illum ea quod odit sapiente,
                            expedita
                            recusandae vitae magnam placeat voluptatum? Magnam voluptate eveniet reprehenderit nihil placeat
                            autem aut necessitatibus ullam?</span>
                    </div>
                    <div class="my-3">
                        <label class="form-label d-block m-0 p-0">Price - </label>
                        <p>{{ $dish->price }} MMK</p>
                    </div>
                    <input type="hidden" id="dishId" value="{{ $dish->id }}">
                    <div class=" my-2">
                        <label class="form-label d-block m-0 p-0">Igredients - </label>
                        <span class=" ingredient me-1 text-center">Hi,</span>
                        <span class=" ingredient me-1 text-center">Hello,</span>
                        <span class=" ingredient me-1 text-center">Welcome,</span>
                    </div>
                    <div class=" my-2">
                        <label class="form-label d-block m-0 p-0">Qty - </label>
                        <button id="minusBtn" class="numBtn ">-</button>
                        <input type="number" class=" counterInput" id="counterInput" value="1">
                        <button id="plusBtn" class="numBtn ">+</button>
                    </div>
                    <div class="my-3">
                        <label class="form-label d-block">Table - </label>
                        <select name="" id="tableId">
                            <option selected disabled>Choose Table</option>
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->number }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3">
                        <label class="form-label d-block m-0 p-0">Note - </label>
                        <textarea name="" id="note" class="rounded p-2" placeholder="Enter Note..."></textarea>
                    </div>
                    <div class="my-3 text-center">
                        <button type="button" class="orderBtn" id="addToCart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sourceScript')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#addToCart').click(function() {
                $resource = {
                    'count': $('#counterInput').val(),
                    'dishId': $('#dishId').val(),
                    'note': $('#note').val(),
                    'tableId': $('#tableId').val()
                }

                $.ajax({
                    url: 'http://127.0.0.1:8000/waiter/cart',
                    type: 'GET',
                    data: $resource,
                    success: function($response) {
                        console.log('hi');
                    }
                })
            })
        });
    </script>
@endsection
