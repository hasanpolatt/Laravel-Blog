@extends('frontend.app')

@section('icerik')
    <body>


        <div role="main" class="main">

            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="#">Anasayfa</a></li>
                                <li class="active">İletişim</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>İletişim</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div id="googlemaps" class="google-map"></div>

            <div class="container">

                <div class="row">
                    <div class="col-md-6">

                        <div class="alert alert-success hidden" id="contactSuccess">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="alert alert-danger hidden" id="contactError">
                            <strong>Error!</strong> There was an error sending your message.
                        </div>

                        <h2 class="short"><strong>Bize</strong> Ulaşın</h2>
                        <form id="contactForm" action="php/contact-form.php" method="POST">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label>Adınız ve Soyadınız *</label>
                                        <input type="text" value="" data-msg-required="Adınızı ve soyadınızı girin." maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-posta adresiniz *</label>
                                        <input type="email" value="" data-msg-required="E-posta adresinizi girin." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Konu</label>
                                        <input type="text" value="" data-msg-required="Konu başlığı yazın." maxlength="100" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Mesaj *</label>
                                        <textarea maxlength="5000" data-msg-required="Mesajınızı girin." rows="10" class="form-control" name="message" id="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Gönder" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="col-md-6">



                        <hr />

                        <h4>  <strong>Adres Bilgileri</strong></h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> {{$ayarlar->ayar_adres}} </li>
                            <li><i class="fa fa-phone"></i> <strong>Telefon:</strong> {{$ayarlar->ayar_tel}} </li>
                            <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="">{{$ayarlar->ayar_mail}}</a></li>
                        </ul>

                        <hr />

                            <h4>Sosyal Medya</h4>
                            <div class="social-icons">
                                <ul class="social-icons">
                                    <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                                    <li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
                                    <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>

                                </ul>

                            </div>



                    </div>

                </div>

            </div>

        </div>


    @endsection
@section('css')
    @endsection
@section('js')

            <script>

                /*
                Map Settings

                    Find the Latitude and Longitude of your address:
                        - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                        - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

                */

                // Map Markers
                var mapMarkers = [{
                    address: "New York, NY 10017",
                    html: "<strong>New York Office</strong><br>New York, NY 10017",
                    icon: {
                        image: "img/pin.png",
                        iconsize: [26, 46],
                        iconanchor: [12, 46]
                    },
                    popup: true
                }];

                // Map Initial Location
                var initLatitude = 40.75198;
                var initLongitude = -73.96978;

                // Map Extended Settings
                var mapSettings = {
                    controls: {
                        draggable: true,
                        panControl: true,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: true,
                        overviewMapControl: true
                    },
                    scrollwheel: false,
                    markers: mapMarkers,
                    latitude: initLatitude,
                    longitude: initLongitude,
                    zoom: 16
                };

                var map = $("#googlemaps").gMap(mapSettings);

                // Map Center At
                var mapCenterAt = function(options, e) {
                    e.preventDefault();
                    $("#googlemaps").gMap("centerAt", options);
                }

            </script>

    @endsection
