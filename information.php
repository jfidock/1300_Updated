<!DOCTYPE html>
<!-- 
* INFO/CS 1300
* Fall 2016
* Group 4
* Final Project
 -->

<html>
  <head>
    <meta charset="utf-8">
    <title>Apple Harvest Festival</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/site.css"> -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/MediaQuery.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  </head>
  <body>  
  <!-- call php file to read csv and update html with information -->
  <?php include 'scripts/information_banner.php';?>

  <div id="main_body">

    <div class="container">
        <div class="information">

          <div id="map_info">
            <p><span class="event_span"><img src="images/map.jpg" alt="Map of Apple Fest"></span></p>
          <!-- Image from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
          </div>

        </div>
        <!-- end information div -->
    </div>
    <!-- end container div -->

      </div>
      <!-- end main_body div -->
    
  </body>
</html>
