@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Collections</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Collection</li>
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
                                <h5 class="card-title">Create Collection</h5>
                            </div>
                            <div class="col-2">
                                <a href="{{route('collections.index')}}" class="btn btn-primary float-end">
                                    back
                                </a>
                            </div>
                        </div>

                        <!-- Horizontal Form -->
                        {{ html()->form('POST', route('collections.store'))->attribute('enctype', 'multipart/form-data')->open() }}

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                {{ html()->label('Title', 'title')->class('form-label') }}
                                {{ html()->text('title')->class('form-control')->id('title') }}
                            </div>



                            <div class="col-md-6 mb-3">
                                {{ html()->label('Description', 'description')->class('form-label') }}
                                {{ html()->textarea('description')->class('form-control')->id('description')->rows(3) }}
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label class="control-label">Image</label>

                                <div class="card image-upload-card text-center" id="imageUploadCard" style="cursor:pointer;">
                                    <div class="card-body">

                                        <img id="previewImage"
                                             src="{{ asset('backend/images/image-placeholder.png') }}"
                                             class="img-fluid mb-2"
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
