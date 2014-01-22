<!DOCTYPE html>
<html lang="en">
<head>
<title>Dataviz Interface | Miami University Libraries</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="7200; URL=http://dog.lib.miamioh.edu/~jpmichel/dataviz/cam_model">
      <meta charset="UTF-8">
      <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
      <script src="../bootstrap/js/bootstrap.js"></script>
<style>


body {
  margin: 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  background-color:#FCFFF9;
}

.canvas {

position:fixed;
left:300px;
top:200px;

}

#page {
  width: 100%;
  height: 100%;
}

.menu {
  transition: all 0.2s ease-in-out;
  //background-color: #212121;
  background-color:#181818;
  position: fixed;
  bottom:80px;
  width: 200px;
  left: -200px;
  z-index: 100;
  -webkit-transform: translate3d(0,0,0);
  border-top-left-radius: 10px 5px;  
  border-top-right-radius: 10px 5px;
}

.menu1 {
  z-index: 300;
  background-color:#181818;
}
.menu2 {
  z-index: 200;
  background-color:#181818;
}
.menu3 {
  z-index: 100;
  background-color:#181818;
}

.menu4 {
  z-index: 100;
  background-color:#181818;
}
.menuButton {
  width: 100%;
}

.menuIn {
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate3d(200px, 0, 0); 
}
.menuIn2 {
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate3d(400px, 0, 0); 
}
.menuIn3 {
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate3d(600px, 0, 0); 
}

.menuIn4 {
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate3d(400px, 0, 0); 
}

.menuIn5 {
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate3d(600px, 0, 0); 
}

#adaMenu {
    display:none;
    }
  
  #adaBookMenu {
    display:none;
  }

#adaMapsMenu {
  display:none;
}

#adaMUIHMenu {
  display:none;
}

#adaKingMaps {
  display:none;
}

#adaBestMaps {
  display:none;
}
#adaMenu, #adaBookMenu, #adaMapsMenu, #adaMUIHMenu, #adaKingMaps, #adaBestMaps {
  margin-top:5px;
  margin-left:20px;
}

#adaMenu button, #adaBookMenu button, #adaMapsMenu button, #adaMUIHMenu button, #adaKingMaps button, #adaBestMaps button  {
  margin:2px;
  margin:2px;
}


  .ada {
  
    margin-top:5px;
    margin-left:5px;

  }

//  #new_tech {
//    display:block;
//  }

// rotation display css
div.new_tech {

  display:none;
}


  div.mystery {

    display:none;

  }

  div.instagram {
    display:none;
  }

  div.kingGround {
    display:none;
  }
 
  div.kingFirst {
    display:none;
  }

div.kingSecond {
    display:none;
  }

div.bestClass {
    display:none;
  }

div.bestDen {
    display:none;
  }

div.cim {
    display:none;
  } 

div.kamm {
    display:none;
  }

div.art {
    display:none;
  }

div.music {
    display:none;
  }

div.news_and_notes {
    display:none;
 }

div.news_and_notes a:link {
  pointer-events:none;
  cursor:default;

}
 
 div.flickr {
    display:none;
 }

div.flickr-promotion {
    display:none;
 } 

 div.muishere {
    display:none;
 }

 .nexusModal {

  max-height:950px !important;

 }

 .carousel-control {
  top:150px !important;
 }

iframe {
  position: fixed;
  top: 200px;
  width: 1300px;
  height: 1000px;
  left: 350px;
  border: none;
}

.page-header h1 {

  padding-top:60px;

}

.page-header {

  padding-bottom:50px !important;
}

.navbar-inverse .navbar-inner {

  min-height:70px !important;
  padding-top:10px;

}

.img-polaroid {
margin:5px;
}
</style>
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
    <button class="btn btn-large btn-inverse menuButton flickr-promotion">Cradle of Coaches</button>

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
        <h1><img src="../new_tech/img/google-cloud-print.png" class="img-polaroid" />&nbsp;&nbsp;Google Cloud Print.</h1>
        <br />
      <p>Seamlessly print from your own devices with Google Cloud Print.  The Miami University Libraries Google Cloud Printing service is now available. Go to http://bit.ly/MUGCP to set up your devices!</p>
      </div>
      <div class="hero-unit">
        <h1><img src="../new_tech/img/BrowZineLogo.jpg" class="img-polaroid pull-right" />Introducing Browzine.</h1>
        <br />
        <p> The library is sponsoring BrowZine, a new tablet application that allows you to browse, read and monitor many of the library’s scholarly journals. All in a format optimized for your iPad or Android tablet! Built to <em>accompany</em> your searching needs, items found in BrowZine can easily be synced up with Zotero, Dropbox or several other services to help keep all of your content together in one place.
To get started, search for “BrowZine” in the app stores (Apple, Google, Amazon) and download BrowZine to your device for free. When initially launching BrowZine, select Miami University from the drop down list, then enter your unique id and password.</p>  
      </div> 
      <div class="hero-unit">
        <h1><img src="../new_tech/img/google-floor-maps.png" class="img-polaroid" />&nbsp;&nbsp;Indoor Google Maps.</h1>
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
<div class="content news_and_notes">
<div class="container">
  <div class="page-header">
    <img class="no-action pull-right" src="files/img/social-media-icon-large.png" />
    <h1>News & Notes <small>a blog</small></h1>
  </div>
<?php include '../../apis/drupal/news_and_notes.php'; ?>
</div>
</div>

<div class="content flickr">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>Est. 1809 <small>Historical Images of Miami University</small></h1>
  </div>
<?php include '../flickr/flickr_presenter/flickr.php'; ?>
</div>
</div>

<!-- Flickr Promotion Div -->
<div class="content flickr-promotion">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>Cradle of Coaches <small>a Current Exhibit in the Walter Havighurst Special Collections</small></h1>
    <p><em>Cradle of Coaches: A Legacy of Excellence</em> is a current exhibit upstairs on the third floor in the Walter Havighurst Special Collections.  The exhibit runs from 8/19 - 12/13. The exhibit features playbooks, photographs and visualizations of the Cradle of Coaches coaching trees.  Come experience the glory of the Cradle of Coaches! Also this year is the 125th anniversary of Miami's first game which was on 12/8/1888 against Cincinnati.  It ended in a 0-0 tie.</p>
</div>
<?php include '../flickr/flickr_presenter/flickr-cradle.php'; ?>
</div>
</div>


<div class="content muishere">
<?php include 'content/muishere.php'; ?>
</div>

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

<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="navbar-inner"> 
        <!--<div class="container"> -->
            <div class="btn-group pull-left">
              <button id="menuButton" class="btn btn-large openMenu" type="button">EXPLORE</button>
            </div>
            <div class="pull-left">
            <p><img src="../bootstrap/img/Universal_Access_icon.png" class="ada" width="50" height="50" /></p>
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
              <li><button class="btn btn-large flickr-promotion" type="button">Cradle of Coaches</button></li>
 
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
<script>
$( document ).ready(function() {
$(".openMenu").on("tap",function(event) {


if($(".menu").attr("class") == ("menu menu1 menuIn")) {

  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3"); 
  $(".menu4").removeClass("menuIn4"); 
  $(".menu5").removeClass("menuIn5"); 
 
  } 

  else {

  $(".menu").addClass("menuIn");

  }
});

$(".maps").on("tap",function(event) {
  $(".menu2").addClass("menuIn2");
  $(".menu4").removeClass("menuIn4");
  $(".maps:button").addClass("btn-primary");
  $(".maps:button").removeClass("btn-inverse");
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".closeMenu:button").html('Close Menus'); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
   
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-primary");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
 
  $(".research:button").addClass("btn-inverse");
  $(".research:button").removeClass("btn-primary");
  $("#adaMUIHMenu").css("display","none"); 
});

$(".research").on("tap",function(event) {
  $(".menu4").addClass("menuIn4");
  $(".research:button").addClass("btn-primary");
  $(".research:button").removeClass("btn-inverse");
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".closeMenu:button").html('Close Menus'); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
$("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").css("display","none");
});
$(".closeMenu").on("tap",function(event) {

  $(".closeMenu:button").html('Close Menu');

});

$("#king").on("tap",function(event) {
  $(".menu3").addClass("menuIn3");
  $(".menu5").removeClass("menuIn5");
  $("#king:button").addClass("btn-primary");
  $("#king:button").removeClass("btn-inverse");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");

});

$("#best").on("tap",function(event) {
  $(".menu5").addClass("menuIn5");
  $(".menu3").removeClass("menuIn3");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-primary");
  $("#best:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");

});

$(".back").on("tap",function(event) {
    $(this).parent().removeClass("menuIn menuIn2 menuIn3 menuIn4 menuIn5");
});

$(".closeMenu").on("tap",function(event) {
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");
  $(".menu5").removeClass("menuIn5");
});

$(".ada").on("tap",function(event) {

  if ($("#adaMenu").css("display") == "none") {
    $("#adaMenu").css("display","block");
    $("#adaBookMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
    $(".menu").removeClass("menuIn");
    $(".menu1").removeClass("menuIn1");
    $(".menu2").removeClass("menuIn2");
    $(".menu3").removeClass("menuIn3");
    $(".menu4").removeClass("menuIn4");
    $(".menu5").removeClass("menuIn5"); 
     
  } 
  
   else if ($("#adaMenu").css("display") == "block") {
    $("#adaMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
    $(".menu").removeClass("menuIn");
    $(".menu1").removeClass("menuIn1");
    $(".menu2").removeClass("menuIn2");
    $(".menu3").removeClass("menuIn3");
    $(".menu4").removeClass("menuIn4");
    $(".menu5").removeClass("menuIn5"); 
}  


});


$(".adaBook").on("tap",function(event) {

  if ($("#adaBookMenu").css("display") == "none") {
    $("#adaBookMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
 
  } 
  
});

$(".adaMUIHMenu").on("tap",function(event) {

  if ($("#adaMUIHMenu").css("display") == "none") {
    $("#adaMUIHMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
 
  } 
  
});

$(".adaKingMaps").on("tap",function(event) {

  if ($("#adaKingMaps").css("display") == "none") {
    $("#adaKingMaps").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
   
  } 
});

$(".adaBestMaps").on("tap",function(event) {

  if ($("#adaBestMaps").css("display") == "none") {
    $("#adaBestMaps").css("display","block");
    $("#adaKingMaps").css("display","none");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
   
  } 
});

$(".mapMenu").on("tap",function(event) {

  if ($("#adaMapsMenu").css("display") == "none") {
    $("#adaMapsMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
  } 

});

$(".new_tech").on("tap",function(event) {

  if ($("div.new_tech").css("display") == "none") {
    $("div.new_tech").css("display","block");
    $("div.instagram").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");
 
   } 
  
  $(".new_tech:button").addClass("btn-primary");
  $(".new_tech:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");
  $(".menu5").removeClass("menuIn5");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
});

$(".mystery").on("tap",function(event) {

  if ($("div.mystery").css("display") == "none") {
    $("div.mystery").css("display","block");
    $("div.instagram").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.new_tech").css("display","none");
    $("div.flickr-promotion").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");
 
   } 
  
  $(".mystery:button").addClass("btn-primary");
  $(".mystery:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");
  $(".menu5").removeClass("menuIn5");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary"); 
 $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");

  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");

});
$(".instagram").on("tap",function(event) {

  if ($("div.instagram").css("display") == "none") {
    $("div.instagram").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none");
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");

} 
  $(".instagram:button").addClass("btn-primary");
  $(".instagram:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary"); 
  $("#king:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary"); 
  $("#best:button").addClass("btn-inverse");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4"); 
  $(".menu5").removeClass("menuIn5"); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
 $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse"); 
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse"); 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse"); 
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
$("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
$("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
$("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
$("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");

});

$(".news_and_notes").on("tap",function(event) {

  if ($("div.news_and_notes").css("display") == "none") {
    $("div.news_and_notes").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.instagram").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");
 
 } 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
 $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
$("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary"); 
  $(".news_and_notes:button").addClass("btn-primary");
  $(".news_and_notes:button").removeClass("btn-inverse"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4"); 
  $(".menu5").removeClass("menuIn5"); 
  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");

});

$(".flickr").on("tap",function(event) {

  if ($("div.flickr").css("display") == "none") {
    $("div.flickr").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");

} 
  
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
 $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
$("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary"); 
  $(".flickr:button").addClass("btn-primary");
  $(".flickr:button").removeClass("btn-inverse"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4"); 
  $(".menu5").removeClass("menuIn5"); 
  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");

});

$(".flickr-promotion").on("tap",function(event) {

  if ($("div.flickr-promotion").css("display") == "none") {
    $("div.flickr-promotion").css("display","block");
    $("div.instagram").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.new_tech").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");
 
   } 
  
  $(".flickr-promotion:button").addClass("btn-primary");
  $(".flickr-promotion:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4"); 
  $(".menu5").removeClass("menuIn5"); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary"); 
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
$("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#adaMUIHMenu").css("display","none");
  $("#adaKingMaps").css("display","none");
  $("#adaBestMaps").css("display","none");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");

});
$(".muishere").on("tap",function(event) {

  if ($("div.muishere").css("display") == "none") {
    $("div.muishere").css("display","block");
    $("div.new_tech").css("display","none"); 
    $("div.kingGround").css("display","none"); 
    $("div.kingFirst").css("display","none"); 
    $("div.instagram").css("display","none"); 
    $("div.news_and_notes").css("display","none"); 
    $("div.flickr").css("display","none"); 
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaMapsMenu").css("display","none");
 
    } 
  
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".mystery").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr-promotion").removeClass("btn-inverse");
 
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $("#best:button").addClass("btn-inverse");
  $("#best:button").removeClass("btn-primary"); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".muishere:button").addClass("btn-primary");
  $(".muishere:button").removeClass("btn-inverse"); 
  $(".mystery:button").addClass("btn-inverse");
  $(".mystery:button").removeClass("btn-primary"); 
  $(".flickr-promotion:button").addClass("btn-inverse");
  $(".flickr-promotion:button").removeClass("btn-primary"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu5").removeClass("menuIn5");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button",".kamm").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");

});

$(".kingGround").on("tap",function(event) {

  if ($("div.kingGround").css("display") == "none") {
    $("div.kingGround").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingFirst").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
 
  }
  
  $(".kingGround:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
 
});

$(".bestClass").on("tap",function(event) {

  if ($("div.bestClass").css("display") == "none") {
    $("div.bestClass").css("display","block");
    $("div.bestDen").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingFirst").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
 
  }
  
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".bestClass:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".bestDen:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
 
});

$(".bestDen").on("tap",function(event) {

  if ($("div.bestDen").css("display") == "none") {
    $("div.bestDen").css("display","block");
    $("div.bestClass").css("display","none");
    $("div.kingGround").css("display","none");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingFirst").css("display","none"); 
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
 
  }
  
  $(".bestDen:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".bestClass:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
 
});

$(".kingFirst").on("tap",function(event) {

  if ($("div.kingFirst").css("display") == "none") {
    $("div.kingFirst").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");

} 
  $(".kingFirst:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");

});

$(".kingSecond").on("tap",function(event) {

  if ($("div.kingSecond").css("display") == "none") {
    $("div.kingSecond").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.cim").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");

} 
  $(".kingSecond:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");

});

$(".cim").on("tap",function(event) {

  if ($("div.cim").css("display") == "none") {
    $("div.cim").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.kamm").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestMusic").css("display","none");

} 
  $(".cim:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
 
});

$(".kamm").on("tap",function(event) {

  if ($("div.kamm").css("display") == "none") {
    $("div.kamm").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.cim").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.art").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestMusic").css("display","none");

} 
  $(".kamm:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
 
});

$(".art").on("tap",function(event) {

  if ($("div.art").css("display") == "none") {
    $("div.art").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.cim").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.kamm").css("display","none");
    $("div.music").css("display","none");
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
} 
  $(".art:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".bestDen:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".bestClass:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".music:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".menu3").removeClass("menuIn3"); 
  $(".menu5").removeClass("menuIn5"); 
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
 
});

$(".music").on("tap",function(event) {

  if ($("div.music").css("display") == "none") {
    $("div.music").css("display","block");
    $("div.new_tech").css("display","none");
    $("div.instagram").css("display","none");
    $("div.news_and_notes").css("display","none");
    $("div.flickr").css("display","none");
    $("div.muishere").css("display","none");
    $("div.mystery").css("display","none"); 
    $("div.flickr-promotion").css("display","none"); 
    $("div.kingGround").css("display","none");
    $("div.kingFirst").css("display","none");
    $("div.cim").css("display","none");
    $("div.kingSecond").css("display","none");
    $("div.kamm").css("display","none");
    $("div.art").css("display","none");
    $("#adaKingMaps").css("display","none"); 
    $("#adaBestMaps").css("display","none"); 
    $("div.bestDen").css("display","none");
    $("div.bestClass").css("display","none");

} 
  $(".music:button").addClass("btn-primary").removeClass("btn-inverse");
  $(".kingSecond:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".cim:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".art:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kamm:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingFirst:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".kingGround:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse").removeClass("btn-primary");
  $("#best:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".menu3").removeClass("menuIn3"); 
  $(".menu5").removeClass("menuIn5"); 
  $("#adaMapsMenu").find("button").removeClass("btn-inverse");
  $("#adaKingMaps").find("button").removeClass("btn-inverse");
  $("#adaBestMaps").find("button").removeClass("btn-inverse");
  $(".bestDen:button").addClass("btn-inverse").removeClass("btn-primary");
  $(".bestClass:button").addClass("btn-inverse").removeClass("btn-primary");

});

$(".localResearch").on("tap",function(event) {

  zoomLocal(); 
  $(".localResearch:button").addClass("btn-primary");
  $(".localResearch:button").removeClass("btn-inverse");
  $(".regionalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".nationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".internationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
 
});

$(".regionalResearch").on("tap",function(event) {

    zoomRegional(); 
  $(".regionalResearch:button").addClass("btn-primary");
  $(".regionalResearch:button").removeClass("btn-inverse");
  $(".localResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".nationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".internationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
 
});

$(".nationalResearch").on("tap",function(event) {

    zoomNational(); 
  $(".nationalResearch:button").addClass("btn-primary");
  $(".nationalResearch:button").removeClass("btn-inverse");
  $(".regionalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".localResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".internationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
 
});

$(".internationalResearch").on("tap",function(event) {

    zoomInternational(); 
  $(".internationalResearch:button").addClass("btn-primary");
  $(".internationalResearch:button").removeClass("btn-inverse");
  $(".regionalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".nationalResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $(".localResearch:button").removeClass("btn-primary").addClass("btn-inverse");  
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingGround").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingFirst").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kingSecond").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".cim").removeClass("btn-inverse");
  $("#adaKingMaps").find("button",".kamm").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestDen").removeClass("btn-inverse");
  $("#adaBestMaps").find("button",".bestClass").removeClass("btn-inverse");
 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
 
});

$("iframe",".news_and_notes").css("display","none");
$("img",".news_and_notes").addClass("img-polaroid");
$("img",".news_and_notes").css("margin","10px");
$(".news_and_notes").find("img:odd",".hero-unit").css("float","left");
$(".news_and_notes").find("img:even",".hero-unit").css("float","right");
$(".news_and_notes").find("img:odd",".hero-unit").css("clear","left");
$(".news_and_notes").find("img:even",".hero-unit").css("clear","right");
$(".news_and_notes").find("img:last",".hero-unit").css("clear","both");
$(".news_and_notes").find(".hero-unit").css("overflow","hidden");
$('.carousel').carousel();
$("img",".carousel-inner").css("margin-left","auto");
$("img",".carousel-inner").css("margin-right","auto");
$("img.no-action").css("float","right");
$("img.no-action").css("margin","0");
$("img.no-action").removeClass("img-polaroid");


});


var divs = $('div.content'),
    i = 0;

function cycle() { 

    divs.css("display","none"); 
    divs.eq(i).css("display","block"); 
    
    if (divs.eq(i).hasClass("muishere")) {
    zoomLocal();
    }
    
    i = ++i % divs.length;
    clicked = 0;
    cycle_timer();

};

var clicked = 0;
var timeout;

$( document ).on("tap",function(event) {
  clicked = (clicked + 1);
  
  if (clicked == 1) {
    window.clearTimeout(timeout);
    window.setTimeout(function(){
    cycle_timer();
    },1000);
  }
})

function cycle_timer() {

  if (clicked == 1) {
    timer = 300000;
  } else {
    timer = 20000;    ;
  }

  timeout = window.setTimeout(function() {
    $(".menuButton:button").removeClass("btn-primary").addClass("btn-inverse");
    $(".closeMenu:button").removeClass("btn-inverse").addClass("btn-danger");
    $(".back:button").removeClass("btn-inverse").addClass("btn-danger");
    $("#adaMenu").find("button").removeClass("btn-primary");
    $(".menu").removeClass("menuIn");
    $(".menu1").removeClass("menuIn1");
    $(".menu2").removeClass("menuIn2");
    $(".menu3").removeClass("menuIn3"); 
    $(".menu4").removeClass("menuIn4"); 
    $(".menu5").removeClass("menuIn5"); 
    $("#adaMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
    $("#adaKingMaps").css("display","none");
    $("#adaBestMaps").css("display","none");
    cycle();
    },timer);

};

cycle_timer();
</script>

<script type="text/javascript" src="js/paper.js"></script>
<script type="text/paperscript" canvas="canvas-1" src="js/img-raster.js"></script>
</body>
</html>
