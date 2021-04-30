@extends("layouts.app")

@section("title", "Anasayfa")

@section("content")

    <!-- slider-area-start -->
    <div class="slider-area">
        @foreach($sliders as $slider)
        <div class="single-slider ptb-150 bg-opacity" style="background-image:url(img/slider/{{$slider->image}})">
            <div class="container">
                <div class="slider-text text-center">
                    <h1 class="cd-headline loading-bar">
                        <span>{{$slider->label1}}</span>
                        <span class="cd-words-wrapper">
								<b class="is-visible">{{$slider->label2}}</b>
								<b>{{$slider->label3}}</b>
								<b>{{$slider->label4}}</b>
							</span>
                    </h1>
                    <p>{{$slider->label5}}</p>
                    <a class="active" href="/{{$slider->buttonLink}}">{{$slider->buttonText}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->
    <!-- What-wedo-area-start -->
    <div class="what-we-do-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    @foreach($abaouts as $abaout)
                    <div class="section-title text-center">
                        <h2>{{$abaout->head_home}}</h2>
                        <p>{{$abaout->desc_home}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @foreach($serviceshead as $servicehead)
                <div class="col-md-3 col-sm-6">
                    <div class="single-What-wedo mb-30">
                        <div class="What-wedo-text text-center">
                            <div class="icon-box">
                                <i class="{{$servicehead->icon}}" style="opacity: 0.85; font-size: 45px"></i>
                            </div>
                            <h3>{{$servicehead->name}}</h3>
                            <p> {{$servicehead->desc}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- What-wedo-area-end -->
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

    <!-- testimonial-area-start -->
    <div class="testimonial-area ptb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-title text-center">
                        <h2>MÜŞTERİ YORUMLARI</h2>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-active owl-carousel">
                        @foreach($comments as $comment)
                        <div class="testimonial-wrapper">
                            <div class="testimonial-img text-center">
                                <img src="img/testimonial/{{$comment->photo}}" alt="" />
                            </div>
                            <div class="testimonial-info text-center">
                                <p>{{$comment->comment}}</p>
                                <span>{{$comment->name}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <!-- service-area-start -->
    <div class="service-area pt-80 pb-30">

        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    @foreach($servicesdescs as $servicesdesc)
                    <div class="section-title text-center">
                        <h2>{{$servicesdesc->heading}}</h2>
                        <p>{{$servicesdesc->desc}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
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
    <!-- video-area-start -->
    @foreach($videobars as $videobar)
    <div class="video-area ptb-100 bg-opacity-2" style="background: rgba(0, 0, 0, 0) url('img/slider/{{$videobar->background}}') repeat scroll 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-video text-center">
                        <a class="video-popup" href="{{$videobar->link}}">
								<span class="play-icon-md">
									<i class="fa fa-play"></i>
								</span>
                        </a>
                        <div class="video-text">
                            <p>{{$videobar->desc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- video-area-end -->
    <!-- our-brand-area-start -->
    <div class="our-brand-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    @foreach($referancehead as $ref)
                    <div class="section-title text-center">
                        <h2>{{$ref->heading}}</h2>
                        <p>{{$ref->desc}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="brand-active owl-carousel">
                    @foreach($referances as $referance)
                    <div class="col-md-12">
                        <div class="single-brand">
                            <div class="brand-img">
                                <img src="img/ref/{{$referance->logo}}" alt="{{$referance->name}}" />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area-end -->

@endsection
