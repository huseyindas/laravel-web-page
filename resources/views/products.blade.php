@extends("layouts.app")

@section("title", "Ürünlerimiz")
@section("content")

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area bg-color ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title text-center">
                        <h1>ÜRÜNLERİMİZ</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">anasayfa</a></li>
                                <li>Ürünlerimiz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- project-area-start -->
    <div class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div id="Container">
                    @foreach($products as $product)
                        <div class="col-md-3 mix col-sm-4">
                            <div class="single-portfolio mb-30">
                                <div class="portfolio-img">
                                    <a href="#"><img src="img/products/{{$product->image}}" alt="{{$product->name}}" /></a>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-icon">
                                        <a class="image-link" href="img/products/{{$product->image}}"><i class="fa fa-plus"></i></a>
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- project-area-end -->

@endsection
