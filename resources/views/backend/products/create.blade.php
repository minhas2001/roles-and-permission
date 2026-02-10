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

                            <div class="col-lg-4 mb-3">
                                <label class="control-label">Image</label>

                                <div class="card image-upload-card text-center" id="imageUploadCard" style="cursor:pointer;">
                                    <div class="card-body">

                                        <img id="previewImage"
                                             src="{{ asset('backend/images/image-placeholder.png') }}"
                                             class="img-fluid p-2"
                                             style="max-height: 100px; object-fit: contain; border-radius: 20px">

                                        <p class="text-muted mb-0">Click to upload image</p>

                                        {{ html()->file('image')
                                            ->class('d-none')
                                            ->id('imageInput')
                                            ->accept('image/*') }}

                                    </div>
                                </div>

                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-3">
                                {{ html()->label('Original Price (Rs)', 'original_price')->class('form-label') }}

                                {{ html()->text('original_price')->class('form-control')->id('original_price') }}
                            </div>

                            <div class="col-md-6 mb-3">
                                {{ html()->label('Sale Price (Rs)', 'sale_price')->class('form-label') }}
                                <div class="input-group">
                                    {{ html()->number('sale_price')
                                        ->class('form-control')
                                        ->id('sale_price')
                                        ->placeholder('Leave empty if same as original price')
                                      }}
                                </div>

                            </div>
                            <div class="col-md-6 mb-3">
                                {{ html()->label('Product type', 'product_type_id' )->class('form-label') }}
                                {{ html()->select('product_type_id', $productType )->class('form-control form-select')->id('product_type_id', $productType ) }}
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
