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
  <?php include 'scripts/entertainment_banner.php';?>

  <div id="main_body">

    <div class="container">
        <div class="entertainment">
            <h1>Games and Rides</h1>
        </div>
        <!-- end entertainment div -->
    </div>
    <!-- end container div -->
    
    <span class="entertainment_span"><img src="images/family2.jpg" alt="Family 2"></span>
    <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
    <span class="entertainment_span"><img src="images/family5.jpg" alt="Family 5"></span>
    <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
    <span class="entertainment_span"><img src="images/family6.jpg" alt="Family 6"></span>
    <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->

    <div class="container">
        <div class="entertainment">
            <h1>Animals and Fun</h1>
        </div>
        <!-- end entertainment div -->
    </div>
    <!-- end container div -->
      
    <span class="entertainment_span"><img src="images/family1.jpg" alt="Family 1"></span>
    <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
    <span class="entertainment_span"><img src="images/family3.jpg" alt="Family 3"></span>
    <!-- Image citation: Andrew Halpner, Flikr, https://www.flickr.com/photos/106103661@N02/sets/72157657274645113/with/22015033122/-->
    
    
  </body>
</html>
