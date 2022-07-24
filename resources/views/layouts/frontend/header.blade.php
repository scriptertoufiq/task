{{-- @yield('header') --}}

<!--Header Area Start-->
<header>
    <!--Default Header Area Start-->
    <div class="default-header-area header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!--Header Logo Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--Header Logo End-->
                <!--Header Menu Start-->
                <div class="col-lg-7  d-none d-lg-block text-right">
                    <div class="header-menu-area">
                        <nav>
                            <ul class="main-menu">
                                <li class="{{ isset($page) ? ($page == 'home' ? 'active' : '') : '' }}"><a
                                        href="{{ url('/') }}">SHOP PAGE</a>
                                </li>
                                <li><a href="{{ url('/') }}">Cart <sup><span class="cart_value">
                                                {{ Gloudemans\Shoppingcart\Facades\Cart::count() }} </span></sup></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!--Header Menu End-->
                <!--Book Now Area Start-->
                <div class="col-lg-2 col-md-6">
                    <div class="book-now-btn text-right">
                        <a href="{{ url('#') }}">Buy Now</a>
                    </div>
                </div>
                <!--Book Now Area Start-->
            </div>
            <div class="row">
                <div class="col-12">
                    <!--Mobile Menu Area Start-->
                    <div class="mobile-menu d-lg-none d-xl-none"></div>
                    <!--Mobile Menu Area End-->
                </div>
            </div>
        </div>
    </div>
    <!--Default Header Area End-->
</header>
<!--Header Area End-->
