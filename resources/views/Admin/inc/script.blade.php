<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- Modernizr (browser feature detection library) -->
<script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>
<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="{{ asset('js/helpers/gmaps.min.js') }}"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="{{ asset('js/pages/index2.js') }}"></script>
<script>$(function () {
        Index2.init();
    });</script>
