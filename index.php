<!DOCTYPE html>
<html lang="en">
<head>
<title>Dataviz Interface | Miami University Libraries</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="7200; URL=http://dog.lib.miamioh.edu/~jpmichel/dataviz/cam_model">
      <meta charset="UTF-8">
      <link href="http://dog.lib.miamioh.edu/~jpmichel/dataviz/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="http://dog.lib.miamioh.edu/~jpmichel/dataviz/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
      <link href="files/css/style.css" rel="stylesheet" media="screen">
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
</head>
<body>
<div class="container">
<div id="menus">
  
<div class="menu menu1">
    <button class="btn btn-large btn-danger menuButton closeMenu">Close Menu</button>  
    <button class="btn btn-large btn-inverse menuButton maps">Computer Availability Maps</button>
    <button class="btn btn-large btn-inverse menuButton new_tech">New Technology</button>
    <button class="btn btn-large btn-inverse menuButton news_and_notes">Library News & Events</button>
    <button class="btn btn-large btn-inverse menuButton flickr">Historical Images of Miami U.</button>
    <button class="btn btn-large btn-inverse menuButton research muishere localResearch">Map of MU Research</button>
    <!--<button class="btn btn-large btn-inverse menuButton mystery">Mystery Person</button>-->
    <button class="btn btn-large btn-inverse menuButton flickr-promotion">Special Collections Exhibit</button>

</div>
  
<div class="menu menu2">
  <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
    <button id="king" class="btn btn-large btn-inverse menuButton">King Library</button>
    <button id="best" class="btn btn-large btn-inverse menuButton">BEST Library</button>
    <button class="btn btn-large btn-inverse menuButton art">Art & Architecture Library</button>
    <button class="btn btn-large btn-inverse menuButton music">Music Library</button>

</div>
<!-- Room Menu -->
<div class="menu menu3">
      <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
      <button class="btn btn-large btn-inverse menuButton kingGround">Ground Floor</button>
      <button class="btn btn-large btn-inverse menuButton kingFirst">First Floor</button>
      <button class="btn btn-large btn-inverse menuButton kingSecond">Second Floor</button>
      <button class="btn btn-large btn-inverse menuButton cim">CIM</button>    
      <button class="btn btn-large btn-inverse menuButton kamm">Kamm</button>
</div>
<div class="menu menu4">
    <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
    <button class="btn btn-large btn-inverse menuButton localResearch">Local Research</button>
    <button class="btn btn-large btn-inverse menuButton regionalResearch">Regional Research</button>
    <button class="btn btn-large btn-inverse menuButton nationalResearch">National Research</button>    
    <button class="btn btn-large btn-inverse menuButton internationalResearch">International Research</button>
</div>
<div class="menu menu5">
      <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
      <button class="btn btn-large btn-inverse menuButton bestClass">BEST Classroom</button>
      <button class="btn btn-large btn-inverse menuButton bestDen">Digital Den</button>
</div>

</div>

<!-- New Tech Content -->
<div class="content new_tech">
<div class="page-header">
        <img class="pull-right" src="files/img/social-media-icon-large.png" />
        <h1>New Technology <small> provided by the Miami University Libraries</small></h1>
        </div>
      <div class="hero-unit">
        <h1><img src="files/img/not-bad.jpg" class="img-polaroid pull-right" />Gigabit Wireless in King Library.</h1>
        <br />
      <p>The wireless network in King library has been upgraded. If you have a device that supports gigabit Wi-Fi( IEEE 802.11ac) you can connect to MU-WIRELESS at gigabit speeds.</p>
      <p>Some devices that support gigabit wireless:
      <ul>
      <li>HTC One</li>
      <li>Macbook Air</li>
      </p> 
      </div> 
      <div class="hero-unit">
        <h1><img src="files/img/nexus10.jpg" class="img-polaroid pull-right" />Nexus 10 for Checkout.</h1>
        <br />
      <p>Nexus 10 is the powerful 10-inch tablet from Google. With a super high resolution display, multi-user support, immersive HD content and the best Google apps - Nexus 10 has something for everyone. Available now for checkout in King Library.</p> 
      </div>
      <div class="hero-unit">
        <h1><img src="files/img/google-cloud-print.png" class="img-polaroid" />&nbsp;&nbsp;Google Cloud Print.</h1>
        <br />
      <p>Seamlessly print from your own devices with Google Cloud Print.  The Miami University Libraries Google Cloud Printing service is now available. Go to http://bit.ly/MUGCP to set up your devices!</p>
      </div>
      <div class="hero-unit">
        <h1><img src="files/img/BrowZineLogo.jpg" class="img-polaroid pull-right" />Introducing Browzine.</h1>
        <br />
        <p> The library is sponsoring BrowZine, a new tablet application that allows you to browse, read and monitor many of the library’s scholarly journals. All in a format optimized for your iPad or Android tablet! Built to <em>accompany</em> your searching needs, items found in BrowZine can easily be synced up with Zotero, Dropbox or several other services to help keep all of your content together in one place.
To get started, search for “BrowZine” in the app stores (Apple, Google, Amazon) and download BrowZine to your device for free. When initially launching BrowZine, select Miami University from the drop down list, then enter your unique id and password.</p>  
      </div> 
      <div class="hero-unit">
        <h1><img src="files/img/google-floor-maps.png" class="img-polaroid" />&nbsp;&nbsp;Indoor Google Maps.</h1>
        <br />
        <p>King Library, The Wertz Art & Architecture Library & The Music Library now have Google Indoor Maps.  Indoor Maps are available for Android & iOS devices!</p>
      </div> 
      <div class="hero-unit">
        <h1><img src="files/img/charging-stations.jpg" class="img-polaroid pull-right" />Universal Charging Stations.</h1>
        <br />
      <p>Hate it when your phone dies in the middle of a text? No need to worry if you're in King Library or BEST Library.</p>
      </div>
      <div class="hero-unit">
        <h1><img src="files/img/dell-touch.jpg" class="img-polaroid" />&nbsp;&nbsp;Dell Touchscreen PCs.</h1>
        <br />
      <p>10 new Windows 8 touch screen PCs have been set up between King & BEST. Check out these sweet new machines!</p> 
      </div>
      </div>

<!-- Mystery Person Content -->
<!--<div class="content mystery">
  <div class="container">
    <div class="page-header">
      <h1>Mystery Person <small>Touch and Drag to Reveal!</small><a href="#paperModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Reveal Mystery Person</a>
</h1>
    </div>
    <div id="paperModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="paperModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>President David C. Hodge</h3>
      </div>
      <div class="modal-body">
        <img class="img-polaroid" src="hodge.jpg" />
        <p>Dr. David C. Hodge is the 21st president of Miami University. He began his tenure on July 1, 2006. Previously he was the Dean of the College of Arts and Sciences at the University of Washington. Dr. Hodge was born and raised in Minnesota and earned a Bachelor's degree in 1970 from Macalester College and earned a doctorate in 1975 from Pennsylvania State University. You can follow him on Twitter at @PresHodge</p>
      </div>
    </div>
    <div class="canvas">
      <canvas id="canvas-1" width="600" height="731" class="img-polaroid"></canvas>
    </div>
  </div>
</div>-->

<!-- News & Notes Content -->
<div class="content news_and_notes">
<div class="container">
  <div class="page-header">
    <img class="no-action pull-right" src="files/img/social-media-icon-large.png" />
    <h1>News & Notes <small>a blog</small></h1>
  </div>
<?php include 'files/scripts/news_and_notes.php'; ?>
</div>
</div>

<!-- Flickr Content -->
<div class="content flickr">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>Est. 1809 <small>Historical Images of Miami University</small></h1>
  </div>
<?php include 'files/scripts/flickr.php'; ?>
</div>
</div>

<!-- Flickr Promotion Content -->
<div class="content flickr-promotion">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>For the Amusement of Youth <small>a Current Exhibit in the Walter Havighurst Special Collections</small></h1>
    <p><em>For the Amusement of Youth</em> is a current exhibit upstairs on the third floor in the Walter Havighurst Special Collections.  The exhibit runs from 1/27 - 5/16. This exhibit traces the origins of today’s gaming industry, highlighting the products of the golden age of commercial game production in the United Kingdom, the United States, and beyond from the 1790s to the 1920s. Highlights of the exhibit include several hand-colored board games from England circa 1800, early games and puzzles produced by leading American game manufacturers, Milton Bradley, the McLoughlin Brothers, and the Parker Brothers, and an early French version of the popular magnetic fish pond game..</p>
</div>
<?php include 'files/scripts/flickr-cradle.php'; ?>
</div>
</div>


<!-- Research at Miami Content -->
<div class="content muishere">
<?php include 'content/muishere.php'; ?>
</div>

<!-- Computer Availability Maps -->
<div class="content kingGround">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small>  King Library, Ground Floor </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=20"></iframe>
  </div>
</div>

<div class="content kingFirst">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> King Library, First Floor </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=21"></iframe>
  </div>
</div>

<div class="content kingSecond">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> King Library, Second Floor </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=22"></iframe>
  </div>
</div>

<div class="content cim">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> King Library, CIM Lab </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=18"></iframe>
  </div>
</div>

<div class="content kamm">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> King Library, Kamm Lab </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=23"></iframe>
  </div>
</div>

<div class="content bestClass">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small>  BEST Library, Classroom </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=26"></iframe>
  </div>
</div>

<div class="content bestDen">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small>  BEST Library, Digital Den </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=31"></iframe>
  </div>
</div>

<div class="content art">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> Art & Architecture Library </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=24"></iframe>
  </div>
</div>

<div class="content music">
  <div class="container">
    <div class="page-header">
      <img class="pull-right" src="files/img/social-media-icon-large.png" />
      <h1>Computer Availability Maps<small> Music Library </small></h1>
    </div>
   <iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/mapbyid.php?map=19"></iframe>
  </div>
</div>

<!-- Bottom Navbar -->
<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="navbar-inner"> 
        <!--<div class="container"> -->
            <div class="btn-group pull-left">
              <button id="menuButton" class="btn btn-large openMenu" type="button">EXPLORE</button>
            </div>
            <div class="pull-left">
            <p><img src="http://dog.lib.miamioh.edu/~jpmichel/dataviz/bootstrap/img/Universal_Access_icon.png" class="ada" width="50" height="50" /></p>
            </div>
            <!--<ul id="adaMenu" class="nav nav-pills">
              <li><a class="mapMenu">Maps</a></li>
              <li><a href="#" class="adaBook">Book Galleries</a></li>
              <li><a class="new_tech">New Tech</a></li>
              <li><a class="news_and_notes">News & Events from the Library</a></li>
            </ul>-->
            <ul id="adaMenu" class="nav">
              <li><button class="btn btn-large mapMenu" type="button">Maps</button></li>
              <!--<li><button class="btn btn-large adaBook" type="button">Book Galleries</button></li>-->
              <li><button class="btn btn-large new_tech" type="button">New Tech</button></li>
              <li><button class="btn btn-large news_and_notes" type="button">News & Events from the Library</button></li>
              <li><button class="btn btn-large flickr" type="button">Historical Images of Miami U.</button></li>
              <li><button class="btn btn-large muishere adaMUIHMenu localResearch" type="button">Map of MU Research</button></li>
              <!--<li><button class="btn btn-large mystery" type="button">Mystery Man</button></li>-->
              <li><button class="btn btn-large flickr-promotion" type="button">Special Collections Exhibit</button></li>
 
            </ul> 
            <ul id="adaBookMenu" class="nav nav-pills">
              <li><button class="btn btn-large " type="button">New Books</button></li>
              <li><button class="btn btn-large" type="button">Popular Books</button></li>
            </ul>
            <ul id="adaMapsMenu" class="nav nav-pills">
              <li><button class="btn btn-large adaKingMaps" type="button">King Library</button></li>
              <li><button class="btn btn-large adaBestMaps" type="button">BEST Library</button></li>
              <li><button class="btn btn-large art" type="button">Art & Architecture Library</button></li>
              <li><button class="btn btn-large music" type="button">Music Library</button></li>
            </ul>
            <ul id="adaKingMaps" class="nav nav-pills">
              <li><button class="btn btn-large kingGround" type="button">King Ground Floor</button></li>
              <li><button class="btn btn-large kingFirst" type="button">King First Floor</button></li>
              <li><button class="btn btn-large kingSecond" type="button">King Second Floor</button></li>
              <li><button class="btn btn-large cim" type="button">CIM Lab</button></li>
              <li><button class="btn btn-large kamm" type="button">Kamm Lab</button></li>
            </ul>
            <ul id="adaBestMaps" class="nav nav-pills">
              <li><button class="btn btn-large bestDen" type="button">Digital Den</button></li>
              <li><button class="btn btn-large bestClass" type="button">BEST Classroom</button></li>
            </ul> 
            <ul id="adaMUIHMenu" class="nav nav-pills">
              <li><button class="btn btn-large localResearch" type="button">Local Research</button></li>
              <li><button class="btn btn-large regionalResearch" type="button">Regional Research</button></li>
              <li><button class="btn btn-large nationalResearch" type="button">National Research</button></li>
              <li><button class="btn btn-large internationalResearch" type="button">International Research</button></li>
            </ul>
   </div>
</div>
<!--<button id="menuButton" class="btn btn-large btn-inverse openMenu">MENU</button>-->
<script src="http://dog.lib.miamioh.edu/~jpmichel/dataviz/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="files/js/effects.js"></script>
<script type="text/javascript" src="js/paper.js"></script>
<script type="text/paperscript" canvas="canvas-1" src="js/img-raster.js"></script>
</body>
</html>
