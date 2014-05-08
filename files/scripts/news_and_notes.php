<?php

$url ="http://www.lib.muohio.edu/taxonomy/term/4/all/feed";

$data = simplexml_load_file($url);

$count = count($data->channel->item);

for ( $i = 0; $i < $count; $i++) {

  
  print '<div class="hero-unit">
            <h2>' . $data->channel->item[$i]->title . '</h2>
            <small>' . $data->channel->item[$i]->pubDate . '</small>
            <p>' . $data->channel->item[$i]->description . '</p>
         </div>';


}

?>
