<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="/">Home</a></li>
                                <li><a href="/shop">shop</a></li>
                                <li><a href="/about">about</a></li>
                                <li class="hot"><a href="#">Latest</a>
                                    <ul class="submenu">
                                        <li><a href="shop"> Product list</a></li>
                                        <li><a href="/product_details"> Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="/blog">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="blog-details">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/shopping-cart">Cart</a></li>
                                        <li><a href="/elements">Element</a></li>
                                        <li><a href="confirmation">Confirmation</a></li>
                                        <li><a href="/checkout-cart">Product Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            @guest
                                <li> <a href="{{ route('login') }}"><span class="flaticon-user"></span></a></li>
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a style="color: black ; margin:20px; font-weight: 400;" href="/dashboard">Dashboard</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            <li><a href="{{ route('cart.list') }}"><span class="flaticon-shopping-cart">
                                {{ Cart::getTotalQuantity()}}
                            </span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
