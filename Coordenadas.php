<!DOCTYPE html>
<html lang="en">

<head> 
   <title>Geolocalización </title>
</head>
<body>
  <?php
$datos = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=181.64.66.28"));
?>
<pre>
  <?php
  $latitud = $datos["geoplugin_latitude"];
  $longitud = $datos["geoplugin_longitude"];

  echo "latitud: ".$latitud."<br>";
  echo "longitud: ".$longitud;
  ?>
</pre>

<div id="map" style="height: 400px; width: 100%"></div>
<script>

  function  InitMap() {
    var coordenadas = (lat:"", lng:"");
    var mapa =new google.maps.Map( document.getElementById('map'),{zoom: 4, center: coordenadas});
    var market = new google.maps.Marker({position: coordenadas, map, mapa});
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></sript>

</body>

</html>