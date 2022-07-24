@extends('layouts.frontend.app')
@section('title', 'Shop')
@section('content')
    <!--Breadcrumb Area Start-->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h1 class="breadmome-name">Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Area End-->
    <!--Shop Layout Area Start-->

    <div class="shop-layout-area pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center; margin-bottom: 20px;">All Product List</h2>
                    <table border="1" style="width: 100%;text-align: center;">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Product Details</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Gloudemans\Shoppingcart\Facades\Cart::content() as $key => $cartproduct)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $cartproduct->name }}</td>
                                    <td>{{ $cartproduct->price }}</td>
                                    <td>
                                        <input type="number" class="product_quantity" id="number"
                                            value="{{ $cartproduct->qty }}" />
                                    </td>
                                    <td>{{ $cartproduct->qty * $cartproduct->price }}</td>
                                    <td><a href="{{ url('cart/delete/' . $cartproduct->rowId) }}">
                                            <i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" style="background: #175689;color: #ffffff; padding: 10px 2px;">Total:
                                </td>
                                <td colspan="3"
                                    style="background: #175689;color: #ffffff; margin-top: 10px; padding: 10px 2px;">
                                    {{ Gloudemans\Shoppingcart\Facades\Cart::priceTotal() }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <a href="" class="btn btn-success w-100 mt-30">Checkout</a>


                </div>

            </div>
        </div>
    </div>
    <!--Shop Layout Area End-->


@endsection
<style>
    form {
        width: 300px;
        margin: 0 auto;
        text-align: center;
        padding-top: 50px;
    }

    .value-button {
        display: inline-block;
        border: 1px solid #ddd;
        margin: 0px;
        width: 40px;
        height: 25px;
        text-align: center;
        vertical-align: middle;
        padding: 0px 0;
        background: #eee;

        margin-left: 10px;
    }

    .value-button:hover {
        cursor: pointer;
    }

    form #decrease {
        margin-right: -4px;
        border-radius: 8px 0 0 8px;
    }

    form #increase {
        margin-left: -4px;
        border-radius: 0 8px 8px 0;
    }

    form #input-wrap {
        margin: 0px;
        padding: 0px;
    }

    input#number {
        text-align: center;
        border: none;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        margin: 0px;
        width: 40px;
        height: 40px;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@section('script')

@endsection
