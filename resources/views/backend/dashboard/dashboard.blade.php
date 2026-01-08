@extends('backend.layout.app')
@section('main')

@if(auth()->user()->user_type == 0)
    @include('backend.dashboard.superadmin-dashboard')
@elseif(auth()->user()->user_type == 1)
    @include('backend.dashboard.admin-dashboard')

@endif

@endsection
