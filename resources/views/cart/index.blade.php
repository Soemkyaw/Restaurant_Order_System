@extends('layouts.homeMaster')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col table-responsive">
                <table class="mt-5 cartTable">
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Dish</th>
                        <th class="text-center">Table Id</th>
                        <th class="text-center">Note</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @foreach ($carts as $cart)
                        <tr>
                            <td class="text-center"><img src="{{ asset('storage/'.$cart->dish->image) }}" class=" img-thumbnail"></td>
                            <td class="text-center">{{ $cart->dish->name }}</td>
                            <td class="text-center">{{ $cart->table->number }}</td>
                            <td class="text-center">{{ $cart->note }}</td>
                            <td class="text-center">
                                <button id="minusBtn" class="numBtn minusBtn">-</button>
                                <input type="number" class=" counterInput " id="counterInput" value="{{ $cart->qty }}">
                                <button id="plusBtn" class="numBtn plusBtn">+</button>
                            </td>
                            <td class="text-center"><button class="btn btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></button></td>
                        </tr>
                    @endforeach
                </table>
                <table class="mt-5 cartTable2">
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Dish</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @foreach ($carts as $cart)
                        <tr>
                            <td class="text-center"><img src="{{ asset('storage/'.$cart->dish->image) }}" class=" img-thumbnail"></td>
                            <td class="text-center">{{ $cart->dish->name }}</td>
                            <td class="text-center">
                                <button id="minusBtn" class="numBtn minusBtn">-</button>
                                <input type="number" class=" counterInput " id="counterInput" value="{{ $cart->qty }}">
                                <button id="plusBtn" class="numBtn plusBtn">+</button>
                            </td>
                            <td class="text-center"><button class="btn btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('sourceScript')
    <script>
        $(document).ready(function() {
            $('.plusBtn').click(function() {
                var counterInput = $(this).siblings('.counterInput');
                var currentValue = parseInt(counterInput.val());
                counterInput.val(currentValue + 1);
            });

            $('.minusBtn').click(function() {
                var counterInput = $(this).siblings('.counterInput');
                var currentValue = parseInt(counterInput.val());
                if (counterInput.val() != 0) {
                    counterInput.val(currentValue - 1);
                }
            });
        });
    </script>
@endsection
