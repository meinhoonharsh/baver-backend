@extends('layouts.guest')


@section('styles')
    <style>
        /* Custom CSS for Page Here */
    </style>
@endsection


@section('scripts')
    <script>
        // Custom JS for Page Here
    </script>
@endsection

@section('content')
    <section id="apus-breadscrumb" class="apus-breadscrumb has-img"
        style="background-image:url('/assets/findus/wp-content/uploads/2020/01/bg-breadcrum.jpg')">
        {{-- <div class="apus-inner-bread">
            <div class="wrapper-breads">
                <div class="container">
                    <div class="breadscrumb-inner text-center">
                        <h2 class="bread-title">404</h2>
                        <ol class="breadcrumb">
                            <li><a href="../index.htm">Home</a> </li>
                            <li><span class="active">404</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <section class="page-404">
        <section id="main-container" class="container inner">
            <div class="row">
                <div id="main-content" class="main-page col-xs-12">
                    <section class="error-404 not-found text-center clearfix">
                        <div class="text-center">
                            <div class="top-404">
                                <img src="/assets/findus/wp-content/themes/findus/images/cs.png" style="max-width: 600px">
                            </div>
                            <div class="page-content">
                                <h1 class="title">This Site is Under Constriction</h1>

                                {{-- <div class="back-home">We are sorry, but something went wrong</div>

                                <a class="read-more" href="../index.htm">Back to Homepage<i
                                        class="text-theme fas fa-long-arrow-alt-right"></i> </a> --}}
                            </div><!-- .page-content -->
                        </div>
                    </section><!-- .error-404 -->
                </div><!-- .content-area -->
            </div>
        </section>
    </section>
@endsection
