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
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  </head>
  <body>  
  <!-- call php file to read csv and update html with information -->
  <?php include 'scripts/banner_and_nav.php';?>

  <div id="main_body">

    <div class="container">
      <div class="about">

        <h1 class="dates">September 30, 2016 - October 2, 2016</h1>

        <h1>Apple Harvest History</h1>
        <p>The 2016 Apple Harvest Festival hosts plenty of apples, local produce, fresh baked goods, family entertainment at every turn, games, rides, prizes and live performances on two stages. Apple Harvest Festival is a great introduction to the rich farm and artist community of Ithaca.  First time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun.</p>
        <p>Over 100 vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples. Wineries and cideries have regional beverages available for tasting and purchase.  Kids can visit with the goats and learn how fiber is made with Laughing Goat Fiber Farm.  Looking for quality goods, visit 60 different handcrafting artisans along Cayuga Street at the fall craft show which includes jewelry, ceramics, home decor, body care, specialty gifts, unique sculpture, clothing and so much more.</p>
        <!-- Information taken from the 34th Annual Harvest Festival page 
        http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
     
      </div>
      <!-- end about div -->
      </div>
      <!-- end container div -->


      <div id="home_images">
        <p><span class="picspan"><img src="images/applefest1.jpg" alt="Apple Fest"></span></p>
        <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
        <p><span class="picspan"><img src="images/applefest2.jpg" alt="Cider Stall"></span></p>
        <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
      </div>
      <!-- end "home_images" -->

      </div>
      <!-- end main_body div -->

  </body>
</html>
