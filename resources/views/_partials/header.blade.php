<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
    <!-- Top Bar -->
    <div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black g-py-7">
        <div class="container">
            <div class="row flex-column flex-md-row align-items-center justify-content-md-end text-uppercase g-font-weight-600 g-color-white g-font-size-13">
                <!-- Language -->
                @include('_partials.language')
                <!-- End Language -->

                <div class="col-auto g-px-15">
                    <i class="fa fa-phone g-valign-middle g-mr-5"></i>
                    1 800 88 4411
                </div>

                <div class="col-auto g-px-15">
                    <ul class="list-inline mb-0 g-mx-minus-3">
                        <li class="list-inline-item g-valign-middle g-mx-3">
                            <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-valign-middle g-mx-3">
                            <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-valign-middle g-mx-3">
                            <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->
    <div class="u-header__section u-header__section--light g-bg-white-opacity-0_8 g-py-10" data-header-fix-moment-exclude="g-bg-white-opacity-0_8 g-py-10" data-header-fix-moment-classes="g-bg-white u-shadow-v18 g-py-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Logo -->
                <a href="/" class="navbar-brand">
                    <img src="../../../assets/img/logo/logo-1.png" alt="Image Description">
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                @include('_partials.navigation')
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
