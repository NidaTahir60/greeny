@extends('agency.layouts.master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <!-- Mirrored from mironmahmud.com/greeny/assets/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 09:54:43 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="template" content="greeny">
        <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
        <meta name="keywords"
            content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
        <title>Greeny - Login</title>
        <link rel="icon" href="{{ asset('agency/assets/images/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/fonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/fonts/icofont/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/fonts/fontawesome/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/vendor/venobox/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/vendor/slickslider/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/vendor/niceselect/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/vendor/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('agency/assets/css/user-auth.css') }}">
    </head>

    <body>
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                        <div class="user-form-logo">
                            <a href="index.html">
                                <img src="{{ asset('agency/assets/images/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>welcome!</h2>
                                <p>Use your credentials to access</p>
                            </div>
                            <div class="user-form-group">
                                <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with
                                            facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with
                                            twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a>
                                    </li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with
                                            instagram</a></li>
                                </ul>
                                <div class="user-form-divider">
                                    <p>or</p>
                                </div>
                                <form class="user-form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check">
                                        <label class="form-check-label" for="check">Remember Me</label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">login</button>
                                        <p>Forgot your password?<a href="{{ route('reset-password') }}">reset here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Don't have any account?<a href="{{ route('register') }}">register here</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('agency/assets/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/niceselect/nice-select.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/slickslider/slick.min.js') }}"></script>
        <script src="{{ asset('agency/assets/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('agency/assets/js/nice-select.js') }}"></script>
        <script src="{{ asset('agency/assets/js/countdown.js') }}"></script>
        <script src="{{ asset('agency/assets/js/accordion.js') }}"></script>
        <script src="{{ asset('agency/assets/js/venobox.js') }}"></script>
        <script src="{{ asset('agency/assets/js/slick.js') }}"></script>
        <script src="{{ asset('agency/assets/js/main.js') }}"></script>
    </body>
    <!-- Mirrored from mironmahmud.com/greeny/assets/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 09:54:44 GMT -->

    </html>
@endsection
