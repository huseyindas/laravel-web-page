@extends("layouts.app")

@section("title", "İletişim")
@section("content")

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area bg-color ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title text-center">
                        <h1>İLETİŞİM</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>İletişim</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    @foreach($contacts as $contact)
    <!-- contact-middle-area-start -->
    <div class="contact-middle-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <div class="middle-text">
                            <h4>{{$contact->head1}}</h4>
                            <p>{{$contact->desc1}}</p>
                            <a href="#">{{$contact->mail1}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <div class="middle-text">
                            <h4>{{$contact->head2}}</h4>
                            <p>{{$contact->desc2}}</p>
                            <a href="#">{{$contact->mail2}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <div class="middle-text">
                            <h4>{{$contact->head3}}</h4>
                            <p>{{$contact->desc3}}</p>
                            <a href="#">{{$contact->mail3}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-middle-area-end -->
    <!-- contact-middle-area-start -->
    <div class="contact-middle-area pt-10 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <div class="middle-text">
                            <h4><i class="fa fa-map"></i> | Adres</h4>
                            <p>{{$contact->address}} {{$contact->country}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <h4><i class="fa fa-phone"></i> | Telefon</h4>
                        <p> {{$contact->phone1}} <b>|</b> {{$contact->phone2}}</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-contact-middle mb-30">
                        <h4><i class="fa fa-inbox"></i> | Email</h4>
                        <p> {{$contact->mail1}} <b>|</b> {{$contact->mail2}}</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-middle-area-end -->
    @endforeach
    <!-- map -->
    <div id="map"></div>
    <!-- map-end -->
    <div class="contact-bottom-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($contactForms as $contactForm)
                <div class="col-md-6 col-md-offset-3 col-sm-12">
                    <div class="contact-bottom-text text-center">
                        <h2>{{$contactForm->heading}}</h2>
                        <p>{{$contactForm->desc}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <form id="contact-form" method="POST" action="{{ url('/send')}}" enctype="multipart/form-data">
                            @csrf
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    <i class="fa fa-check"></i>
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text"  placeholder="Adınız" name="name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email"  placeholder="Email Adresiniz" name="email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Konu" name="subject">
                                <textarea id="messageText" placeholder="Mesajınız" rows="6" cols="30" name="messageText"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn" type="Submit">MAİLİ GÖNDER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{$maps[0]->api ?? " "}}"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.822349, 90.365420), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
@endsection
