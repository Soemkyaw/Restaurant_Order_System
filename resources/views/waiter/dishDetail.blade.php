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
                    <div class="my-2">
                        <label class="form-label d-block">Description - </label>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit illum ea quod odit sapiente,
                            expedita
                            recusandae vitae magnam placeat voluptatum? Magnam voluptate eveniet reprehenderit nihil placeat
                            autem aut necessitatibus ullam?</span>
                    </div>
                    <div class="my-2">
                        <label class="form-label d-block">Price - </label>
                        <p>{{ $dish->price }} MMK</p>
                    </div>
                    <div class=" my-2">
                        <label class="form-label d-block">Igredients - </label>
                        <span class=" ingredient me-2 px-2 rounded text-center">Hi</span>
                        <span class=" ingredient me-2 px-2 rounded text-center">Hello</span>
                        <span class=" ingredient me-2 px-2 rounded text-center">Welcome</span>
                    </div>
                    <div class=" my-2">
                        <label class="form-label d-block">Qty - </label>
                        <button id="minusBtn" class=" rounded">-</button>
                        <span id="counter" class=" fs-5 mx-2">0</span>
                        <button id="plusBtn" class=" rounded">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
