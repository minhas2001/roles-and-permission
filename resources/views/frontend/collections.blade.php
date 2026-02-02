
<!-- Promo Cards Section -->
<section id="promo-cards" class="promo-cards section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            <div class="col-lg-6">
                @forelse($collections as $collection)
                <div class="category-featured" data-aos="fade-right" data-aos-delay="200">
                    <div class="category-image" style="width: 40vh; height: 70vh; border-radius: 20px " >
                        <img src="{{ asset($collection->image) }}" alt="Women's Collection" class=" object-cover " style="height: 100%; width: 100% ;border-radius: 20px">
                    </div>
                    <div class="category-content">
                        <span class="category-tag">Trending Collections</span>
                        <h2>{{ $collection->title }}</h2>
                        <p>{{ $collection->description }}.</p>
                        <a href="#" class="btn-shop">Explore Collection <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @empty
                <div class="category-featured" data-aos="fade-right" data-aos-delay="200">
                    <div class="category-image">
                        <img src="{{asset('frontend/assets/img/product/product-f-2.webp')}}" alt="Women's Collection" class="img-fluid">
                    </div>
                    <div class="category-content">
                        <span class="category-tag">Trending Collections</span>
                        <h2>New Summer Collection</h2>
                        <p>Discover our latest arrivals designed for the modern lifestyle. Elegant, comfortable, and
                            sustainable fashion for every occasion.</p>
                        <a href="#" class="btn-shop">Explore Collection <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @endforelse
            </div>

            <div class="col-lg-6">


                <div class="row gy-4">

                    <div class="col-xl-6">
                        <div class="category-card cat-men" data-aos="fade-up" data-aos-delay="300">
                            <div class="category-image">
                                <img src="{{asset('frontend/assets/img/product/product-m-5.webp')}}" alt="Men's Fashion"
                                     class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Men's Wear</h4>
                                <p>242 products</p>
                                <a href="#" class="card-link">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-kids" data-aos="fade-up" data-aos-delay="400">
                            <div class="category-image">
                                <img src="{{asset('frontend/assets/img/product/product-8.webp')}}" alt="Kid's Fashion" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Kid's Fashion</h4>
                                <p>185 products</p>
                                <a href="#" class="card-link">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-cosmetics" data-aos="fade-up" data-aos-delay="500">
                            <div class="category-image">
                                <img src="{{asset('frontend/assets/img/product/product-3.webp')}}" alt="Cosmetics" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Beauty Products</h4>
                                <p>127 products</p>
                                <a href="#" class="card-link">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-accessories" data-aos="fade-up" data-aos-delay="600">
                            <div class="category-image">
                                <img src="{{asset('frontend/assets/img/product/product-12.webp')}}" alt="Accessories" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Accessories</h4>
                                <p>308 products</p>
                                <a href="#" class="card-link">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section><!-- /Promo Cards Section -->
