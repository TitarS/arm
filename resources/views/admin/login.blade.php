<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Login</title>

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

    <!-- Login -->
    <section class="container g-py-50 g-pos-rel g-z-index-1">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-6">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                @include('admin.errors')

                    <!-- Form -->
                    <form class="g-py-15" method="post" action="{{ route('admin.login') }}">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <div class="input-group g-brd-primary--focus">
                  <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                                <input class="form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15"
                                       type="email" placeholder="johndoe@gmail.com" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="g-mb-35">
                            <div class="input-group g-brd-primary--focus mb-4">
                  <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                                <input class="form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15"
                                       type="password" placeholder="Password" name="password">
                            </div>

                            <div class="row justify-content-between">
                                <div class="col align-self-center">
                                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                        <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                            <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                        </div>
                                        Keep signed in
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button class="btn btn-md btn-block u-btn-primary g-py-13" type="submit">Login</button>
                        </div>
                    </form>
                    <!-- End Form -->

                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Нема аккаунта? <a class="g-font-weight-600" href="/adminka-arm-page/register">Зареєструватися</a>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->


    <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="../../assets/vendor/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../../assets/js/components/hs.tabs.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>
    <script src="../../assets/js/helpers/hs.focus-state.js"></script>

    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // Form Focus State
            $.HSCore.helpers.HSFocusState.init();
        });
    </script>
</main>
</body>
</html>