@extends('layouts.homeMaster')


@section('content')
    <section class="container">
        <div class="row align-items-center">
            <div class="col-auto me-3">
                <input type="password" class="form-control mt-3" id="inputPassword2" placeholder="Search in menu">
            </div>
            <div class="mt-3 col-auto">
                @foreach ($categories as $category)
                    @php
                        $dishCount = $category->dishes->count();
                    @endphp
                    {{-- <a href="{{ route('category.dishes', $category) }}"
                        class=" bg-category mx-2 py-2 px-3 rounded text-decoration-none">
                        <span>{{ Str::ucfirst($category->name) }}
                            {{ $dishCount }}</span>
                    </a> --}}
                    <a href="{{ route('category.dishes', $category) }}"
                        class=" bg-category mx-2 py-2 px-3 rounded text-decoration-none  position-relative">
                        {{ Str::ucfirst($category->name) }}
                        <span class="position-absolute top-100 start-100 translate-middle badge rounded-pill bgc text-dark">
                            {{ $dishCount }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="row">
            @foreach ($dishes as $dish)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card w-100 mx-1 mt-5 p-0" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $dish->image) }}" class="card-img-top" height="250px"
                            alt="...">
                        <div class="card-body mb-3">
                            <span
                                class="card-text bg-category px-3 rounded mb-0 py-0">{{ Str::ucfirst($dish->category->name) }}</span>
                            <p class="card-text mb-0 ps-1 fw-bold">{{ Str::ucfirst($dish->name) }}</p>
                            <p class="card-text mb-0 ps-1"><span>Price - </span>{{ Str::ucfirst($dish->price) }} MMK</p>
                        </div>
                        <a href="{{ route('waiter.dish.detail', $dish->id) }}" class="card-button text-center"><i
                                class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
