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
  <?php include 'scripts/events_banner.php';?>

  <div id="main_body">

    <div class="container">
      <div class="events">

        <h1>Events and Vendors</h1>
        <div id="map_info">
          <p><span class="event_span"><img src="images/map.jpg" alt="Map of Apple Fest"></span></p>
        <!-- Image from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
        </div>
        <h1>Events Schedule</h1>
        <h2>Friday</h2>
        <h3>West State Street</h3>
        <table>
          <tr>
            <th>Time</th>
            <th>Artist</th>
          </tr>
          <tr>
            <th>12:30 and 4:45pm</th>
            <th><a href=https://www.facebook.com/Hilby-The-Skinny-German-Juggle-Boy-223349541036681/>Hilby The Skinny German Juggle Boy</a></th>
          </tr>
        </table>
        <h2>Saturday</h2>
        <h3>Bernie Milton Pavilion</h3>
        <table>
          <tr>
            <th>Time</th>
            <th>Artist</th>
          </tr>
          <tr>
            <td>10-10:45AM</td>
            <td>Punk Hands</td>
          </tr>
          <tr>
            <td>11-11:45AM</td>
            <td>Danza Romani</td>
          </tr>
          <tr>
            <td>12-12:45PM</td>
            <td>Vitamin L</td>
          </tr>
          <tr>
            <td>1:00-1:45PM</td>
            <td>Riley Owens</td>
          </tr>
          <tr>
            <td>1:45-2pm</td>
            <td>GIVEAWAYS</td>
          </tr>
          <tr>
            <td>2:00-2:45PM</td>
            <td>Sunny Weather</td>
          </tr>
          <tr>
            <td>3:00-3:45PM</td>
            <td>Eems</td>
          </tr>
          <tr>
            <td>5:00-6:00pm</td>
            <td>Wailin' Brass Band</td>
          </tr>
          <tr>
            <td>4:00-4:45PM</td>
            <td>Alter</td>
          </tr>
        </table>
        <h3>West State Street</h3>
        <table>
          <tr>
            <th>Time</th>
            <th>Artist</th>
          </tr>
          <tr>
            <td>12:00pm</td>
            <td>Zajal the Sugarplum Fairy </td>
          </tr>
          <tr>
            <td>1:00pm</td>
            <td>The Next Jenneration </td>
          </tr>
          <tr>
            <td>3:00pm</td>
            <td>The Strong Woman Show</td>
          </tr>
          <tr>
            <td>4:30pm</td>
            <td>IC Circus</td>
          </tr>
        </table>
        <h2>Sunday</h2>
        <h3>Bernie Milton Pavilion</h3>
        <table>
          <tr>
            <th>Time</th>
            <th>Artist</th>
          </tr>
          <tr>
            <td>10:00-10:45AM</td>
            <td>IC Voicestream, Ithacapella, Premium Blend</td>
          </tr>
          <tr>
            <td>11:00-11:45AM</td>
            <td>Sixteen Feathers</td>
          </tr>
          <tr>
            <td>12:00-12:45PM</td>
            <td>June w/ Chandani</td>
          </tr>
          <tr>
            <td>1:00-1:45PM</td>
            <td>Mary Lorson</td>
          </tr>
          <tr>
            <td>2:00-3:00PM</td>
            <td>Dapper Dan</td>
          </tr>
          <tr>
            <td>3:15-4:15PM</td>
            <td>Radio London</td>
          </tr>
          <tr>
            <td>4:30-5:00PM</td>
            <td>Mirage Belly Dancers</td>
          </tr>
          <tr>
            <td>5:15-6:15PM</td>
            <td>NEO Project</td>
          </tr>
        </table>
        <h3>West State Street</h3>
        <table>
          <tr>
            <th>Time</th>
            <th>Artist</th>
          </tr>
          <tr>
            <td>12:30pm</td>
            <td><a href=https://www.facebook.com/matanpresbergjuggler/>Matan Presberg - Juggler</a></td>
          </tr>
          <tr>
            <td>3:00pm</td>
            <td><a href=https://www.facebook.com/hulahutpolynesiandance/>Hula Hut Polynesian Dance</a></td>
          </tr>
        </table>
      </div>
      <!-- end events div -->
    </div>
    <!-- end container div -->

      </div>
      <!-- end main_body div -->


  </body>
</html>
