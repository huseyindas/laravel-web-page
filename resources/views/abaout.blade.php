@extends("layouts.app")

@section("title", "Hakkımızda")
@section("content")

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area bg-color ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title text-center">
                        <h1>Hakkımızda</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>Hakkımızda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- about-area-start -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach($abaouts as $abaout)
                <div class="col-md-4 col-sm-4 ">
                    <div class="single-about mb-30">
                        <div class="about-text">
                            <h4>{{$abaout->head1}}</h4>
                            <p>{{$abaout->mini_desc1}}</p>
                            <a class="more">Devamı <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 col-sm-4 ">
                        <div class="single-about mb-30">
                            <div class="about-text">
                                <h4>{{$abaout->head2}}</h4>
                                <p>{{$abaout->mini_desc2}}</p>
                                <a class="more">Devamı <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4 col-sm-4 ">
                    @foreach($skills as $skill)
                    <div class="single-about mb-30">
                        <div class="our-skill">
                            <h6 class="progress-title">{{$skill->name}} <span class="pull-right"><span>{{$skill->value}}</span>%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->value}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->value}}%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- about-area-end -->
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
