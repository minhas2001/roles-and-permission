@extends('frontend.layout.app')

@section('main')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-section {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 20px;
        }

        .product-gallery {
            flex: 1 1 45%;
            min-width: 300px;
        }

        .main-image {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            height: 450px;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .thumbnails {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .thumbnails img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border 0.3s;
        }

        .thumbnails img.active,
        .thumbnails img:hover {
            border-color: #000;
        }

        .product-info {
            flex: 1 1 45%;
            min-width: 300px;
        }

        .brand {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #555;
        }

        .title {
            font-size: 2.2rem;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .rating {
            color: #f39c12;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .price {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 15px 0;
        }

        .old-price {
            font-size: 1.5rem;
            color: #999;
            text-decoration: line-through;
            margin-left: 12px;
        }

        .save {
            color: #e74c3c;
            font-weight: 600;
            margin-left: 12px;
        }

        .colors {
            margin: 20px 0;
        }

        .colors h4 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .color-swatch {
            display: inline-block;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            margin-right: 12px;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px #ddd;
            transition: all 0.2s;
        }

        .color-swatch.active,
        .color-swatch:hover {
            box-shadow: 0 0 0 3px #000;
        }

        .quantity {
            margin: 25px 0;
        }

        .quantity label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .qty-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .qty-btn {
            width: 42px;
            height: 42px;
            background: #f0f0f0;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .qty-btn:hover {
            background: #e0e0e0;
        }

        .qty-input {
            width: 70px;
            text-align: center;
            font-size: 1.2rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 8px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 30px 0;
        }

        .btn {
            padding: 14px 28px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary {
            background: #000;
            color: white;
        }

        .btn-primary:hover {
            background: #222;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #000;
            color: #000;
        }

        .btn-outline:hover {
            background: #000;
            color: white;
        }

        .perks {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .perks ul {
            list-style: none;
            padding: 0;
        }

        .perks li {
            margin: 10px 0;
            font-size: 0.95rem;
            position: relative;
            padding-left: 24px;
        }

        .perks li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #27ae60;
        }

        .tab-buttons {
            display: flex;
            border-bottom: 2px solid #eee;
        }

        .tab-btn {
            padding: 12px 28px;
            background: none;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            position: relative;
            transition: color 0.2s;
        }

        .tab-btn:hover {
            color: #000;
        }

        .tab-btn.active {
            font-weight: bold;
            color: #000;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 3px;
            background: #000;
        }

        .tab-content {
            padding: 30px 0;
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        @media (max-width: 768px) {
            .product-section {
                flex-direction: column;
                gap: 30px;
            }

            .title {
                font-size: 1.9rem;
            }

            .price {
                font-size: 2rem;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>

    <div class="container">
        <section class="product-section">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="{{ asset($product->image ?? 'backend/assets/img/placeholder.jpg') }}"
                         alt="{{ $product->title ?? 'Product Image' }}">
                </div>

                <div class="thumbnails">
                    <!-- Main image always shown first -->
                    <img src="{{ asset($product->image ?? 'backend/assets/img/placeholder.jpg') }}"
                         alt="Main" class="active">

                    <!-- Additional images -->
                    @if(!empty($product->additional_images))
                        @php
                            $images = is_string($product->additional_images)
                                ? explode(',', $product->additional_images)
                                : (array) $product->additional_images;
                        @endphp

                        @foreach($images as $img)
                            @if(trim($img))
                                <img src="{{ asset(trim($img)) }}"
                                     alt="{{ $product->title }} - Image {{ $loop->iteration }}">
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="product-info">
                <div class="brand">{{ $product->brand ?? 'BRAND' }}</div>
                <h1 class="title">{{ $product->title ?? 'Product Title' }}</h1>

                <div class="rating">
                    ★★★★☆ ({{ $product->reviews_count ?? 'No reviews yet' }})
                </div>

                <!-- Price display - fixed and clean -->
                <div class="price">
                    Rs {{ number_format($product->sale_price ?? 0, 0) }}

                    @if(isset($product->original_price) && $product->original_price > $product->sale_price)
                        <span class="old-price">Rs {{ number_format($product->original_price, 0) }}</span>
                        <span class="save">
                            Save {{ round((($product->original_price - $product->sale_price) / $product->original_price) * 100) }}%
                        </span>
                    @endif
                </div>

                <!-- Colors -->
                @if(!empty($product->colors))
                    <div class="colors">
                        <h4>Available Colors:</h4>
                        @php
                            $colors = is_string($product->colors)
                                ? json_decode($product->colors, true)
                                : (array) $product->colors;
                        @endphp
                        @foreach($colors as $color)
                            <div class="color-swatch" style="background: {{ $color }}"></div>
                        @endforeach
                    </div>
                @endif

                <div class="quantity">
                    <label>Quantity:</label>
                    <div class="qty-controls">
                        <button class="qty-btn" onclick="this.nextElementSibling.stepDown()">-</button>
                        <input type="number" value="1" class="qty-input" min="1" max="{{ $product->stock ?? 999 }}">
                        <button class="qty-btn" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>

                <div class="actions">
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-outline">Buy Now</button>
                </div>

                <div class="perks">
                    <ul>
                        <li>Free delivery on orders above Rs 5000</li>
                        <li>7-day easy returns</li>
                        <li>100% original products</li>
                        <li>24/7 customer support</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="tabs">
            <div class="tab-buttons">
                <button class="tab-btn active">Description</button>
                <button class="tab-btn">Specifications</button>
                <button class="tab-btn">Reviews ({{ $product->reviews_count ?? 0 }})</button>
            </div>

            <div class="tab-content active">
                <h2>Product Description</h2>
                {!! nl2br(e($product->description ?? 'No description available.')) !!}
            </div>

            <div class="tab-content">
                <h2>Specifications</h2>
                {!! nl2br(e($product->specifications ?? 'No specifications available.')) !!}
            </div>

            <div class="tab-content">
                <h2>Customer Reviews</h2>
                <p>{{ $product->reviews_count ?? 0 }} reviews • Average rating 4.8/5</p>
                <!-- Add real reviews loop when implemented -->
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Thumbnail switcher
            const thumbs = document.querySelectorAll('.thumbnails img');
            const mainImg = document.querySelector('.main-image img');

            thumbs.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    thumbs.forEach(t => t.classList.remove('active'));
                    thumb.classList.add('active');
                    mainImg.src = thumb.src;
                });
            });

            // Tab switching
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    tabBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    tabContents.forEach(c => c.classList.remove('active'));
                    tabContents[index].classList.add('active');
                });
            });
        });
    </script>
@endsection
