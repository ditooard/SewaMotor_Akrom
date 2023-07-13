<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Register - AKROM</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <i href="#">
                <img src="images/akrom.jpg" width="220px" height="80px">
            </i>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="/">HOME</a>
                    </span>
                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>BUAT AKUN</h1>
                    <p>Buat Akun Untuk Menjadi Member Baru <br>Sudah memiliki akun? <a class="white" href="login">Log
                            In Now</a></p>

                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error has-danger' : '' }}">
                                <input type="text" class="form-control-input" name="name" id="name"
                                    value="{{ old('name') }}" required autofocus autocomplete="name">
                                <label class="label-control" for="name" :value="__('Name')">Nama</label>

                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('level') ? 'has-error has-danger' : '' }}">
                                <input type="hidden" class="form-control-input" name="level" id="level"
                                    value="customer" required autofocus autocomplete="level">

                                @if ($errors->has('level'))
                                    <span class="help-block">{{ $errors->first('level') }}</span>
                                @endif
                            </div>

                            <!-- Email Address -->
                            <div class="form-group {{ $errors->has('email') ? 'has-error has-danger' : '' }}">
                                <input type="email" class="form-control-input" name="email" id="email"
                                    required="" value="{{ old('email') }}" required>
                                <label class="label-control" for="lemail">Email</label>

                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="form-group {{ $errors->has('password') ? 'has-error has-danger' : '' }}">
                                <input type="password" class="form-control-input" name="password" id="password"
                                    required="" value="{{ old('password') }}" required>
                                <label class="label-control" for="lpassword">Password</label>

                                @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Confirm Password -->
                            <div
                                class="form-group {{ $errors->has('password_confirmation') ? 'has-error has-danger' : '' }}">
                                <input type="password" class="form-control-input" name="password_confirmation"
                                    id="password_confirmation" required autocomplete="new-password">
                                <label class="label-control" for="lpassword">Confirm Password</label>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button a href="inputKtp" class="form-control-submit-button">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
