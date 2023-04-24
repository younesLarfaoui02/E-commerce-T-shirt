
    <!-- Header  -->
    <header class="header-area header-style-1 header-height-2">


        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">

                    <div class="header-right">
                        <div class="w-75 m-auto ">
                            <form action="#">
                                <input type="text" placeholder="Search for products..."  class="w-full fs-5" style="font-family : Quicksand;border: 1px solid darkgray ;  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" ;/>
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2 ">


                                <div class="header-action-icon-2 ">
                                    <a class="mini-cart-icon" href="{{route('cart.index')}}">
                                        <img alt="Nest" src="{{asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                        <span class="pro-count blue">{{Cart::count()}}</span>
                                    </a>
                                    <a href="{{route('cart.index')}}"><span class="lable">Cart</span></a>
                                </div>
                                <div class="header-action-icon-2 ">

                                    @auth
                                        <div class="">
                                            <a href="page-account.html">
                                                <img class="svgInject" alt="Nest"
                                                     src="{{asset('frontend/assets/imgs/theme/icons/icon-user.svg')}}" />
                                            </a>
                                            <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>My
                                                            Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-account.html"><i
                                                                class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My
                                                            Voucher</a>
                                                    </li>

                                                    <li>
                                                        <a href="page-account.html"><i
                                                                class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                                    </li>
                                                    <li>


                                                        <a  href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                            <i class="fi fi-rs-sign-out mr-10"></i>
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    @else
                                        <div>
                                            <div class="main-categori-wrap fs-5 d-none d-lg-block d-inline">
                                                <a  href="{{ URL('/login')  }}">
                                                    <button class="btn">
                                                        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                                        </svg>
                                                        <span>Login</span>
                                                    </button>
                                                </a>

                                            </div>
                                        </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="header-bottom header-bottom-bg-color sticky-bar ">
            <div class="container">
                <div class="header-wrap header-space-between position-relative py-4">

                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active " href="#">
                                <button class="btn">
                                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                    </svg>
                                    <span>CATEGORIES</span>
                                </button>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categorie-dropdown-inner">
                                    <ul>
                                        @foreach($categories_left as $category)
                                            <li>
                                                <a href="{{route('category_produits',$category->nom)}}">
                                                    {{$category->nom}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <ul class="end">
                                        @foreach($categories_right as $category)
                                            <li>
                                                <a href="{{route('category_produits',$category->nom)}}">
                                                    {{$category->nom}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading ">
                            <nav>
                                <ul>

                                    <li>
                                        <a class="active" href="{{url('/')}}">Home </a>

                                    </li>

                                    <li>
                                        <a href="{{route('all.products')}}">All Products </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html"> Products </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">On Salle Products</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>



                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">

                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{url('/cart')}}">
                                    <img alt="Nest" src="{{asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                    <span class="pro-count white">{{Cart::count()}} </span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest"
                                                                                       src="{{asset('frontend/assets/imgs/shop/thumbnail-3.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest"
                                                                                       src="{{asset('frontend/assets/imgs/shop/thumbnail-4.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header  -->


    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">

            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">

                            <li class="menu-item-has-children">
                                <a href="#" class="btn btn-dark">Categories</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="index.html">About</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="index.html">All Products</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="index.html">Best Deals Products</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.html">Discount Products </a>
                            </li>
                            <li class="menu-item-has-children">
                                @auth
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest"
                                             src="{{asset('frontend/assets/imgs/theme/icons/icon-user.svg')}}" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>My
                                                    Account</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i
                                                        class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My
                                                    Voucher</a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My
                                                    Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i
                                                        class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>
                                            <li>
                                                <a href="page-login.html"><i class="fi fi-rs-sign-out mr-10"></i>Sign
                                                    out</a>
                                            </li>
                                        </ul>
                                    </div>

                                @else
                                    <div class="text-center">
                                        <a href="{{ url('register') }}">
                                            <span  class="login-btn lable btn btn-success text-light ">Register</span>
                                        </a>
                                        <a href="{{ url('login') }}">
                                            <span class="register-btn lable btn btn-info text-white">Login</span>
                                        </a>
                                    </div>
                                @endauth
                            </li>


                        </ul>

                    </nav>
                    <!-- mobile menu end -->
                </div>
            </div>
        </div>
    </div>
    <!--End header-->

