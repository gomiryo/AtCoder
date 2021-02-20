<?php
$n = trim(fgets(STDIN));
$m = explode(' ',trim(fgets(STDIN)));
$l = trim(fgets(STDIN));
echo $n+$m[0]+$m[1]." ".$l;
