@extends('backend.layout.app')
@section('main')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('heroes.index') }}">Heroes</a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Edit Hero</li>
                        </ul>
                    </div>

                    <div class="col-sm-8">
                        <a href="{{ route('heroes.index') }}" class="btn btn-primary float-end">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">

                            {!! html()->modelForm($hero, 'PUT', route('heroes.update', $hero->id))->class('row g-3 mt-2 mb-2')->attribute('enctype', 'multipart/form-data')->open() !!}

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Edit Hero</h4>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Title', 'title')->class('login-danger') !!}
                                        {!! Html::text('title', $hero->title)->class('form-control')->required() !!}
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>


                                <div class="col-6 col-md-6 mb-3">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Description', 'description')->class('form-label') !!}
                                        {!! Html::textarea('description', $hero->description)->class('form-control')->rows(3)->required() !!}
                                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Hero Product Section</h4>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Image', 'image')->class('form-label') !!}
                                        {!! Html::file('image')->class('form-control')->id('image') !!}
                                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                        @if($hero->image)
                                            <div class="mt-2">
                                                <img src="{{ asset($hero->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 150px;">
                                                <p class="text-muted small mt-1">Current image: {{ $hero->image }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Image Title', 'image_title')->class('form-label') !!}
                                        {!! Html::textarea('image_title', $hero->image_title)->class('form-control')->rows(3) !!}
                                        @error('image_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Original Price', 'original_price')->class('login-danger') !!}
                                        {!! Html::text('original_price', $hero->original_price)->class('form-control')->required() !!}
                                        @error('original_price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Sale Price', 'sale_price')->class('login-danger') !!}
                                        {!! Html::text('sale_price', $hero->sale_price)->class('form-control')->required() !!}
                                        @error('sale_price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="doctor-submit text-end">
                                        {!! Html::button('Update Hero', 'submit')->class('btn btn-primary submit-form me-2') !!}
                                    </div>
                                </div>
                            </div>
                            {!! Html::form()->close() !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
