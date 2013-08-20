<!DOCTYPE html>
<html lang="en">
<head>
<title>Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script src="../bootstrap/js/bootstrap.js"></script>
<style>


body {
  margin: 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
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
  width: 200px;
  height: 100%;
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
#adaMenu, #adaBookMenu, #adaMapsMenu, #adaMUIHMenu {
  margin-top:5px;
  margin-left:5px;
}

#adaMenu button, #adaBookMenu button, #adaMapsMenu button, #adaMUIHMenu button {
  margin:2px;
  margin:2px;
}


  .ada {
  
    margin-top:5px;
    margin-left:5px;

  }

  #new_tech {
    display:none;
  }

  #instagram {
    display:none;
  }

  #map {
    display:none;
  }

 #news_and_notes {
    display:none;
 }

#news_and_notes a:link {
  pointer-events:none;
  cursor:default;

}
 
 #flickr {
    display:none;
 }

 #muishere {
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
</style>
</head>
<body>
<div class="container">
<div id="menus">
  
<div class="menu menu1">
  <button class="btn btn-large btn-danger menuButton closeMenu">Close Menu</button>  
    <button class="btn btn-large btn-inverse menuButton maps">Computer Availabilty Maps</button>
    <button class="btn btn-large btn-inverse menuButton new_tech">New Technology</button>
    <button class="btn btn-large btn-inverse menuButton instagram">Instagram Contest!!</button>
    <button class="btn btn-large btn-inverse menuButton news_and_notes">Library News & Events</button>
    <button class="btn btn-large btn-inverse menuButton flickr">Historical Images of Miami U.</button>
    <button class="btn btn-large btn-inverse menuButton research muishere localResearch">Map of MU Research</button>
</div>
  
<div class="menu menu2">
  <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
    <button id="king" class="btn btn-large btn-inverse menuButton">King Library</button>
</div>
<!-- Room Menu -->
<div class="menu menu3">
    <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
    <button class="btn btn-large btn-inverse menuButton">Ground Floor</button>
      <button class="btn btn-large btn-inverse menuButton map">First Floor</button>
      <button class="btn btn-large btn-inverse menuButton">CIM</button>    
      <button class="btn btn-large btn-inverse menuButton">Kamm</button>
      <button class="btn btn-large btn-inverse menuButton">Second Floor</button>
</div>
<div class="menu menu4">
    <button class="btn btn-large btn-danger menuButton back"><i class="icon-circle-arrow-left pull-left"></i>Back</button>
    <button class="btn btn-large btn-inverse menuButton localResearch">Local Research</button>
    <button class="btn btn-large btn-inverse menuButton regionalResearch">Regional Research</button>
    <button class="btn btn-large btn-inverse menuButton nationalResearch">National Research</button>    
    <button class="btn btn-large btn-inverse menuButton internationalResearch">International Research</button>
</div>
</div>
<div id="new_tech">
<div class="page-header">
        <img class="pull-right" src="files/img/social-media-icon-large.png" />
        <h1>New Technology <small> provided by the Miami University Libraries</small></h1>
        </div> 
      <div class="hero-unit">
        <h1><img src="../new_tech/img/google-cloud-print.png" class="img-polaroid" />&nbsp;&nbsp;Google Cloud Print.</h1>
        <br />
        <p>The Google cloud print pilot is now active.  When you print from Google chrome you will notice it is now populated with staff printers, if you want to try out any of the Pay for Print queues or share them with patrons simply use these links.</p>
      </div>
      <div class="hero-unit">
        <h1><img src="../new_tech/img/BrowZineLogo.jpg" class="img-polaroid" />&nbsp;&nbsp;Introducing Browzine.</h1>
        <br />
        <p> The library is sponsoring BrowZine, a new tablet application that allows you to browse, read and monitor many of the library’s scholarly journals. All in a format optimized for your iPad or Android tablet! Built to accompany your searching needs, items found in BrowZine can easily be synced up with Zotero, Dropbox or several other services to help keep all of your dangerrmation together in one place.
To learn more, please take a look at this short two minute video: http://thirdiron.com/browzine-ipad-app/video/
To get started, search for “BrowZine” in the app stores (Apple, Google, Amazon) and download BrowZine to your device for free. When initially launching BrowZine, select our school from the drop down list. Then, enter your campus credentials, these will be the same ones you use for off-campus access to library resources.</p>  
      </div> 
      <div class="hero-unit">
        <h1><img src="../new_tech/img/google-floor-maps.png" class="img-polaroid" />&nbsp;&nbsp;Indoor Google Maps.</h1>
        <br />
        <p>King Library, The Wertz Art & Architecture Library & The Music Library now have Google Indoor Maps.  Indoor Maps are available for Android & iOS devices!</p>
      </div> 
      </div>
<div id="instagram">
<div class="container">
<?php
include('../../apis/instagram/connect.php');
$sql=mysql_query("SELECT * FROM instagram_images ORDER BY up DESC;");
?>
<div class="page-header">
<h1>Miami University Libraries' Instagram Contest<img class="pull-right" src="files/img/social-media-icon-large.png" /></h1>
<ul>
<li>Snap cool pictures of the libraries using Instagram.</li>
<li>Apply the hashtag <strong>#mohlibinstagram</strong>.</li>
<li>Vote on your favorites @ www.lib.miamioh.edu/instagram-contest</li>
<li>Top vote getter wins a <a href="#nexusModal" data-toggle="modal"><strong>Nexus 7</strong>!!</a></li>
<li>Images may be printed and displayed in the libraries!</li>
<li>Contest ends October 13th.</li>
</ul>
</div>

<div id="nexusModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="nexusModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="nexusModalLabel">Nexus 7</h3>
  </div>
  <div class="modal-body nexusModal">
    <img class="img-polaroid" src="files/img/nexus7.jpg" />
    <h3>Nexus 7 (16GB)</h3>
    <p><strong>Powerful, portable and made for what matters to you.</strong></p>
    <p>Now thinner, lighter, and faster — Nexus 7 brings you the perfect mix of power and portability and features the world’s sharpest 7” tablet screen.</p>
  </div>
</div>
<div class="span12">
<ul class="thumbnails">

<?php
while($row=mysql_fetch_array($sql))
{
$standard=$row['standard_url'];
$lowres=$row['lowres_url'];
$user=$row['user'];
$caption=$row['caption'];
$entry_id=$row['entry_id'];
$up=$row['up'];
$down=$row['down'];
?>

<li class="span3">
<div class="thumbnail">

<a href="#<?php echo $entry_id; ?>"  data-toggle="modal"><img src="<?php echo $lowres; ?>" class="img-rounded" /></a>

<div class="caption">
<div id="<?php echo $entry_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h5 id="myModalLabel"><?php echo $caption ?></h5>
  </div>
  <div class="modal-body">
    <p><img src="<?php echo $standard; ?>" /></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<p>
<a class="btn btn-success up vote" id="<?php echo $entry_id; ?>" name="up"><i class="icon-thumbs-up icon-white"></i>&nbsp;&nbsp;<?php echo $up; ?></a>
</p>
</div>
</div>
</li>

<?php } ?>
</ul>

</div>
</div>
</div>
<div id="news_and_notes">
<div class="container">
  <div class="page-header">
    <img class="no-action pull-right" src="files/img/social-media-icon-large.png" />
    <h1>News & Notes <small>a blog</small></h1>
  </div>
<?php include '../../apis/drupal/news_and_notes.php'; ?>
</div>
</div>

<div id="flickr">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>Est. 1809 <small>Historical Images of Miami University</small></h1>
  </div>
<?php include '../flickr/flickr_presenter/flickr.php'; ?>
</div>
</div>

<div id ="muishere">
<?php include 'content/muishere.php'; ?>
</div>

<div id="map">
<div class="container">
  <div class="page-header">
    <img class="pull-right" src="files/img/social-media-icon-large.png" />
    <h1>Computer Availability Maps<small>  Digital Den, BEST Library </small></h1>
  </div>
<iframe scrolling="no" src="http://staff.lib.muohio.edu/~cameroj3/webtests/ajax/labtest/"></iframe>
</div>
</div>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="navbar-inner"> 
        <!--<div class="container"> -->
            <div class="btn-group pull-left">
              <button id="menuButton" class="btn btn-large openMenu" type="button">EXPLORE</button>
            </div>
            <div class="pull-left">
            <p><img src="../bootstrap/img/Universal_Access_icon.png" class="ada" width="40" height="40" /></p>
            </div>
            <!--<ul id="adaMenu" class="nav nav-pills">
              <li><a class="mapMenu">Maps</a></li>
              <li><a href="#" class="adaBook">Book Galleries</a></li>
              <li><a class="new_tech">New Tech</a></li>
              <li><a class="instagram">Instagram Contest!</a></li>
              <li><a class="news_and_notes">News & Events from the Library</a></li>
            </ul>-->
            <ul id="adaMenu" class="nav">
              <li><button class="btn mapMenu" type="button">Maps</button></li>
              <li><button class="btn adaBook" type="button">Book Galleries</button></li>
              <li><button class="btn new_tech" type="button">New Tech</button></li>
              <li><button class="btn instagram" type="button">Instagram Contest!</button></li>
              <li><button class="btn news_and_notes" type="button">News & Events from the Library</button></li>
              <li><button class="btn flickr" type="button">Historical Images of Miami U.</button></li>
              <li><button class="btn muishere adaMUIHMenu localResearch" type="button">Map of MU Research</button></li>
            </ul> 
            <ul id="adaBookMenu" class="nav nav-pills">
              <li><button class="btn" type="button">New Books</button></li>
              <li><button class="btn" type="button">Popular Books</button></li>
            </ul>
            <ul id="adaMapsMenu" class="nav nav-pills">
              <li><button class="btn" type="button">King</button></li>
              <li><button class="btn" type="button">BEST</button></li>
            </ul>
            <ul id="adaMUIHMenu" class="nav nav-pills">
              <li><button class="btn localResearch" type="button">Local Research</button></li>
              <li><button class="btn regionalResearch" type="button">Regional Research</button></li>
              <li><button class="btn nationalResearch" type="button">National Research</button></li>
              <li><button class="btn internationalResearch" type="button">International Research</button></li>
            </ul>
   </div>
</div>
<!--<button id="menuButton" class="btn btn-large btn-inverse openMenu">MENU</button>-->
<script>
$( document ).ready(function() {
$(".openMenu").click (function() {
  if($(".menu").attr("class") == ("menu menu1 menuIn")) {

  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3"); 
  $(".menu4").removeClass("menuIn4"); 
 
  } 

  else {

  $(".menu").addClass("menuIn");

  }
});

$(".maps").click( function() {
  $(".menu2").addClass("menuIn2");
  $(".maps:button").addClass("btn-primary");
  $(".maps:button").removeClass("btn-inverse");
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".closeMenu:button").html('Close Menus'); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");

});

$(".research").click( function() {
  $(".menu4").addClass("menuIn4");
  $(".research:button").addClass("btn-primary");
  $(".research:button").removeClass("btn-inverse");
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $(".closeMenu:button").html('Close Menus'); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");

});
$(".closeMenu").click( function() {

  $(".closeMenu:button").html('Close Menu');

});

$("#king").click (function() {
  $(".menu3").addClass("menuIn3");
  $("#king:button").addClass("btn-primary");
  $("#king:button").removeClass("btn-inverse");
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
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".internationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".nationalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".regionalResearch").removeClass("btn-inverse");
  $("#adaMUIHMenu").find("button",".localResearch").removeClass("btn-inverse");

});

$(".back").click( function() {
    $(this).parent().removeClass("menuIn menuIn2 menuIn3 menuIn4");
});

$(".closeMenu").click( function() {
  $(".menu").removeClass("menuIn");
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");

});

$(".ada").click( function() {

  if ($("#adaMenu").css("display") == "none") {
    $("#adaMenu").css("display","block");
    $("#adaBookMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");

     
  } 
  
   else if ($("#adaMenu").css("display") == "block") {
    $("#adaMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
 
  }  


});


$(".adaBook").click( function() {

  if ($("#adaBookMenu").css("display") == "none") {
    $("#adaBookMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
 
  } 
  
});

$(".adaMUIHMenu").click( function() {

  if ($("#adaMUIHMenu").css("display") == "none") {
    $("#adaMUIHMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaMapsMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
 
  } 
  
});

$(".mapMenu").click( function() {

  if ($("#adaMapsMenu").css("display") == "none") {
    $("#adaMapsMenu").css("display","block");
    $("#adaMenu").css("display","none");
    $("#adaBookMenu").css("display","none");
    $("#adaMUIHMenu").css("display","none");
 
  } 

});

$(".new_tech").click( function() {

  if ($("#new_tech").css("display") == "none") {
    $("#new_tech").css("display","block");
    $("#instagram").css("display","none");
    $("#map").css("display","none");
    $("#map").css("display","none");
    $("#news_and_notes").css("display","none");
    $("#flickr").css("display","none");
    $("#muishere").css("display","none");
 
   } 
  
  $(".new_tech:button").addClass("btn-primary");
  $(".new_tech:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#adaMUIHMenu").css("display","none");
});

$(".instagram").click( function() {

  if ($("#instagram").css("display") == "none") {
    $("#instagram").css("display","block");
    $("#new_tech").css("display","none");
    $("#map").css("display","none");
    $("#news_and_notes").css("display","none");
    $("#flickr").css("display","none");
    $("#muishere").css("display","none");
} 
  $(".instagram:button").addClass("btn-primary");
  $(".instagram:button").removeClass("btn-inverse");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary"); 
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3"); 
  $(".menu4").removeClass("menuIn4"); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary");
  $(".muishere:button").addClass("btn-inverse");
  $(".muishere:button").removeClass("btn-primary");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse"); 
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse"); 
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse"); 
  $("#adaMUIHMenu").css("display","none");

});

$(".news_and_notes").click( function() {

  if ($("#news_and_notes").css("display") == "none") {
    $("#news_and_notes").css("display","block");
    $("#new_tech").css("display","none");
    $("#map").css("display","none");
    $("#instagram").css("display","none");
    $("#flickr").css("display","none");
    $("#muishere").css("display","none");
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
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $(".news_and_notes:button").addClass("btn-primary");
  $(".news_and_notes:button").removeClass("btn-inverse"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");
  $("#adaMUIHMenu").css("display","none");

});

$(".flickr").click( function() {

  if ($("#flickr").css("display") == "none") {
    $("#flickr").css("display","block");
    $("#new_tech").css("display","none");
    $("#map").css("display","none");
    $("#instagram").css("display","none");
    $("#news_and_notes").css("display","none");
    $("#muishere").css("display","none");
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
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#adaMenu").find("button",".muishere").removeClass("btn-inverse");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $(".flickr:button").addClass("btn-primary");
  $(".flickr:button").removeClass("btn-inverse"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $(".menu4").removeClass("menuIn4");

  $("#adaMUIHMenu").css("display","none");

});

$(".muishere").click( function() {

  if ($("#muishere").css("display") == "none") {
    $("#muishere").css("display","block");
    $("#new_tech").css("display","none"); 
    $("#map").css("display","none"); 
    $("#instagram").css("display","none"); 
    $("#news_and_notes").css("display","none"); 
    $("#flickr").css("display","none"); 
    
    } 
  
  $(".instagram:button").addClass("btn-inverse");
  $(".instagram:button").removeClass("btn-primary");
  $(".maps:button").addClass("btn-inverse");
  $(".maps:button").removeClass("btn-primary"); 
  $(".new_tech:button").addClass("btn-inverse");
  $(".new_tech:button").removeClass("btn-primary");
  $(".news_and_notes:button").addClass("btn-inverse");
  $(".news_and_notes:button").removeClass("btn-primary");
  $("#adaMenu").find("button",".instagram").removeClass("btn-inverse");
  $("#adaMenu").find("button",".maps").removeClass("btn-inverse");
  $("#adaMenu").find("button","#king").removeClass("btn-inverse");
  $("#adaMenu").find("button",".new_tech").removeClass("btn-inverse");
  $("#adaMenu").find("button",".news_and_notes").removeClass("btn-inverse");
  $("#king:button").addClass("btn-inverse");
  $("#king:button").removeClass("btn-primary"); 
  $(".flickr:button").addClass("btn-inverse");
  $(".flickr:button").removeClass("btn-primary"); 
  $(".muishere:button").addClass("btn-primary");
  $(".muishere:button").removeClass("btn-inverse"); 
  $(".menu1").removeClass("menuIn1");
  $(".menu2").removeClass("menuIn2");
  $(".menu3").removeClass("menuIn3");
  $("#adaMenu").find("button",".flickr").removeClass("btn-inverse");

});

$(".map").click( function() {

  if ($("#map").css("display") == "none") {
    $("#map").css("display","block");
    $("#new_tech").css("display","none");
    $("#instagram").css("display","none");
    $("#news_and_notes").css("display","none");
    $("#flickr").css("display","none");
   } 
 
});

$(".localResearch").click( function() {

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

});

$(".regionalResearch").click( function() {

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
 
});

$(".nationalResearch").click( function() {

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
 
});

$(".internationalResearch").click( function() {

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
 
});

$("iframe","#news_and_notes").css("display","none");
$("img","#news_and_notes").addClass("img-polaroid");
$("img","#news_and_notes").css("margin","10px");
$("#news_and_notes").find("img:odd",".hero-unit").css("float","left");
$("#news_and_notes").find("img:even",".hero-unit").css("float","right");
$("#news_and_notes").find("img:odd",".hero-unit").css("clear","left");
$("#news_and_notes").find("img:even",".hero-unit").css("clear","right");
$("#news_and_notes").find("img:last",".hero-unit").css("clear","both");
$("#news_and_notes").find(".hero-unit").css("overflow","hidden");
$('.carousel').carousel();
$("img",".carousel-inner").css("margin-left","auto");
$("img",".carousel-inner").css("margin-right","auto");
$("img.no-action").css("float","right");
$("img.no-action").css("margin","0");
$("img.no-action").removeClass("img-polaroid");


});

</script>


</body>
</html>
