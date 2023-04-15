    <!-- Header  -->
    <header class="header-area header-style-1 header-height-2">


        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{url('/')}}"><img src="{{asset('frontend/assets/imgs/theme/logo.svg')}}" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2" >
                            <form action="#">
                                <input type="text" placeholder="Search for products..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2  mx-5 ">


                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="{{asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest"
                                                            src="{{asset('frontend/assets/imgs/shop/thumbnail-3.jpg')}}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest"
                                                            src="{{asset('frontend/assets/imgs/shop/thumbnail-2.jpg')}}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">

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
                                    <a href="{{ url('register') }}">
                                        <span  class="login-btn lable btn btn-warning text-light">Register</span>    
                                    </a>
                                    <a href="{{ url('login') }}">
                                        <span class="register-btn lable btn btn-warning text-white">Login </span>    
                                    </a>
                                    <span class="px-5"></span>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{asset('frontend/assets/imgs/theme/logo.svg')}}" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span>  Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-1.svg')}}"
                                                    alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-2.svg')}}"
                                                    alt="" />Clothing & beauty</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-3.svg')}}" alt="" />Pet
                                                Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-4.svg')}}"
                                                    alt="" />Baking material</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-5.svg')}}"
                                                    alt="" />Fresh Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-6.svg')}}"
                                                    alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-7.svg')}}"
                                                    alt="" />Fresh Seafood</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-8.svg')}}" alt="" />Fast
                                                food</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-9.svg')}}"
                                                    alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{asset('frontend/assets/imgs/theme/icons/category-10.svg')}}"
                                                    alt="" />Bread and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-right.html"> <img
                                                        src="{{asset('frontend/assets/imgs/theme/icons/icon-1.svg')}}"
                                                        alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img
                                                        src="{{asset('frontend/assets/imgs/theme/icons/icon-2.svg')}}"
                                                        alt="" />Clothing & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="shop-grid-right.html"> <img
                                                        src="{{asset('frontend/assets/imgs/theme/icons/icon-3.svg')}}"
                                                        alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img
                                                        src="{{asset('frontend/assets/imgs/theme/icons/icon-4.svg')}}"
                                                        alt="" />Fresh Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span
                                        class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading ">
                            <nav>
                                <ul>

                                    <li>
                                        <a class="active" href="{{url('/home')}}">Home </a>

                                    </li>
                                    <li>
                                        <a href="page-about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="{{route('all.products')}}">All Products </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">Best Deals Products </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">Discount Products</a>
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
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest" src="{{asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                    <span class="pro-count white">2</span>
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
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{asset('frontend/assets/imgs/theme/logo.svg')}}" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
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
                                <a href="#">Categories</a>
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
                                    <div class="text-center ">
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