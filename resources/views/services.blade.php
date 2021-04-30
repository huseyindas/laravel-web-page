@extends("layouts.app")

@section("title", "Servislerimiz")
@section("content")

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area bg-color ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title text-center">
                        <h1>SERVİSLERİMİZ</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>Servislerimiz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- service-area-start -->
    <div class="service-area pt-80 pb-30">

        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-4">
                        <div class="single-service text-center mb-70">
                            <div class="service-icon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <div class="service-text">
                                <h4>{{$service->name}}</h4>
                                <p> {{$service->desc}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- service-area-end -->
    <!-- counter-area-start -->
    <div class="counter-area fix">
        @foreach($counters as $counter)
            <div class="single-counter">
                <div class="counter-text">
                    <h3>
                        <span class="counter">{{$counter->num1}}</span>
                    </h3>
                    <h4>{{$counter->desc1}}</h4>
                </div>
            </div>
            <div class="single-counter">
                <div class="counter-text">
                    <h3>
                        <span class="counter">{{$counter->num2}}</span>
                    </h3>
                    <h4>{{$counter->desc2}}</h4>
                </div>
            </div>
            <div class="single-counter">
                <div class="counter-text">
                    <h3>
                        <span class="counter">{{$counter->num3}}</span>
                    </h3>
                    <h4>{{$counter->desc3}}</h4>
                </div>
            </div>
            <div class="single-counter">
                <div class="counter-text">
                    <h3>
                        <span class="counter">{{$counter->num4}}</span>
                    </h3>
                    <h4>{{$counter->desc4}}</h4>
                </div>
            </div>
        @endforeach
    </div>
    <!-- counter-area-end -->

@endsection
