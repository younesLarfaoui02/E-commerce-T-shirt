@extends('front.layouts.app')
@section('content')

<main class="main">

    <div class="container mb-30">

        <div class="row flex-row">

            <div class="col-lg-4-5">
                <div class="shop-product-fillter">
                    <div class="totall-product">
                        <p>We found <strong class="text-brand">{{count($products)}}</strong> items for you!</p>
                    </div>
                    <div class="sort-by-product-area">
                        <div class="sort-by-cover mr-10">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps"></i>Show:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">50</a></li>
                                    <li><a href="#">100</a></li>
                                    <li><a href="#">150</a></li>
                                    <li><a href="#">200</a></li>
                                    <li><a href="#">All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sort-by-cover">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Featured</a></li>
                                    <li><a href="#">Price: Low to High</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                    <li><a href="#">Release Date</a></li>
                                    <li><a href="#">Avg. Rating</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row product-grid">
                    @if(count($products) == 0)
                        <div class="text-brand fs-2" style="font-family: 'Quicksand', 'sans-serif'">No Products Here  &#x1F614</div>
                    @else
                        @foreach($products as $product)
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product_detail.show',$product->id) }}">
                                                <img class="default-img"  src="{{asset('frontend/assets/imgs/shop/product-3-1.jpg')}}" alt="" />
                                                <img class="hover-img" src="{{asset('frontend/assets/imgs/shop/product-3-1.jpg')}}" alt="" />
                                            </a>
                                        </div>

                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">{{$product->sous_category->nom}}</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">{{$product->nom_produit}}</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 85%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>{{$product->prix_produit}}</span>
                                                <span class="old-price">{{$product->prix_produit}}</span>
                                            </div>
                                            <div class="add-cart">
{{--                                                implode(',',[$product->id,$product->nom_produit,$product->prix_produit] )--}}
                                                <a class="add" href="{{route('cart.store',$product->id) }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif
                </div>

                <!--product grid-->
                {{$products->links()}}



            </div>
            <!-- Fillter By Category -->

            <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                <div class="sidebar-widget widget-category-2 mb-30">
                    @isset($send_all)
                    <h5 class="section-title style-1 mb-30">
                        All Categories
                    </h5>
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('category_produits',$category->nom)}}">{{$category->nom}}</a><span class="count">{{count($category->produits)}}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        @isset($one_category)
                            <h5 class="section-title style-1 mb-30">
                                Sub Categories
                            </h5>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('sub_category_produits',[$category_nom->nom,$category->nom])}}">{{$category->nom}}</a><span class="count">{{count($category->produits)}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-end">
                                <a href="{{url('/all')}}" id="back-btn"  >back</a>
                            </div>
                        @else
                            <h5 class="section-title style-1 mb-30">
                                Sub Categories
                            </h5>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('sub_category_produits',[$category_nom->nom,$category->nom])}}">{{$category->nom}}</a><span class="count">{{count($category->produits)}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-end">
                                <a href="{{route('category_produits' ,$category_nom->nom)}}" id="back-btn"  >back</a>
                            </div>

                        @endisset
                    @endisset

                </div>

 {{--               <!-- New Product sidebar Widget -->
                <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                    <h5 class="section-title style-1 mb-30">New products</h5>
                    <div class="single-post clearfix">
                        <div class="image">
                            <img src="assets/imgs/shop/thumbnail-3.jpg" alt="#" />
                        </div>
                        <div class="content pt-10">
                            <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                            <p class="price mb-0 mt-5">$99.50</p>
                            <div class="product-rate">
                                <div class="product-rating" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post clearfix">
                        <div class="image">
                            <img src="assets/imgs/shop/thumbnail-4.jpg" alt="#" />
                        </div>
                        <div class="content pt-10">
                            <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                            <p class="price mb-0 mt-5">$89.50</p>
                            <div class="product-rate">
                                <div class="product-rating" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post clearfix">
                        <div class="image">
                            <img src="assets/imgs/shop/thumbnail-5.jpg" alt="#" />
                        </div>
                        <div class="content pt-10">
                            <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                            <p class="price mb-0 mt-5">$25</p>
                            <div class="product-rate">
                                <div class="product-rating" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
--}}

            </div>
        </div>
    </div>
</main>
@endsection
