<html>

<head>
  <title>Split Expenses</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="widht=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<<<<<<< HEAD
  <style>
    #map {
      height: 180px;
    }
  </style>
=======
>>>>>>> aaf5cb84fdc29e99372b8aa7305c783e2a6334c8
</head>

<body>
  <script src="scripts.js"></script>


  <div class="header">
    <img src="img/45851.jpg" style="float:left" width="160" height="" />
    <div display="inline-block">
      <h1>Split Expenses</h1>
    </div>
  </div>
  <div id="navbar">
    <ul>
      <li><a href="index.php" class="button2">Home</a></li>
      <li><a href="/~akushwaha/statics/members.php" class="button2">Members</a></li>
      <li><a onclick="activity()" class="button2">Activity</a></li>
      <li><a href="/~akushwaha/extend_php/search.php" class="button2">Search</a></li>
      <li><a href="imprint.html" class="button2">Imprint</a></li>
<<<<<<< HEAD
=======
      <li><a href="map.php" class="button2">Map</a></li>
>>>>>>> aaf5cb84fdc29e99372b8aa7305c783e2a6334c8
    </ul>
  </div>



  <div class="row">
    <div class="column left" style="background-color:#aaa;">
      <div id="menu">
        <ul>
          <li class="support1"><a onclick="addExpenses()" class="button1">Add Expenses</a></li>
          <li class="support1"><a onclick="settle()" class="button1">Settle</a></li>
          <li class="support1"><a onclick="checkBalance()" class="button1">Check Balance</a></li>
        </ul>
      </div>
    </div>
    <div class="column right" style="background-color: #bbb;">
      <div class="container">
        <?php

        $json = file_get_contents('https://geolocation-db.com/json');
        $data = json_decode($json);

<<<<<<< HEAD
        print $data->country_code . '<br>';
        print $data->country_name . '<br>';
        print $data->state . '<br>';
        print $data->city . '<br>';
        print $data->postal . '<br>';
        print $data->latitude . '<br>';
        print $data->longitude . '<br>';
        echo 'Public IP address: ' . $data->IPv4 . '<br>';
=======
        print '<br>' .  $data->country_code . ' ';
        print $data->country_name . ', ';
        print $data->state . ', ';
        print $data->city . ' ';
        print $data->postal . '<br>';
        print $data->latitude . ' ';
        print $data->longitude . '<br><br><br>';
        //echo 'Public IP address: ' . $data->IPv4 . '<br>';
>>>>>>> aaf5cb84fdc29e99372b8aa7305c783e2a6334c8

        //PRIVATE IP ADDRESS
        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from remote address
        else {
          $ip_address = $_SERVER['REMOTE_ADDR'];
        }
<<<<<<< HEAD
        echo 'Private IP address: ' . $ip_address;

        ?>
        <div id="map"></div>
        <script>
          var map = L.map('map').setView([<?php echo $data->latitude; ?>, <?php echo $data->longitude; ?>], 13);

          var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
          }).addTo(map);

          var marker = L.marker([<?php echo $data->latitude; ?>, <?php echo $data->longitude; ?>]).addTo(map)
            .bindPopup(<?php echo 'Your Public IP address: ' . $data->IPv4;
                        echo 'Your Private IP address: ' . $ip_address; ?>)
=======
        //echo 'Private IP address: ' . $ip_address;

        ?>
        <div id="map" style="width: 100%; height: 400px;"></div>
        <script>
            var map = L.map('map').setView([<?php echo $data->latitude; ?>, <?php echo $data->longitude; ?>], 13);

            var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

            var marker = L.marker([<?php echo $data->latitude; ?>, <?php echo $data->longitude; ?>]).addTo(map)
            .bindPopup('<?php echo 'Your Public IP address: ' . $data->IPv4 . '<br>'; echo 'Your Private IP address: ' . $ip_address; ?>')
>>>>>>> aaf5cb84fdc29e99372b8aa7305c783e2a6334c8
            .openPopup();
        </script>
      </div>
    </div>
  </div>
<<<<<<< HEAD
</body>

</html>
=======
  <div class = "footer">
    <button class="button3" onclick="alert('This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.')"> Disclaimer </button>
  </div>
</body>

</html>
>>>>>>> aaf5cb84fdc29e99372b8aa7305c783e2a6334c8
