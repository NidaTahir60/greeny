<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to Ecomart in Your Dream Online Store!</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="header-top-select">
                    <div class="header-select"><i class="icofont-world"></i><select class="select">
                            <option value="english" selected>english</option>
                            <option value="bangali">bangali</option>
                            <option value="arabic">arabic</option>
                        </select></div>
                    <div class="header-select"><i class="icofont-money"></i><select class="select">
                            <option value="english" selected>doller</option>
                            <option value="bangali">pound</option>
                            <option value="arabic">taka</option>
                        </select></div>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                @auth
                    <ul class="header-top-list">
                        <li><a href="{{ route('offer') }}">offers</a></li>
                        <li><a href="{{ route('faq') }}">need help</a></li>
                        <li><a href="{{ route('contact') }}">contact us</a></li>
                    </ul>
                @else
                    <ul class="header-top-list">
                        <li><a href="{{ route('offer') }}">offers</a></li>
                        <li><a href="{{ route('faq') }}">need help</a></li>
                        <li><a href="{{ route('contact') }}">contact us</a></li>
                        <li><a href="{{ route('login') }}">login</a></li>
                        <li><a href="{{ route('register') }}">register</a></li>
                    </ul>

                @endauth
            </div>
        </div>
    </div>
</div>


<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <img src="{{ asset('agency/assets/images/user.png') }}" alt="user" />
                </button>
                <a href="{{ route('greeny') }}">
                    <img src="{{ asset('agency/assets/images/logo.png') }}" alt="logo" />
                </a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>
            <a href="{{ route('greeny') }}" class="header-logo">
                <img src="{{ asset('agency/assets/images/logo.png') }}" alt="logo" />

            </a>


            @auth

                <a href="" class="header-widget" title="My Account">
                    <img src="{{ asset('agency/assets/images/user.png') }}" alt="user" />
                    {{-- <span>{{ auth()->user()->name }}</span> --}}

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    {{-- <li class="nav-item dropdown"> --}}
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    {{-- </li> --}}
                @endauth


            </a>
            <form class="header-form">
                <input type="text" placeholder="Search anything..." />
                <button><i class="fas fa-search"></i></button>
            </form>
            <div class="header-widget-group">
                <a href="{{ route('compare') }}" class="header-widget" title="Compare List">
                    <i class="fas fa-random"></i><sup>0</sup>
                </a>
                <a href="{{ route('wishlist') }}" class="header-widget" title="Wishlist">
                    <i class="fas fa-heart"></i><sup>0</sup>
                </a>
                <button class="header-widget header-cart" title="Cartlist">
                    <i class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                        price<small>$345.00</small></span>
                </button>
            </div>
        </div>
    </div>
</header>

<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('greeny') }}">home</a>
                        </li>
                        {{-- <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow"
                                href="#">shop</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">shop pages</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="shop-5column.html">shop 5 column</a></li>
                                                    <li><a href="shop-4column.html">shop 4 column</a></li>
                                                    <li><a href="shop-3column.html">shop 3 column</a></li>
                                                    <li><a href="shop-2column.html">shop 2 column</a></li>
                                                    <li><a href="shop-1column.html">shop 1 column</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">product pages</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="product-tab.html">product single tab</a></li>
                                                    <li><a href="product-grid.html">product single grid</a></li>
                                                    <li><a href="product-video.html">product single video</a></li>
                                                    <li><a href="product-simple.html">product single simple</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">user action</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="orderlist.html">order history</a></li>
                                                    <li><a href="invoice.html">order invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">other pages</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="all-category.html">all Category</a></li>
                                                    <li><a href="brand-list.html">brand list</a></li>
                                                    <li><a href="brand-single.html">brand single</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow"
                                href="#">category</a>
                            <div class="megamenu">
                                <div class="container megamenu-scroll">
                                    <div class="row row-cols-5">
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">vegetables</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">carrot</a></li>
                                                    <li><a href="#">broccoli</a></li>
                                                    <li><a href="#">asparagus</a></li>
                                                    <li><a href="#">cauliflower</a></li>
                                                    <li><a href="#">eggplant</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fruits</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">orange</a></li>
                                                    <li><a href="#">banana</a></li>
                                                    <li><a href="#">strawberrie</a></li>
                                                    <li><a href="#">watermelon</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">dairy farms</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Butter</a></li>
                                                    <li><a href="#">Cheese</a></li>
                                                    <li><a href="#">Milk</a></li>
                                                    <li><a href="#">Eggs</a></li>
                                                    <li><a href="#">cream</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">seafoods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Lobster</a></li>
                                                    <li><a href="#">Octopus</a></li>
                                                    <li><a href="#">Shrimp</a></li>
                                                    <li><a href="#">Halabos</a></li>
                                                    <li><a href="#">Maeuntang</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">diet foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Salmon</a></li>
                                                    <li><a href="#">Avocados</a></li>
                                                    <li><a href="#">Leafy Greens</a></li>
                                                    <li><a href="#">Boiled Potatoes</a></li>
                                                    <li><a href="#">Cottage Cheese</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fast foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">burger</a></li>
                                                    <li><a href="#">milkshake</a></li>
                                                    <li><a href="#">sandwich</a></li>
                                                    <li><a href="#">doughnut</a></li>
                                                    <li><a href="#">pizza</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">drinks</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">cocktail</a></li>
                                                    <li><a href="#">hard soda</a></li>
                                                    <li><a href="#">shampain</a></li>
                                                    <li><a href="#">Wine</a></li>
                                                    <li><a href="#">barley</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">meats</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Meatball</a></li>
                                                    <li><a href="#">Sausage</a></li>
                                                    <li><a href="#">Poultry</a></li>
                                                    <li><a href="#">chicken</a></li>
                                                    <li><a href="#">Cows</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fishes</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">scads</a></li>
                                                    <li><a href="#">pomfret</a></li>
                                                    <li><a href="#">groupers</a></li>
                                                    <li><a href="#">anchovy</a></li>
                                                    <li><a href="#">mackerel</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">dry foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">noodles</a></li>
                                                    <li><a href="#">Powdered milk</a></li>
                                                    <li><a href="#">nut & yeast</a></li>
                                                    <li><a href="#">almonds</a></li>
                                                    <li><a href="#">pumpkin</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow"
                                href="#">pages</a>
                            <ul class="dropdown-position-list">
                                <li><a href="{{ route('faq') }}">faqs</a></li>
                                <li><a href="{{ route('offer') }}">offers</a></li>
                                <li><a href="{{ route('profile') }}">my profile</a></li>
                                <li><a href="{{ route('wallet') }}">my wallet</a></li>
                                <li><a href="{{ route('about') }}">about us</a></li>
                                <li><a href="{{ route('contact') }}">contact us</a></li>
                                <li><a href="{{ route('privacy') }}">privacy policy</a></li>
                                <li><a href="{{ route('coming-soon') }}">coming soon</a></li>
                                {{-- <li><a href="blank-page.html">blank page</a></li> --}}
                                <li><a href="{{ route('error') }}">404 Error</a></li>
                                {{-- <li><a href="email-template.html">email template</a></li> --}}
                            </ul>
                        </li>

                        <li class="navbar-item"><a class="navbar-link" href="{{ route('blog') }}">blogs</a>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                            <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                        </div>
                        <div class="navbar-info"><i class="icofont-ui-email"></i>
                            <p><small>email us</small><span>support@example.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside class="category-sidebar">
    <div class="category-header">
        <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
            class="category-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="category-list">
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-vegetable"></i><span>vegetables</span></a>
            <ul class="dropdown-list">
                <li><a href="#">asparagus</a></li>
                <li><a href="#">broccoli</a></li>
                <li><a href="#">carrot</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-groceries"></i><span>groceries</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Grains & Bread</a></li>
                <li><a href="#">Dairy & Eggs</a></li>
                <li><a href="#">Oil & Fat</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fruit"></i><span>fruits</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Orange</a></li>
                <li><a href="#">Strawberry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-dairy-products"></i><span>dairy farm</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Egg</a></li>
                <li><a href="#">milk</a></li>
                <li><a href="#">butter</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-crab"></i><span>sea foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Lobster</a></li>
                <li><a href="#">Octopus</a></li>
                <li><a href="#">Shrimp</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-salad"></i><span>diet foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Salmon</a></li>
                <li><a href="#">Potatoes</a></li>
                <li><a href="#">Greens</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-dried-fruit"></i><span>dry foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">noodles</a></li>
                <li><a href="#">Powdered milk</a></li>
                <li><a href="#">nut & yeast</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fast-food"></i><span>fast foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">mango</a></li>
                <li><a href="#">plumsor</a></li>
                <li><a href="#">raisins</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-cheers"></i><span>drinks</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Wine</a></li>
                <li><a href="#">Juice</a></li>
                <li><a href="#">Water</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-beverage"></i><span>coffee</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Cappuchino</a></li>
                <li><a href="#">Espresso</a></li>
                <li><a href="#">Latte</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-barbecue"></i><span>meats</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Meatball</a></li>
                <li><a href="#">Sausage</a></li>
                <li><a href="#">Poultry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fish"></i><span>fishes</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Agujjim</a></li>
                <li><a href="#">saltfish</a></li>
                <li><a href="#">pazza</a></li>
            </ul>
        </li>
    </ul>
    <div class="category-footer">
        <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
    </div>
</aside>

<aside class="cart-sidebar">
    <div class="cart-header">
        <div class="cart-total">
            <i class="fas fa-shopping-basket"></i><span>total item (5)</span>
        </div>
        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list">
        <li class="cart-item">
            <div class="cart-media">
                <a href="#">
                    <img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product">
                </a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                            value="1">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                        </button>
                    </div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media">
                <a href="#">
                    <img src="{{ asset('agency/assets/images/product/02.jpg') }}" alt="product">
                </a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                            value="1">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media">
                <a href="#">
                    <img src="{{ asset('agency/assets/images/product/03.jpg') }}" alt="product">
                </a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                            value="1">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media">
                <a href="#">
                    <img src="{{ asset('agency/assets/images/product/04.jpg') }}" alt="product">
                </a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                            value="1">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media">
                <a href="#">
                    <img src="{{ asset('agency/assets/images/product/05.jpg') }}" alt="product">
                </a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                            value="1">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
    </ul>
    <div class="cart-footer">
        <button class="coupon-btn">Do you have a coupon code?</button>
        <form class="coupon-form">
            <input type="text" placeholder="Enter your coupon code">
            <button type="submit"><span>apply</span></button>
        </form>
        <a class="cart-checkout-btn" href="{{ route('checkout') }}"><span class="checkout-label">Proceed to
                Checkout</span>
            <span class="checkout-price">$369.78</span></a>
    </div>
</aside>

<aside class="nav-sidebar">
    <div class="nav-header">
        <a href="{{ route('greeny') }}"><img src="{{ asset('agency/assets/images/logo.png') }}" alt="logo">
        </a>
        <button class="nav-close"><i class="icofont-close"></i></button>
    </div>
    <div class="nav-content">
        <div class="nav-btn">
            <a href="{{ route('login') }}" class="btn btn-inline">
                <i class="fa fa-unlock-alt"></i><span>join here</span>
            </a>
        </div>
        <div class="nav-select-group">
            <div class="nav-select">
                <i class="icofont-world"></i>
                <select class="select">
                    <option value="english" selected>English</option>
                    <option value="bangali">Bangali</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div>
            <div class="nav-select">
                <i class="icofont-money"></i>
                <select class="select">
                    <option value="english" selected>Doller</option>
                    <option value="bangali">Pound</option>
                    <option value="arabic">Taka</option>
                </select>
            </div>
        </div>
        <ul class="nav-list">
            <li>
                <a class="nav-link" href="{{ route('home') }}"><i class="icofont-home"></i>Home</a>
            </li>
            {{-- <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                <ul class="dropdown-list">
                    <li><a href="shop-5column.html">shop 5 column</a></li>
                    <li><a href="shop-4column.html">shop 4 column</a></li>
                    <li><a href="shop-3column.html">shop 3 column</a></li>
                    <li><a href="shop-2column.html">shop 2 column</a></li>
                    <li><a href="shop-1column.html">shop 1 column</a></li>
                </ul>
            </li> --}}
            {{-- <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                <ul class="dropdown-list">
                    <li><a href="product-tab.html">product tab</a></li>
                    <li><a href="product-grid.html">product grid</a></li>
                    <li><a href="product-video.html">product video</a></li>
                    <li><a href="product-simple.html">product simple</a></li>
                </ul>
            </li> --}}
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                <ul class="dropdown-list">
                    <li><a href="{{ route('profile') }}">profile</a></li>
                    <li><a href="{{ route('wallet') }}">wallet</a></li>
                    <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                    <li><a href="{{ route('compare') }}">compare</a></li>
                    <li><a href="{{ route('checkout') }}">checkout</a></li>
                    <li><a href="orderlist.html">order history</a></li>
                    <li><a href="invoice.html">order invoice</a></li>
                    {{-- <li><a href="email-template.html">email template</a></li> --}}
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                <ul class="dropdown-list">
                    <li><a href="">login</a></li>
                    <li><a href="">register</a></li>
                    <li><a href="">reset password</a></li>
                    <li><a href="">change password</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ route('blog') }}"><i class="icofont-book-alt"></i>blogs</a>
                {{-- <ul class="dropdown-list">
                    <li><a href="blog-grid.html">blog grid</a></li>
                    <li><a href="blog-standard.html">blog standard</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li><a href="blog-author.html">blog author</a></li>
                </ul> --}}
            </li>
            <li><a class="nav-link" href="{{ route('offer') }}"><i class="icofont-sale-discount"></i>offers</a></li>
            <li><a class="nav-link" href="{{ route('about') }}"><i class="icofont-info-circle"></i>about us</a></li>
            <li><a class="nav-link" href="{{ route('faq') }}"><i class="icofont-support-faq"></i>need help</a></li>
            <li><a class="nav-link" href="{{ route('contact') }}"><i class="icofont-contacts"></i>contact us</a>
            </li>
            <li><a class="nav-link" href="{{ route('privacy') }}"><i class="icofont-warning"></i>privacy policy</a>
            </li>
            <li><a class="nav-link" href="{{ route('coming-soon') }}"><i class="icofont-options"></i>coming soon</a>
            </li>
            <li><a class="nav-link" href="{{ route('error') }}"><i class="icofont-ui-block"></i>404 error</a></li>
            <li><a class="nav-link" href=""><i class="icofont-logout"></i>logout</a></li>
        </ul>
        <div class="nav-info-group">
            <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
            </div>
            <div class="nav-info"><i class="icofont-ui-email"></i>
                <p><small>email us</small><span>support@example.com</span></p>
            </div>
        </div>
        <div class="nav-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </div>
</aside>

<div class="mobile-menu">
    <a href="{{ route('home') }}" title="Home Page">
        <i class="fas fa-home"></i><span>Home</span>
    </a>
    <button class="cate-btn" title="Category List">
        <i class="fas fa-list"></i><span>category</span>
    </button>
    <button class="cart-btn" title="Cartlist">
        <i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup>
    </button>
    <a href="wishlist.html" title="Wishlist">
        <i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup>
    </a>
    <a href="compare.html" title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup>
    </a>
</div>
