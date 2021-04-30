<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield("title") | Panel </title>

    <!-- Fontfaces CSS-->
    <link rel = "icon" href ="/img/logo/favicon.png" type = "image/x-icon">
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <script src="https://use.fontawesome.com/ba65800701.js"></script>
    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="assets/vendor/wow/animate.css"" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

    <style>
        a {
            text-decoration-line: none;
        }
    </style>

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop4">
        <div class="container">
            <div class="header4-wrap">
                <div class="header__logo">
                    <a href="{{route("dashboard.index")}}">
                        <img src="/img/logo/{{$logo[0]->logo}}" alt="logo" />
                    </a>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="img/profile/{{ Auth::user()->photo }}" alt="Admin" />
                            </div>
                            <div class="content">
                                <a class="name js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/profile/{{ Auth::user()->photo }}" alt="Admin" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route("dashboard-profile.index")}}">
                                            <i class="zmdi zmdi-account"></i>Hesabım</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <form id="form" action="{{route('logout')}}" method="POST">@csrf</form>
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('form').submit()"><i class="zmdi zmdi-power"></i>Çıkış Yap</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP -->

    <!-- WELCOME-->
    <section class="welcome2 p-t-40 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome2-inner m-t-10">
                        <div class="welcome2-greeting">
                            <h1 class="title-6">Merhaba
                                <span>{{ Auth::user()->name }}</span></h1>
                            <p>Web sitesinin içeriğini bu panelden istediğin gibi değiştirebilirsin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <!-- PAGE CONTENT-->
    <div class="page-container3">
        <section class="alert-wrap p-t-25 p-b-25">
            <div class="container">
                <!-- ALERT-->

                <!-- END ALERT-->
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <!-- MENU SIDEBAR-->
                        <aside class="menu-sidebar3 js-spe-sidebar">
                            <nav class="navbar-sidebar2 navbar-sidebar3">
                                <ul class="list-unstyled navbar__list" style="text-decoration-line: none ">
                                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                                        <a href="{{route("dashboard.index")}}">
                                            <i class="fas fa-home"></i>Anasayfa</a>
                                    </li>
                                    <li class="{{ Request::is('dashboard-logo') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-logo.index")}}"><i class="fas fa-image"></i> Logo Ayarları</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-social-media') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-social-media.index")}}"><i class="fas fa-link"></i> Sosyal Medya</a>
                                    </li>
                                    <li class="{{ Request::is('dashboard-slider') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-slider.index")}}">
                                            <i class="fas fa-images"></i>Slider</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-abaout') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-abaout.index")}}">
                                            <i class="fas fa-info-circle"></i>Hakkımızda</a>
                                    </li>
                                    <li class="{{ Request::is('dashboard-counter') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-counter.index")}}">
                                            <i class="fas fa-sort-numeric-desc"></i>Sayaç</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-comment') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-comment.index")}}">
                                            <i class="fas fa-comment"></i>Yorumlar</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-services') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-services.index")}}">
                                            <i class="fas fa-pie-chart"></i>Servisler</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-projects') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-projects.index")}}">
                                            <i class="fas fa-chart-area"></i>Projeler</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-products') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-products.index")}}">
                                            <i class="fas fa-boxes"></i>Ürünler</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-video-bar') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-video-bar.index")}}">
                                            <i class="fas fa-video"></i>Video Bar</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-referances') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-referances.index")}}">
                                            <i class="fas fa-pencil-square-o"></i>Referanslar</a>
                                    </li>
                                    <li  class="{{ Request::is('dashboard-contact') ? 'active' : '' }}">
                                        <a href="{{route("dashboard-contact.index")}}">
                                            <i class="fas fa-phone"></i>İletişim</a>
                                    </li>
                                    <li class="{{ Request::is('dashboard-profile') ? 'active' : '' }}" style="margin-bottom: 30px">
                                        <a href="{{route("dashboard-profile.index")}}">
                                            <i class="fas fa-user"></i>Hesabım</a>
                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <!-- END MENU SIDEBAR-->
                    </div>
                    <div class="col-xl-9">
                        <!-- PAGE CONTENT-->
                            @yield("content")
                        <!-- END PAGE CONTENT-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- END PAGE CONTENT  -->

</div>

<!-- Jquery JS-->
<script src="assets/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="assets/vendor/slick/slick.min.js">
</script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/animsition/animsition.min.js"></script>
<script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="assets/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
