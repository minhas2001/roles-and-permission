@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h5 class="card-title">Create Product</h5>
                            </div>
                            <div class="col-2">
                                <a href="{{route('products.index')}}" class="btn btn-primary float-end">
                                    back
                                </a>
                            </div>
                        </div>

                        <!-- Horizontal Form -->
                        {{ html()->form('POST', route('products.store'))->attribute('enctype', 'multipart/form-data')->open() }}

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                {{ html()->label('Title', 'title')->class('form-label') }}
                                {{ html()->text('title')->class('form-control')->id('title') }}
                            </div>



                            <hr class="my-3">
                            <h5 class="card-title mb-3">Product Product Section</h5>

                            <div class="col-md-6 mb-3">
                                {{ html()->label('Image', 'image')->class('form-label') }}
                                {{ html()->file('image')->class('form-control')->id('image') }}
                            </div>


                            <div class="col-md-6 mb-3">
                                {{ html()->label('Original Price', 'original_price')->class('form-label') }}
                                {{ html()->text('original_price')->class('form-control')->id('original_price') }}
                            </div>

                            <div class="col-md-6 mb-3">
                                {{ html()->label('Sale Price', 'sale_price')->class('form-label') }}
                                {{ html()->text('sale_price')->class('form-control')->id('sale_price') }}
                            </div>
                        </div>

                        <div class="text-end mt-3">
                            {{ html()->button('Reset', 'reset')->class('btn btn-secondary me-2') }}
                            {{ html()->submit('Submit')->class('btn btn-primary') }}
                        </div>

                        {{ html()->form()->close() }}
                        <!-- End Horizontal Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
