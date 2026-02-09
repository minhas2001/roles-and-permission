@extends('frontend.layout.app')
@section('main')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            color: #222;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        h1 {
            font-size: 1.9rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 24px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            text-decoration: none;
            color: inherit;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .image-wrapper {
            position: relative;
            height: 180px; /* Keeps cards compact */
            overflow: hidden;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 999px;
            backdrop-filter: blur(4px);
        }

        .heart {
            position: absolute;
            top: 10px;
            right: 12px;
            font-size: 1.4rem;
            color: white;
            cursor: pointer;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .info {
            padding: 12px 14px;
            text-align: left;
        }

        .title {
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.3;
            height: 2.6em;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .price-row {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }

        .price {
            font-weight: 700;
            color: #000;
        }

        .old-price {
            color: #888;
            text-decoration: line-through;
            font-weight: 400;
            margin-left: 8px;
            font-size: 0.9rem;
        }

        @media (min-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(7, 1fr);
            }
        }

        @media (max-width: 992px) {
            .products-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .image-wrapper {
                height: 160px;
            }
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

    <div class="container">
        <h1>Popular Products</h1>
        <div class="subtitle">Our best-selling premium items →</div>

        <div class="products-grid">

            @forelse($products as $product)
                <a href="{{route('product.details',$product->id)}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="{{asset($product->image)}}"
                            alt="Brown Leather Tote">
                        <div class="badge">Popular Choice</div>

                    </div>
                    <div class="info">
                        <div class="title">{{$product->title}}</div>
                        <div class="price-row">
                            <div class="price">Rs {{$product->sale_price}}</div>
                            <div><span class="old-price">Rs {{$product->original_price}}</span></div>
                        </div>
                    </div>
                </a>
            @empty
                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Handcrafted Tote">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Vintage Handcrafted Brown Tote</div>
                        <div class="price-row">
                            <div class="price">$169.00</div>
                        </div>
                    </div>
                </a>

                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Premium Tote">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Buck Brown Premium Edition Tote</div>
                        <div class="price-row">
                            <div class="price">$199.99</div>
                        </div>
                    </div>
                </a>

                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Saddle Tote">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Meridian Leather Tote - Saddle Brown</div>
                        <div class="price-row">
                            <div class="price">$245.00</div>
                        </div>
                    </div>
                </a>

                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Classic Tote">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Handcrafted Everyday Tote Bag</div>
                        <div class="price-row">
                            <div class="price">$179.99 <span class="old-price">$199.00</span></div>
                        </div>
                    </div>
                </a>

                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shoulder Bag">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Vintage Genuine Leather Shoulder Tote</div>
                        <div class="price-row">
                            <div class="price">$159.00</div>
                        </div>
                    </div>
                </a>
                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shoulder Bag">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Vintage Genuine Leather Shoulder Tote</div>
                        <div class="price-row">
                            <div class="price">$159.00</div>
                        </div>
                    </div>
                </a>
                <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shoulder Bag">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Vintage Genuine Leather Shoulder Tote</div>
                        <div class="price-row">
                            <div class="price">$159.00</div>
                        </div>
                    </div>
                </a>       <a href="{{route('product.details')}}" class="product-card">
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shoulder Bag">
                        <div class="badge">Popular Choice</div>
                        <div class="heart">♡</div>
                    </div>
                    <div class="info">
                        <div class="title">Vintage Genuine Leather Shoulder Tote</div>
                        <div class="price-row">
                            <div class="price">$159.00</div>
                        </div>
                    </div>
                    @endforelse
                    <!-- Add more cards by copying the block above -->
        </div>
    </div>

@endsection
