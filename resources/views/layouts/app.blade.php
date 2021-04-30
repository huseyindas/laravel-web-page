<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title") | {{$infos[0]->head1}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <link rel = "icon" href ="/img/logo/{{$favicon[0]->favicon ?? " "}}" type = "image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Şuan <strong>eski sürüm</strong> tarayıcı kullanıyorsunuz. Lütfen <a href="http://browsehappy.com/">tarayıcınızı güncelleyiniz.</a>Bu daha iyi bir gezinti deneyimi için şart.</p>
<![endif]-->

<!-- header start -->
<header>
    <div class="header-top-area black-bg hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    @foreach($infos as $info)
                    <ul class="top-right">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>{{$info->mail1}}</span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>{{$info->phone1}}</span>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <div class="col-md-6 col-sm-6 hidden-xs">
                    @foreach($socials as $social)
                    <div class="header-icon floatright">
                        <a href="https://www.facebook.com/{{$social->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.twitter.com/{{$social->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/{{$social->instagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/{{$social->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/{{$social->youtube}}"><i class="fa fa-youtube"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-start -->
    <div class="main-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2">
                    <div class="logo" style="margin-top: 17px">
                        <a href="/"><img src="/img/logo/{{$logo[0]->logo}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-10">
                    <div class="main-menu floatright">
                        <nav>
                            <ul>
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">ANASAYFA</a></li>
                                <li class="{{ Request::is('abaout') ? 'active' : '' }}"><a href="{{route("abaout")}}">HAKKIMIZDA</a></li>
                                <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{route("services")}}">SERVİSLERİMİZ</a></li>
                                <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="{{route("projects")}}">PROJELERİMİZ</a></li>
                                <li class="{{ Request::is('products') ? 'active' : '' }}"><a href="{{route("products")}}">ÜRÜNLERİMİZ</a></li>
                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route("contact")}}">İLETİŞİM</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->
</header>
<!-- header end -->
@yield("content")
<!-- footer start -->
<footer>
    <div class="footer-area black-bg ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">

                    <div class="footer-widget md-30">
                        <div class="footer-img">
                            <a href="#"><img src="/img/logo/{{$flogo[0]->flogo}}" alt="" /></a>
                        </div>
                        <div class="footer-address">
                            <p>{{$sliders[0]->label5}}</p>
                        </div>
                        @foreach($infos as $info)
                        <div class="address">
                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> </strong>{{$info->country}}</p></li>
                                <li><p><strong><i class="fa fa-envelope"></i></strong>{{$info->mail1}}</p></li>
                                <li> <p><strong><i class="fa fa-phone"></i></strong>{{$info->phone1}}</p></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="widget mb-30">
                        <div class="widget-title">

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 hidden-sm">
                    <div class="widget mb-30">
                        <div class="widget-title">

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="widget ">
                        <div class="widget-title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="social-icons text-center">
                <label>Bizi takip edin:</label>
                @foreach($socials as $social)
                        <a href="https://www.facebook.com/{{$social->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.twitter.com/{{$social->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/{{$social->instagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/{{$social->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/{{$social->youtube}}"><i class="fa fa-youtube"></i></a>
                @endforeach
            </div>
            <div class="copyright text-center">
                <p>TÜm hakları saklıdır - 2021 © | </p>
                <a href="#">huseyindas</a>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!-- all js here -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>
</html>
