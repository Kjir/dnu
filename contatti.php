<?php
require_once "menu.php";
require_once "settings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
		"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Contatti - Ducato Nuoto Urbino</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

<?php include "styles.php"; ?>
<?php include "js.php"; ?>
<script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(43.733763, 12.625493);
    var myOptions = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
    var infowindow = new google.maps.InfoWindow({
            content: "Piscina Comunale F.lli Cervi"
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title:"Piscina Comunale F.lli Cervi"
    });

    google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
    });
  }

</script>
	</head>
	<body onload="initialize()">
<?php include "header.php"; ?>
            <div id="body" class="central">
                <h1>Contatti</h1>
                <div id="map_canvas" style="width: 600px; height: 400px; float: left;"></div>
                <address>ASD Ducato Nuoto Urbino<br>
                Piazzale F.lii Cervi, 1<br>
                61029 Urbino (PU)<br>
                tel. 0722 320 834<br>
                fax. 0722 222 222<br>
                e-mail: <a href="mailto:ducatonuoto@gmail.com">ducatonuoto@gmail.com</a><br>
                Pagina Facebook: <a href="http://www.facebook.com/pages/Ducato-Nuoto-Urbino/146388187392">Ducato Nuoto Urbino</a>
                </address>
                <div style="clear: both;">
            </div>
<?php include "footer.php"; ?>
	</body>
</html>
