<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Google Map in Laravel - shouts.dev</title>

    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h2>Google Map in Laravel - shouts.dev</h2>
    <div id="map"></div>
</div>

<script type="text/javascript">
    function initMap() {
        const myLatLng = { lat: 23.81663586829542, lng: 90.36618138671278 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Mirpur!",
        });
    }

    window.initMap = initMap;
</script>

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

</body>
</html>
