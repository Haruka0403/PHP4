<?php

$color1 = ['red', 'blue', 'green'];
$color2 = ['orange', 'yellow'];

$colors = array_merge($color1, $color2);

foreach ($colors as $color){
  echo $color. "\n";
}
