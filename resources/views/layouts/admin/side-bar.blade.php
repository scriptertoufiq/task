@yield('side-bar')
<aside class="sidebar">
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li>
                <a href="{{ route('home') }}" class="{{ isset($page) ? ($page == 'home' ? 'active' : '') : '' }}">
                    <span data-feather="home" class="nav-icon"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>


            <li class="menu-title mt-1 mb-1">
                <span>Shop Page Section</span>
            </li>

            <li class="has-child {{ isset($page) ? ($page == 'category' ? 'open' : '') : '' }}">
                <a href="#" class="{{ isset($page) ? ($page == 'category' ? 'active' : '') : '' }}">
                    <span data-feather="image" class="nav-icon"></span>
                    <span class="menu-text">Product Category</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li>
                        <a class="" href="{{ url('admin/category/create') }}">Add Product Category</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/category') }}">View Product Category</a>
                    </li>
                </ul>
            </li>

            <li class="has-child {{ isset($page) ? ($page == 'shop' ? 'open' : '') : '' }}">
                <a href="#" class="{{ isset($page) ? ($page == 'shop' ? 'active' : '') : '' }}">
                    <span data-feather="image" class="nav-icon"></span>
                    <span class="menu-text">Product</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li>
                        <a class="" href="{{ url('admin/shop/create') }}">Add Product</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/shop') }}">View Product</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
</aside>
