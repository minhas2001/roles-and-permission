@extends('frontend.layout.app')

@section('main')
    @include('frontend.hero')
    @include('frontend.promo-cards')
    @include('frontend.best-seller')
    @include('frontend.product-cards')
    @include('frontend.flash-sale')
    @include('frontend.feature-product')

@endsection
