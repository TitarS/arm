@extends('layouts')

@section('content')

{{--    <div class="shortcode-html">
        <div class="row">
            <div class="col-md-6 g-mb-30">
                <div class="g-flex-middle h-100 g-bg-black">
                    <div class="g-flex-middle-item">
                        <!-- Article -->
                        <article class="g-bg-cover g-bg-black-opacity-0_2--after">
                            <!-- Article Image -->
                            <img class="w-100" src="../../assets/img-temp/500x450/img1.jpg" alt="Image Description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="w-100 g-color-white-opacity-0_8 g-pos-abs g-left-0 g-bottom-0 g-z-index-1 g-pa-30">
                                <span class="d-block g-font-weight-700 g-font-size-20 g-color-primary">$19.50</span>
                                <h3 class="h3 g-font-weight-700 text-uppercase g-color-white">Steak + Potatoes</h3>
                                <p class="mb-0">Understanding who you are and what you want is our strategy for your health.</p>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 g-mb-30">
                <div class="g-flex-middle h-100 g-bg-black">
                    <div class="g-flex-middle-item">
                        <!-- Article -->
                        <article class="g-bg-cover g-bg-black-opacity-0_2--after">
                            <!-- Article Image -->
                            <img class="w-100" src="../../assets/img-temp/500x450/img4.jpg" alt="Image Description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="w-100 g-color-white-opacity-0_8 g-pos-abs g-left-0 g-bottom-0 g-z-index-1 g-pa-30">
                                <span class="d-block g-font-weight-700 g-font-size-20 g-color-primary">$9.50</span>
                                <h3 class="h3 g-font-weight-700 text-uppercase g-color-white">Steak with special sauce</h3>
                                <p class="mb-0">Understanding who you are and what you want is our strategy for your health.</p>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="container g-py-200">

        <div class="shortcode-html">


            @foreach($products as $product)
                <!-- Article -->
                    <article class="row mx-0">
                        <div class="col-md-6 g-bg-size-cover g-min-height-250" data-bg-img-src="{{ $product->image_main }}" style="background-image: url('{{ $product->image_main }}');"></div>

                        <div class="col-md-6 g-bg-secondary g-pa-40">
                            <!-- Article Title -->
                            <h3 class="h3 g-mb-20">
                                <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ route('product.show', $product->slug) }}">
                                    {{ $product->title }}
                                </a>
                            </h3>
                            <!-- End Article Title -->

                            <p class="g-mb-25">
                                {{ $product->description }}
                            </p>

                            <!-- Article Icons -->
                            <div class="g-overflow-hidden g-mb-15">
                                <ul class="list-inline g-brd-top g-brd-bottom g-brd-gray-light-v3 g-font-size-12 text-center g-mx-minus-25">
                                    <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                                        <i class="align-middle u-line-icon-pro g-color-gray-dark-v4 g-font-size-18 icon-hotel-restaurant-022 g-mr-5"></i>
                                        4
                                    </li>
                                    <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                                        <i class="align-middle u-line-icon-pro g-color-gray-dark-v4 g-font-size-18 icon-hotel-restaurant-158 g-mr-5"></i>
                                        2
                                    </li>
                                    <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                                        <i class="align-middle u-line-icon-pro g-color-gray-dark-v4 g-font-size-18 icon-real-estate-017 g-mr-5"></i>
                                        130 sqft
                                    </li>
                                </ul>
                            </div>
                            <!-- End Article Icons -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between">
                                <div class="align-self-center">
                                    <a class="btn btn-md u-btn-primary g-font-weight-600 g-font-size-default text-uppercase" href="{{ route('product.show', $product->slug) }}">Learn More</a>
                                </div>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                    <br>
            @endforeach
        </div>

        {{$products->links()}}
    </div>

@endsection