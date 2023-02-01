<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">  <a href="{{ url('/dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            <li><a class="nav-link" href="{{ url('/category') }}"><i
                        data-feather="pie-chart"></i><span>Categories</span></a>
            <li><a class="nav-link" href="{{ url('/products') }}"><i
                        data-feather="camera"></i><span>Products</span></a>
            <li><a class="nav-link" href="{{ url('/orders') }}"><i
                        data-feather="shopping-bag"></i><span>Orders</span></a>
            <li><a class="nav-link" href="{{ url('/reviews') }}"><i
                        data-feather="copy"></i><span>Reviews</span></a>
            <li><a class="nav-link" href="{{ url('/shipping') }}"><i
                        data-feather="truck"></i><span>Shipping</span></a>
            <li><a class="nav-link" href="{{ url('/flash') }}"><i
                        data-feather="zap"></i><span>Flash Sale</span></a>
            <li><a class="nav-link" href="{{ url('/customers') }}"><i
                        data-feather="users"></i><span>Customers</span></a>
            <li><a class="nav-link" href="{{ url('/discount') }}"><i
                        data-feather="gift"></i><span>Discount</span></a>
            <li><a class="nav-link" href="{{ url('/order_return') }}"><i
                        data-feather="shopping-cart"></i><span>Order Return</span></a>
            <li><a class="nav-link" href="{{ url('/invoice') }}"><i
                        data-feather="credit-card"></i><span>Invoice</span></a>
            <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user-check"></i><span>Auth</span></a>
            <ul class="dropdown-menu">
                        <li><a href="{{url('/login')}}">Login</a></li>
                        <li><a href="{{url('/register')}}">Register</a></li>
                        <li><a href="{{url('/forgot')}}">Forgot Password</a></li>
                        <li><a href="{{url('/reset')}}">Reset Password</a></li>
            </ul>
            </li>
            <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="anchor"></i><span>Other</span></a>
            <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{url('/create')}}">Create Post</a></li>
                        <li><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
            </ul>
            <li><a class="nav-link" href="{{ url('/taxes') }}"><i
                         data-feather="dollar-sign"></i><span>taxes</span></a>
    </li>
            <li class="dropdown"><a href="{{url('/settings/{id}')}}"><i
        data-feather="settings"></i><span>Setting</span></a>
        </ul>
    </aside>
</div>
