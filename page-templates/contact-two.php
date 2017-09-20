<?php
/**
 * Template Name: Contact Two
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
get_header();
get_template_part( 'template-parts/breadcrumbs' );
?>

    <!-- contact-page-start -->
    <section class="contact-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title text-center">
                        <h2><?php echo esc_html__('GET IN TOUCH!', 'hola'); ?></h2>
                    </div><!-- .contact-title .text-center -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
            <div class="contact-from">
			    <?php echo do_shortcode( $hola_options['contact-form'] ); ?>
            </div><!-- .contact-from -->
        </div><!-- .container -->
    </section><!-- .contact-area .ptb-120 -->
    <!-- contact-page-end -->

    <!-- map-section-start -->
    <section class="google-map pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="googleMap"></div>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .google-map .pb-120 -->
    <!-- map-section-end -->

    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc_attr( $hola_options['contact-key'] ); ?>"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(<?php echo esc_html( $hola_options['contact-latitude'] ); ?>, <?php echo esc_html( $hola_options['contact-longitude'] ); ?>),
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{"color": "#dedede"}, {"lightness": 21}]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
                }]
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: '<?php echo get_template_directory_uri(); ?>/assets/img/white-map.png',
                map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php
get_footer();
