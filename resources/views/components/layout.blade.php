<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    <x-side-bar />
    <!-- Start Header -->
    <x-header/>
    <!--Start search form-->
    <x-search-form/>
    <!-- Start Main content -->
    <main>       
        <x-top-banner/>
            <!-- End feature -->
            {{-- FEATURED POSTS: RANDOMLY DISPLAY SELECTED FEATURED POSTS DAILY  --}}
            <x-featured-posts/>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        {{-- CATEGORIES: DISPLAY ONE POST FROM EACH CATEGORY --}}
                        <x-categories/>
                        {{-- LATEST POSTS: DISPLAY THE MOST RECENTLY ADDED POSTS --}}
                        <x-latest-posts/>
                        {{-- END OF LATEST POSTS --}}
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            {{-- MOST POPULAR: DISPLAY THE POSTS WITH THE HIGHEST NUMBER OF VIEWS --}}
                            <x-popular-posts/>
                        {{-- END OF POPULAR POSTS --}}
                            {{-- LATEST COMMENTS: DISPLAY THE MOST RECENT COMMENTS MADE ACROSS VARIOUS POSTS --}}
                            <x-latest-comment/>
                        {{-- END OF LATEST COMMENTS --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
    <!--site-bottom-->
    {{-- POPULAR CATEGORIES: LATEST THREE POSTS FROM 3 MOST POPULAR RANDOM CATEGORIES --}}
        <x-popular-categories/>
    <!--end site-bottom-->
<x-footer/>