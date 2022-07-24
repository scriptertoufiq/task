@extends('layouts.frontend.app')
@section('title', 'Shop')
@section('content')
    <!--Breadcrumb Area Start-->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h1 class="breadmome-name">Shop</h1>
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
                <div class="col-lg-9">
                    <div class="product-left-sidebar-area">
                        <div class="row">

                            @foreach ($shopproducts as $shopproduct)
                                <div class="col-md-4 col-sm-6 col-12">
                                    <!--Single Product Area Start-->
                                    <div class="single-product-area mb-30">
                                        <div class="product-img img-full">
                                            <a>
                                                <img src="{{ asset('admin/img/shop/thumbsnil/' . $shopproduct->img) }}"
                                                    alt="">
                                                @if ($cart->where('id', $shopproduct->id)->count())
                                                    <a class="add-to-cart" style="pointer-events: none; cursor: default;">
                                                        Already In Cart</a>
                                                @else
                                                    <a data-id="{{ $shopproduct->id }}" id="viewProductBtn"
                                                        class="viewProductBtn add-to-cart"> click to
                                                        view</a>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a>
                                                    {{ strtoupper($shopproduct->name) }} </a>
                                            </h4>
                                            <h4 class="price"><span class="new">${{ $shopproduct->price }} </span> </h4>
                                        </div>
                                    </div>
                                    <!--Single Product Area End-->
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!--Pagination Start-->
                                <div class="product-pagination">
                                    <ul>
                                        {{ $shopproducts->links() }}
                                    </ul>
                                </div>
                                <!--Pagination End-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <div class="single-sidebar-widget">
                            <h4 class="title">Cart <span class="cart_value">
                                    {{ Gloudemans\Shoppingcart\Facades\Cart::count() }} </span> </h4>
                            <ul class="course-categoris">

                                <ul class="course-categoris">
                                    @foreach (Gloudemans\Shoppingcart\Facades\Cart::content() as $cartproduct)
                                        <li class="cart_add_product"> <b>{{ $cartproduct->name }} *
                                                {{ $cartproduct->qty }} =
                                                ${{ $cartproduct->qty * $cartproduct->price }} </b>
                                            <a href="{{ url('cart/delete/' . $cartproduct->rowId) }}">
                                                <i class="fa fa-trash"></i></a>
                                    @endforeach
                                </ul>
                            </ul>
                            <div style="background: #175689;color: #ffffff; margin-top: 10px; padding: 10px 2px;">Total =
                                {{ Gloudemans\Shoppingcart\Facades\Cart::priceTotal() }} </div>
                            <div style="background: #175689;color: #ffffff; padding: 10px 2px;"> <a href="/cart"
                                    class="btn btn-success">Cart Page</a> </div>

                        </div>
                        <div class="single-sidebar-widget">
                            <h4 class="title">Search</h4>
                            <div class="sidebar-form">
                                <form action="{{ route('product_search') }}" method="get">
                                    <input type="text" placeholder="Search" name="search" value="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <h4 class="title">Categories</h4>
                            <select name="category" id="category" class="form-control">
                                <option value="" selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ strtoupper($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shop Layout Area End-->



    <div class="modal fade" id="productModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <span id="productIdtoShowModal"></span> --}}
                    <h1 class="modal-title" id="prouct_name"> </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="" style="max-width:100%;" id="productModalImage" />
                    <p id="product_description" style="margin-top:15px;font-weight:bold;font-size:1.5em;"></p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ url('/cart/store') }}"
                        style="display:flex;width:100%;align-items:center;">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id" value="">
                        {{-- <span id="dropdownname" style="font-weight:bold;padding:0 6px;"></span> --}}

                        <button class="btn btn-success ml-2" id="cartAddBtn" style="align-self:flex-end" type="submit"><i
                                class="fa fa-cart-plus"></i> Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('script')
    <script>
        $(".viewProductBtn").click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            product_details(id);
            $('#productModal').modal('show');


        });



        function product_details(product_id) {
            axios.post('/fetch_product_details', {
                    id: product_id
                })
                .then(function(response) {
                    if (response.status == "200") {
                        var product_data = response.data;
                        $('#prouct_name').html(product_data.name);
                        $('#product_description').html(product_data.sort_des);
                        var img_url = "admin/img/shop/featured/";
                        var db_url = product_data.img;
                        var main_url = " {{ asset(' " + img_url + db_url + "') }}";
                        var image_show_url = '{{ URL::asset('admin/img/shop/featured/') }}' + '/' + db_url;
                        $("#productModalImage").attr("src", image_show_url);
                        $("#product_id").val(product_data.id);
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
@endsection
