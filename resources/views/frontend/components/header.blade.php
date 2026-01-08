<header id="header" class="header sticky-top">

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid container-xl">
            <div class="d-flex py-3 align-items-center justify-content-between">

                <!-- Logo -->
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->

                    <h1 class="sitename">NiceShop</h1>
                </a>

                <!-- Search -->
                <form class="search-form desktop-search-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <button class="btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Actions -->
                <div class="header-actions d-flex align-items-center justify-content-end">

                    <!-- Mobile Search Toggle -->
                    <button class="header-action-btn mobile-search-toggle d-xl-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false"
                            aria-controls="mobileSearch">
                        <i class="bi bi-search"></i>
                    </button>

                    <!-- Account -->
                    <div class="dropdown account-dropdown">
                        <button class="header-action-btn" data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <h6>Welcome to <span class="sitename">FashionStore</span></h6>
                                <p class="mb-0">Access account &amp; manage orders</p>
                            </div>
                            <div class="dropdown-body">
                                <a class="dropdown-item d-flex align-items-center" href="account.html">
                                    <i class="bi bi-person-circle me-2"></i>
                                    <span>My Profile</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="account.html">
                                    <i class="bi bi-bag-check me-2"></i>
                                    <span>My Orders</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="account.html">
                                    <i class="bi bi-heart me-2"></i>
                                    <span>My Wishlist</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="account.html">
                                    <i class="bi bi-gear me-2"></i>
                                    <span>Settings</span>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="register.html" class="btn btn-primary w-100 mb-2">Sign In</a>
                                <a href="login.html" class="btn btn-outline-primary w-100">Register</a>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <a href="account.html" class="header-action-btn d-none d-md-block">
                        <i class="bi bi-heart"></i>
                        <span class="badge">0</span>
                    </a>

                    <!-- Cart -->
                    <a href="cart.html" class="header-action-btn">
                        <i class="bi bi-cart3"></i>
                        <span class="badge">3</span>
                    </a>

                    <!-- Mobile Navigation Toggle -->
                    <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav row d-flex align-items-center">
        <div class="container-fluid container-xl position-relative col-10">
            <nav id="navmenu" class="navmenu align-items-center">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contact.html">Contact</a></li>

                </ul>

            </nav>

        </div>
        <div class="col-2 ">
            <a href="{{route('dashboard')}}" class="btn btn-outline-light">
                login
            </a>
        </div>


    </div>

    <!-- Mobile Search Form -->
    <div class="collapse" id="mobileSearch">
        <div class="container">
            <form class="search-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</header>
