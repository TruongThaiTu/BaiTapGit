<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index-2.html"><img src="{{ asset('assets/admin/admin/img/logo.png') }}" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/admin/img/menu-icon/dashboard.svg') }}" alt>
                    </div>
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a class="active" href="{{ url('admin') }}">Sales</a></li>
                    <li><a href="index_2.html">Default</a></li>
                    <li><a href="index_3.html">Dark Menu</a></li>
                </ul>
            </li>
            <li class>
                <a href="{{ url('admin/users') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/admin/img/menu-icon/5.svg') }}" alt>
                    </div>
                    <span>Users</span>
                </a>
            </li>
            <li class>
                <a href="{{ url('admin/products') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/admin/img/menu-icon/3.svg') }}" alt>
                    </div>
                    <span>Products</span>
                </a>
            </li>
            <li class>
                <a href="{{ url('admin/categoryes') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/admin/img/menu-icon/3.svg') }}" alt>
                    </div>
                    <span>Categories</span>
                </a>
            </li>
        </ul>
    </nav>