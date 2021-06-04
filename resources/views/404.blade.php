@extends('layout')

@section('title', '404')

@section('content_1')

    <!-- Start Form Adding Post  -->

        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
<!-- Start Error Area  -->
<div class="error-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">

                    <h1 class="title">Page not found!</h1>
                    <p>Sorry, but the page you were looking for could not be found.</p>
                    <div class="back-totop-button cerchio d-inline-block">
                        <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{route('main')}}">
                                    <span class="hover-flip-item">
                                        <span data-text="Back to Homepage">Back to Homepage</span>
                                    </span>
                        </a>
                    </div>
                    <img src="/assets/images/others/404.jpeg" alt="Error Images">
                </div>
            </div>
        </div>

<!-- End Error Area  -->
<!-- Start Back To Top  -->
<a id="backto-top"></a>
<!-- End Back To Top  -->
</div>
</div>
</div>

@endsection
