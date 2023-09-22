@extends('layouts.main')
@section('content')

<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(/assets/img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    @include('sections.services')
    <!-- Service End -->


    <!-- Booking Start -->
    @include('sections.booking')
    <!-- Booking End -->


    <!-- Testimonial Start -->
    @include('sections.comments')
    <!-- Testimonial End -->

@endsection    