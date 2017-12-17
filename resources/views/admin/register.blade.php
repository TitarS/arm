<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Signup</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../assets/css/unify-core.css">
    <link rel="stylesheet" href="../../assets/css/unify-components.css">
    <link rel="stylesheet" href="../../assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body>
<main>
    <!-- Signup -->
    <section class="container g-py-50 g-pos-rel g-z-index-1">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-6">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Signup</h2>
                    </header>
                    @include('admin.errors')
                    <!-- Form -->
                    <form class="g-py-15" method="post" action="{{ route('admin.register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-finance-067 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                                           type="text" placeholder="John" name="name" value="{{old('name')}}">
                                </div>
                            </div>

                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                  <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                        <i class="icon-communication-062 u-line-icon-pro"></i>
                      </span>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                                       type="email" placeholder="johndoe@gmail.com" name="email" value="{{old('email')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-media-094 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                                           type="password" placeholder="********" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between mb-5">
                            <div class="col-4 align-self-center text-right">
                                <button class="btn btn-md u-btn-primary g-py-13 g-px-25" type="submit">Signup</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->

                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Вже є аккаунт? <a class="g-font-weight-600" href="/adminka-arm-page/login">Login</a>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signup -->

    <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="../../assets/vendor/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>

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
</main>
</body>
</html>