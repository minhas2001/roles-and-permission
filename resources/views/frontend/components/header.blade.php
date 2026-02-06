

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
                                <a href="{{route('dashboard')}}" class="btn btn-primary w-100 mb-2">Sign In</a>

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
        <div class="container-fluid container-xl position-relative ">
            <nav id="navmenu" class="navmenu align-items-center">
                <ul>
                    <li><a href="{{route('website')}}" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contact.html">Contact</a></li>

                </ul>

            </nav>

        </div>
{{--        <div class="col-2 ">--}}
{{--            <a href="{{route('dashboard')}}" class="btn btn-outline-light">--}}
{{--                login--}}
{{--            </a>--}}
{{--        </div>--}}


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
<style>
    .header.sticky-top {
        position: relative;
    }

    .main-header {
        transition: transform 0.3s ease-in-out;
        transform: translateY(0);
        will-change: transform;
    }

    .header-nav {
        position: relative;
        transition: all 0.3s ease-in-out;
        background-color: #fff;
        z-index: 999;
    }

    /* When scrolled, nav becomes fixed */
    .header-nav.is-fixed {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Placeholder to prevent content jump */
    .nav-placeholder {
        display: none;
        height: 0;
    }

    .nav-placeholder.active {
        display: block;
    }

    /* Smooth transitions */
    .main-header,
    .header-nav {
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
    }

    /* Hide main header when scrolled */
    .main-header.is-hidden {
        transform: translateY(-100%);
    }
</style>

<script>
    (function() {
        'use strict';

        const mainHeader = document.querySelector('.main-header');
        const headerNav = document.querySelector('.header-nav');

        if (!mainHeader || !headerNav) return;

        // Create placeholder element
        const placeholder = document.createElement('div');
        placeholder.className = 'nav-placeholder';
        headerNav.parentNode.insertBefore(placeholder, headerNav);

        let lastScrollTop = 0;
        let ticking = false;
        const scrollThreshold = 100; // When to start hiding main header
        let navOffset = 0;

        // Calculate initial offset
        function calculateOffset() {
            navOffset = headerNav.offsetTop;
            placeholder.style.height = headerNav.offsetHeight + 'px';
        }

        calculateOffset();

        function updateHeader(scrollTop) {
            // Scrolling down past threshold
            if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                mainHeader.classList.add('is-hidden');

                // Fix nav at top when main header is hidden
                if (scrollTop >= navOffset - scrollThreshold) {
                    headerNav.classList.add('is-fixed');
                    placeholder.classList.add('active');
                }
            }
            // Scrolling up
            else if (scrollTop < lastScrollTop) {
                mainHeader.classList.remove('is-hidden');

                // Remove fixed nav when scrolling back up
                if (scrollTop < navOffset) {
                    headerNav.classList.remove('is-fixed');
                    placeholder.classList.remove('active');
                }
            }

            // At the very top
            if (scrollTop <= 10) {
                mainHeader.classList.remove('is-hidden');
                headerNav.classList.remove('is-fixed');
                placeholder.classList.remove('active');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        }

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    updateHeader(scrollTop);
                    ticking = false;
                });
                ticking = true;
            }
        }

        // Event listeners
        window.addEventListener('scroll', onScroll, { passive: true });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                calculateOffset();
            }, 250);
        }, { passive: true });

    })();
</script>
