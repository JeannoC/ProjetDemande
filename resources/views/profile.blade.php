<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/loopple/loopple.css')}}">
    <link rel="stylesheet" href="{{asset('../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start" id="sidenav-main">
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:">
                            <i class="fa fa-desktop text-primary"></i>
                            <span class="nav-link-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-folder text-danger"></i>
                            <span class="nav-link-text">Mes demandes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom bg-warning" id="navbarTop">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have<strong class="text-primary">13</strong> notifications.</h6>
                                </div>

                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-user"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-tools"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="far fa-calendar"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-phone"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid pt-3">
            <div class="row removable">
                <div class="col-lg-4">
                    <div class="card card-profile">
                        <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="h3">
                                    Jessica Jones<span class="font-weight-light"></span>
                                </h5>
                                <h5 class="font-weight-300">
                                    Bucharest, Romania
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                            <h5 class="h3 mb-0">Total orders</h5>
                        </div>
                        ---------------
                    </div>
                </div>
            </div>
            <section class="ftco-section bg-light">
                <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Price &amp; Plans</span>
                <h2>Affordable Packages</h2>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block"> Attestion</span>
                <span class="price"><sup>GNF</sup> <span class="number">500000</span> <sub>/mos</sub></span>
                <ul class="pricing-text mb-5">
                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                </ul>
                <a href="{{route('connexion')}}" class="btn btn-primary d-block px-2 py-3">Commencer</a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block"> Carte</span>
                <span class="price"><sup>GNF</sup> <span class="number">790000</span> <sub>/mos</sub></span>
                <ul class="pricing-text mb-5">
                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                </ul>
                <a href="{{route('connexion')}}" class="btn btn-primary d-block px-2 py-3">Commencer</a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Laisser-Passer</span>
                <span class="price"><sup>GNF</sup> <span class="number">1000000</span> <sub>/mos</sub></span>
                <ul class="pricing-text mb-5">
                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                </ul>
                <a href="{{route('connexion')}}" class="btn btn-primary d-block px-2 py-3">Commencer</a>
                </div>
                </div>
                </div>

                </div>
                </div>
                </section>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0 px-4">

        </footer>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"790af8561a365d23","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>




    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js"></script>
</body>
</html>

