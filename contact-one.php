<?php
/**
 * Template Name: Contact One
 *
 * @package WordPress
 * @subpackage Hola
 * @since Hola 1.0
 */

global $hola_options;
get_header();
get_template_part( 'template-parts/breadcrumbs' );
?>
    <!-- map-section-start -->
    <section class="google-map pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- map-section-end -->
    <!-- contact-page-start -->
    <section class="contact-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title text-center">
                        <h2>GET IN TOUCH!</h2>
                    </div>
                </div>
            </div>
            <div class="contact-from">
				<?php echo do_shortcode( $hola_options['contact-form'] ); ?>
            </div>
        </div>
    </section>
    <!-- contact-page-end -->

    <!-- google map api -->

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $hola_options['contact-key']; ?>"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(<?php echo $hola_options['contact-latitude']; ?>, <?php echo $hola_options['contact-longitude']; ?>),
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#000000"}, {"lightness": 20}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 20}]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 21}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#000000"}, {"lightness": 17}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 18}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 16}]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 19}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#000000"}, {"lightness": 17}]
                }]
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: '<?php echo get_template_directory_uri(); ?>/img/map.png',
                map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php
get_footer();
