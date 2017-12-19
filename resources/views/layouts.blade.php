<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Armadio Website</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/offcanvas.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="../../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="../../../assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="../../../assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="../../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../../assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../../../assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../../assets/css/unify-core.css">
    <link rel="stylesheet" href="../../../assets/css/unify-components.css">
    <link rel="stylesheet" href="../../../assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../../assets/css/custom.css">
</head>

<body>
<main>
    <!-- Header -->
    @include('_partials.header')
    <!-- End Header -->

    @yield('content')

    <!-- Footer -->
    @include('_partials.footer')
    <!-- End Footer -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                    <div class="d-lg-flex">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
                        <ul class="u-list-inline">
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Terms of Use</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">License</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
</main>

<!-- JS Global Compulsory -->
<script src="../../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../../assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="../../../assets/vendor/popper.min.js"></script>
<script src="../../../assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="../../../assets/vendor/bootstrap/offcanvas.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="../../../assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="../../../assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="../../../assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
<script src="../../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="../../../assets/js/hs.core.js"></script>

<script src="../../../assets/js/components/hs.header.js"></script>
<script src="../../../assets/js/helpers/hs.hamburgers.js"></script>

<script src="../../../assets/js/components/hs.dropdown.js"></script>
<script src="../../../assets/js/components/hs.scrollbar.js"></script>
<script src="../../../assets/js/components/hs.popup.js"></script>
<script src="../../../assets/js/components/hs.carousel.js"></script>

<script src="../../../assets/js/components/hs.go-to.js"></script>

<!-- JS Custom -->
<script src="../../../assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#we-provide').slick('setOption', 'responsive', [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }], true);

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function(){
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

        // initialization of masonry
        $('.masonry-grid').imagesLoaded().then(function () {
            $('.masonry-grid').masonry({
                columnWidth: '.masonry-grid-sizer',
                itemSelector: '.masonry-grid-item',
                percentPosition: true
            });
        });

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
    });
</script>
</body>
</html>