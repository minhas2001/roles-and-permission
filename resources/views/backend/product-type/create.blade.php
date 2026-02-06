@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Products Type</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Product type</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h5 class="card-title">Create Product type</h5>
                            </div>
                            <div class="col-2">
                                <a href="{{route('product-type.index')}}" class="btn btn-primary float-end">
                                    back
                                </a>
                            </div>
                        </div>

                        <!-- Horizontal Form -->
                        {{ html()->form('POST', route('product-type.store'))->attribute('enctype', 'multipart/form-data')->open() }}

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                {{ html()->label('Name', 'name')->class('form-label') }}
                                {{ html()->text('name')->class('form-control')->id('name') }}
                            </div>

                            <div class="col-md-12 mb-3">
                                {{ html()->label('Code', 'code')->class('form-label') }}
                                {{ html()->text('code')->class('form-control')->id('code') }}
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
