<section id="call-to-action" class="call-to-action section">

    <div class="container " data-aos="fade-up" data-aos-delay="100">
        <div class="row featured-products-row" data-aos="fade-up" data-aos-delay="500">
            <h2 class="text-center">
                Featured Products
            </h2>
            @forelse($features as $product)
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="product-showcase ">
                        <a class="product-items" href="{{route('product.details',$product->id)}}">

                            <div class="product-image">
                                <img src="{{asset( $product->image)}}" alt="Featured Product"
                                     class="img-fluid">
                                <div class="discount-badge">-45%</div>
                            </div>
                            <div class="product-details">
                                <h6>{{$product->title}}</h6>
                                <div class="price-section">
                                    @if($product->sale_price == null)
                                        <span class="sale-price">Rs {{$product->original_price}}</span>
                                    @else
                                        <span class="sale-price">Rs {{$product->sale_price}}</span>
                                        <span class="original-price">Rs {{$product->original_price}}</span>
                                    @endif
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-count">(324)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- End Product Showcase -->
            @empty
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="product-showcase ">
                        <a class="product-items" href="{{route('product-details.static')}}">

                            <div class="product-image">
                                <img src="{{asset('frontend/assets/img/product/product-5.webp')}}"
                                     alt="Featured Product"
                                     class="img-fluid">
                                <div class="discount-badge">-45%</div>
                            </div>
                            <div class="product-details">
                                <h6>Premium Wireless Headphones</h6>
                                <div class="price-section">
                                    <span class="original-price">$129</span>
                                    <span class="sale-price">$71</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-count">(324)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- End Product Showcase -->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                    <div class="product-showcase">
                        <a class="product-items" href="{{route('product-details.static')}}">

                            <div class="product-image">
                                <img src="{{asset('frontend/assets/img/product/product-7.webp')}}"
                                     alt="Featured Product"
                                     class="img-fluid">
                                <div class="discount-badge">-60%</div>
                            </div>
                            <div class="product-details">
                                <h6>Smart Fitness Tracker</h6>
                                <div class="price-section">
                                    <span class="original-price">$89</span>
                                    <span class="sale-price">$36</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <span class="rating-count">(198)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- End Product Showcase -->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="product-showcase">
                        <a class="product-items" href="{{route('product-details.static')}}">

                            <div class="product-image">
                                <img src="{{asset('frontend/assets/img/product/product-11.webp')}}"
                                     alt="Featured Product"
                                     class="img-fluid">
                                <div class="discount-badge">-35%</div>
                            </div>
                            <div class="product-details">
                                <h6>Luxury Travel Backpack</h6>
                                <div class="price-section">
                                    <span class="original-price">$159</span>
                                    <span class="sale-price">$103</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-count">(267)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- End Product Showcase -->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="250">
                    <div class="product-showcase">
                        <a class="product-items" href="{{route('product-details.static')}}">

                            <div class="product-image">
                                <img src="{{asset('frontend/assets/img/product/product-1.webp')}}"
                                     alt="Featured Product"
                                     class="img-fluid">
                                <div class="discount-badge">-55%</div>
                            </div>
                            <div class="product-details">
                                <h6>Artisan Coffee Mug Set</h6>
                                <div class="price-section">
                                    <span class="original-price">$75</span>
                                    <span class="sale-price">$34</span>
                                </div>
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="rating-count">(142)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- End Product Showcase -->

            @endforelse
        </div>
    </div>
</section>
