<?php

$k = "549b516f0e9816e84dda318fdb99d20b";
$s = "c4ac6d87a1680466";
$set_id ="72157635041039311";

$data_url = "http://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos";
$data_url .= '&api_key=' .$k;
$data_url .= '&photoset_id=' .$set_id;
$data_url .= '&format=json';
$data_url .= '&nojsoncallback=1';
  
$raw_data = file_get_contents( $data_url);
$data = json_decode($raw_data);
$count = count($data->photoset->photo);

print '<div id="flickrCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#flickrCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#flickrCarousel" data-slide-to="1"></li>
          <li data-target="#flickrCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">';
for ($i = 0; $i < $count; $i++) {

  if (  $i == 0 ) {

  print '<div class="item active"><img class="img-polaroid" src="http://farm' . $data->photoset->photo[$i]->farm . '.staticflickr.com/' . $data->photoset->photo[$i]->server . '/' . $data->photoset->photo[$i]->id . '_' . $data->photoset->photo[$i]->secret . '_b.jpg" />
         <div class="carousel-caption"><h4>' . $data->photoset->photo[$i]->title . '</h4></div></div>';
  

  }

  else {

  print '<div class="item"><img class="img-polaroid" src="http://farm' . $data->photoset->photo[$i]->farm . '.staticflickr.com/' . $data->photoset->photo[$i]->server . '/' . $data->photoset->photo[$i]->id . '_' . $data->photoset->photo[$i]->secret . '_b.jpg" />
         <div class="carousel-caption"><h4>' . $data->photoset->photo[$i]->title . '</h4></div></div>';

  }

}
print '</div>';
print '<a class="carousel-control left" href="#flickrCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#flickrCarousel" data-slide="next">&rsaquo;</a>
</div>';
  /*print '<pre>';

  print_r ($data);

  print '</pre>';*/

?>
