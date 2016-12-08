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
    <link rel="stylesheet" type="text/css" href="styles/mediaquery.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  </head>
  <body>  
  <!-- call php file to read csv and update html with information -->
  <?php include 'scripts/events_banner.php';?>

  <div id="main_body">

    <div class="container">
      <div class="events">

        <h1>Events</h1>
        <div id="map_info">
          <p><span class="event_span"><img src="images/map.jpg" alt="Map of Apple Fest"></span></p>
        <!-- Image Link: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust
        APA Citation: "Downtown Ithaca website, "Ithaca Events: 34th Annual Harvest Festival", 2016, www.downtownithaca.com, accessed December 2016. -->
        </div>
      
      </div>
      <!-- end events div -->
    </div>
    <!-- end container div -->

      </div>
      <!-- end main_body div -->

      
  </body>
</html>
