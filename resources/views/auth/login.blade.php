
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <title>Bootstrap Dashboard by Bootstrapious.com</title>
                        <meta name="description" content="">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <meta name="robots" content="all,follow">
                        <!-- Bootstrap CSS-->
                        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
                        <!-- Font Awesome CSS-->
                        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
                        <!-- Fontastic Custom icon font-->
                        <link rel="stylesheet" href="css/fontastic.css">
                        <!-- Google fonts - Roboto -->
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
                        <!-- jQuery Circle-->
                        <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
                        <!-- Custom Scrollbar-->
                        <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
                        <!-- theme stylesheet-->
                        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
                        <!-- Custom stylesheet - for your changes-->
                        <link rel="stylesheet" href="css/custom.css">
                        <!-- Favicon-->
                        <link rel="shortcut icon" href="img/favicon.ico">
                        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
                    </head>
                    <body>
                    <div class="page login-page">
                        <div class="container">
                            <div class="form-outer text-center d-flex align-items-center">
                                <div class="form-inner" style="width:100%">
                                    <div class="logo text-uppercase"><span>X2</span><strong class="text-primary">SMS</strong></div>
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
                                    <form id="login-form" method="POST" action="{{ route('login') }}" id="login-form">
                                        @csrf
                                        <div class="form-group-material">
                                            {{--<input id="login-username" type="text" name="loginUsername" required class="input-material">--}}
                                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} input-material" name="email" value="{{ old('email') }}" required autofocus >
                                            <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group-material">
                                            {{--<input id="login-password" type="password" name="loginPassword" required class="input-material">--}}
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-material" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                            <label for="password" class="label-material">{{ __('Password') }}</label>
                                        </div>
                                        {{--<a id="login" href="index.html" class="btn btn-primary">Login</a>--}}
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </form>


                                    {{--<a href="#" class="">Forgot Password?</a>--}}
                                    <a class="forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>

                                </div>
                                <div class="copyrights text-center">
                                    {{--<p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>--}}
                                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- JavaScript files-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/popper.js/umd/popper.min.js"> </script>
                    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
                    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
                    <script src="vendor/chart.js/Chart.min.js"></script>
                    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
                    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
                    <!-- Main File-->
                    <script src="js/front.js"></script>
                    </body>
                    </html>
