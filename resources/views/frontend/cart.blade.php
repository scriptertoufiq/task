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


                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <h3 class="panel-title display-td" style="text-align: center;margin-top: 20px;">Payment Details
                            </h3>
                            <form role="form" action="{{ route('stripe.post') }}" method="post"
                                class="require-validation" data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                @csrf

                                <div class='form-row row'>
                                    <div class='col-lg-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> <input class='form-control'
                                            size='4' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-lg-12 form-group card required'>
                                        <label class='control-label'>Card Number</label> <input autocomplete='off'
                                            class='form-control card-number' size='20' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-lg-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                            type='text'>
                                    </div>
                                    <div class='col-lg-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month' placeholder='MM' size='2'
                                            type='text'>
                                    </div>
                                    <div class='col-lg-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input
                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                            type='text'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Pay
                                            Now
                                            ({{ Gloudemans\Shoppingcart\Facades\Cart::priceTotal() }})</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>



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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endsection
