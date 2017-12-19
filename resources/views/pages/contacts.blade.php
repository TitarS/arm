@extends('layouts')

@section('content')
    <main>

        <!-- Google Map -->
        <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency" data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
             data-pin="true" data-pin-icon="../../assets/img/icons/pin/green.png">
        </div>
        <!-- End Google Map -->

        <section class="container g-pt-100 g-pb-40">
            <div class="row justify-content-between">
                <div class="col-md-7 g-mb-60">
                    <!-- Contact Form -->
                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group g-mb-20">
                                <label class="g-color-gray-dark-v2 g-font-size-13">Name:</label>
                                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text">
                            </div>

                            <div class="col-md-6 form-group g-mb-20">
                                <label class="g-color-gray-dark-v2 g-font-size-13">Email:</label>
                                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email">
                            </div>

                            <div class="col-md-6 form-group g-mb-20">
                                <label class="g-color-gray-dark-v2 g-font-size-13">Subject:</label>
                                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text">
                            </div>

                            <div class="col-md-6 form-group g-mb-20">
                                <label class="g-color-gray-dark-v2 g-font-size-13">Phone:</label>
                                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="tel">
                            </div>

                            <div class="col-md-12 form-group g-mb-40">
                                <label class="g-color-gray-dark-v2 g-font-size-13">Message:</label>
                                <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="7"></textarea>
                            </div>
                        </div>

                        <button class="btn u-btn-primary rounded-3 g-py-12 g-px-20" type="submit" role="button">Send Enquiry</button>
                    </form>
                    <!-- End Contact Form -->
                </div>

                <div class="col-md-4">
                    <h1 class="g-font-weight-300 mb-5">Pixeel Ltd.</h1>

                    <div class="mb-4">
                        <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Address:</h2>
                        <p class="g-color-gray-dark-v4 g-font-size-16">Unit 25 Suite 3, 925 Prospect PI
                            <br>New York Avenue
                            <br>United States</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Email us:</h2>
                        <p class="g-color-gray-dark-v4">Email: <a class="g-color-gray-dark-v2" href="#">htmlstream@support.com</a>
                        </p>
                    </div>

                    <div class="mb-3">
                        <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Call us:</h2>
                        <p class="g-color-gray-dark-v4">Call: <span class="g-color-gray-dark-v2">+32 333 444 555</span>
                        </p>
                    </div>

                    <div class="g-mb-30">
                        <p class="g-color-gray-dark-v5 g-font-weight-600 g-font-size-16"><em>Monday - Friday: 9:00 AM to 6:00 PM</em>
                        </p>
                    </div>

                    <!-- Figure Social Icons -->
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="#">
                                <i class="g-font-size-default fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="#">
                                <i class="g-font-size-default fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="#">
                                <i class="g-font-size-default fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="#">
                                <i class="g-font-size-default fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Figure Social Icons -->
                </div>
            </div>
        </section>


        <!-- End Copyright Footer -->
        <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
    </main>


    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        // initialization of google map
        function initMap() {
            $.HSCore.components.HSGMap.init('.js-g-map');
        }

        $(document).on('ready', function () {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function () {
            setTimeout(function () {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&amp;callback=initMap" async defer></script>
    <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="../../assets/vendor/popper.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/components/hs.tabs.js"></script>
    <script src="../../assets/js/components/gmap/hs.map.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>

@endsection