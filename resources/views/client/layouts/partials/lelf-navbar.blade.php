<!-- ===============sidebar area start=============== -->
<div class="main-sidebar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-1">
                <div class="sidebar-wrap d-flex justify-content-between flex-column">
                    <div class="sidebar-top d-flex flex-column align-items-center">
                        <div class="category-icon">
                            <i class="flaticon-menu"></i>
                        </div>
                    </div>
                    <div class="sidebar-bottom">
                        <ul class="sidebar-icons">
                            <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
                            <li><a href="product.html"><i class="flaticon-heart"></i></a></li>
                            <li class="cart-icon">
                                    <i class="flaticon-shopping-cart"></i>
                                    @if (Session::has('Cart') != null)
                                        <span id="total-quanty-show">{{ Session::get('Cart')->totalQuanty }}</span>
                                    @else
                                        <span id="total-quanty-show">0</span>
                                    @endif
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobil-sidebar">
    <ul class="mobil-sidebar-icons">
        <li class="category-icon"><a href="#"><i class="flaticon-menu"></i></a></li>
        <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
        <li><a href="#"><i class="flaticon-heart"></i></a></li>

        <li class="cart-icon">
            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
            <div class="cart-count"><span></span></div>
        </li>
    </ul>
</div>
<!-- ===============sidebar area end=============== -->

<!-- =============== cart sidebar start=============== -->
<div class="cart-sidebar-wrappper">
    <div class="main-cart-sidebar">
        <div id="change-item-cart">
            @if (Session::has('Cart') != null)
                <div class="cart-top">

                    <ul class="cart-product-grid">
                        @foreach (Session::get('Cart')->products as $item)
                            <li class="single-cart-product">
                                <div class="cart-product-info d-flex align-items-center">
                                    <div class="product-img"><img src="assets/images/product/cart-p1.png" alt=""
                                            class="img-fluid"></div>
                                    <div class="product-info">
                                        <a href="product-details.html">
                                            <h5 class="product-title">{{ $item['productInfo']->name }}</h5>
                                        </a>
                                        <ul class="product-rating d-flex">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <p class="product-price"><span>{{ $item['quanty'] }}</span>x <span
                                                class="p-price">{{ number_format($item['productInfo']->price) }}VND</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="cart-product-delete-btn">
                                    <i class="flaticon-letter-x" data-id="{{ $item['productInfo']->id }}"></i>
                                </div>

                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="cart-total d-flex justify-content-between">
                    <label>Subtotal :</label>
                    <span>{{ number_format(Session::get('Cart')->totalPrice) }}VND</span>

                </div>
            @endif

        </div>
        <div class="cart-bottom">

            <div class="cart-btns">
                <a href="checkout.html" class="cart-btn checkout">CHECKOUT</a>
                <a href="cart.html" class="cart-btn cart">VIEW CART</a>
            </div>

            <p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free
                shipping. stay with EG </p>
        </div>
    </div>
</div>
<!-- =============== cart sidebar end=============== -->

<!-- =============== category wrapper start=============== -->

<div class="category-wrapper">
    <div class="category-bar">
        <h5 class="cb-title text-uppercase category-icon">
            All Catagory
            <i class="flaticon-arrow-pointing-to-left"></i>
        </h5>
        <ul class="cb-category-list">
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-man"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Men’s <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-woman"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title">Women stuffs <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-children"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Kid Collection <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-sun-glasses"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Accessorice <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-formal"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Sleepwear <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-shoes"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Shoe Collection <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-watch"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Watches <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-necklace"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Jewellery <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Diamond <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-baby-boy"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Baby Clothing <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-fashion"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title">Seasonal Wear <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
            <li class="cb-single-category">
                <div class="cb-category-icon">
                    <i class="flaticon-sports"></i>
                </div>
                <a href="product.html">
                    <h5 class="cb-category-title"> Sports <i class="bi bi-arrow-right"></i></h5>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- =============== category wrapper end=============== -->
