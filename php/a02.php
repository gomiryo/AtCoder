<?php
error_reporting(0);
$n = trim(fgets(STDIN));
$c = strlen($n);
$f = 0;
for($i=0;$i<$c;$i++){
if(ctype_lower(substr($n,$i,1)) && $i % 2 == 0) continue;
if(ctype_upper(substr($n,$i,1)) && $i % 2 !== 0) continue;
$f = 1;
}
if($f==0){ echo "Yes\n"; exit;}
echo "No\n";
