@extends('backend.layout.app')
@section('main')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('collections.index') }}">Collections</a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Edit Collection</li>
                        </ul>
                    </div>

                    <div class="col-sm-8">
                        <a href="{{ route('collections.index') }}" class="btn btn-primary float-end">
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

                            {!! html()->modelForm($collection, 'PUT', route('collections.update', $collection->id))->class('row g-3 mt-2 mb-2')->attribute('enctype', 'multipart/form-data')->open() !!}

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Edit Collection</h4>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Title', 'title')->class('login-danger') !!}
                                        {!! Html::text('title', $collection->title)->class('form-control')->required() !!}
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>


                                <div class="col-6 col-md-6 mb-3">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Description', 'description')->class('form-label') !!}
                                        {!! Html::textarea('description', $collection->description)->class('form-control')->rows(3)->required() !!}
                                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        {!! Html::label('Image', 'image')->class('form-label') !!}
                                        {!! Html::file('image')->class('form-control')->id('image') !!}
                                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror

                                        @if($collection->image)
                                            <div class="mt-2">
                                                <img src="{{ asset($collection->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 150px;">
                                                <p class="text-muted small mt-1">Current image: {{ $collection->image }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="doctor-submit text-end">
                                        {!! Html::button('Update Collection', 'submit')->class('btn btn-primary submit-form me-2') !!}
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
