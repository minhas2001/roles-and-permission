@extends('backend.layout.app')
@section('main')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('heroes.index') }}">Product</a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Edit Product type</li>
                        </ul>
                    </div>

                    <div class="col-sm-8">
                        <a href="{{ route('product-type.index') }}" class="btn btn-primary float-end">
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

                            {!! html()->modelForm($productType, 'PUT', route('product-type.update', $productType->id))->class('row g-3 mt-2 mb-2')->attribute('enctype', 'multipart/form-data')->open() !!}

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Edit Product type</h4>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Name', 'name')->class('login-danger') !!}
                                        {!! Html::text('name', $productType->name)->class('form-control')->required() !!}
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label(' Code', 'code')->class('login-danger') !!}
                                        {!! Html::text('code', $productType->code)->class('form-control')->required() !!}
                                        @error('code') <span class="text-danger">{{ $message }}</span> @enderror
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
