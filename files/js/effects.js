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
