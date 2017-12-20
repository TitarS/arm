@extends('layouts')
@section('content')
        <div class="container g-py-200 ">

            <div class="shortcode-html">
                <div class="row">
                    @foreach($subMenus as $menu)
                        <div class="col-md-6 col-lg-3 g-pt-20 g-mb-30">
                            <!-- Article -->
                            <article class="u-block-hover u-block-hover--uncroped text-center">
                                <!-- Article Image -->
                                <a class="d-block u-block-hover__additional--jump g-mb-10"
                                   href="{{ route('accessories.show', $menu->slug) }}">
                                    <img class="w-100" src="{{ $menu->image }}" alt="Image Description">
                                </a>
                                <!-- End Article Image -->

                                <!-- Article Info -->
                                <h3 class="h5">
                                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover"
                                       href="{{ route('accessories.show', $menu->slug) }}">{{ $menu->title }}</a>
                                </h3>
                                <!-- End Article Info -->
                            </article>
                            <!-- End Article -->
                        </div>
                    @endforeach
                </div>
                <!-- End Products Block -->
            </div>
        </div>
@endsection