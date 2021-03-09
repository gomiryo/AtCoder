<?php

$n = 10;
// echo 1 / sqrt(5);
// echo ((1 + sqrt(5)) / 2); // 黄金比
// echo ((1 + sqrt(5)) / 2) ^ $n;
// echo ((1 - sqrt(5)) / 2) ^ $n;
// echo (sqrt(5) / 1) * ( (((1 + sqrt(5)) / 2) ^ $n) - (((1 - sqrt(5)) / 2) ^ $n) );

// 引用元
// https://www.it-swarm.jp.net/ja/php/php%E3%83%95%E3%82%A3%E3%83%9C%E3%83%8A%E3%83%83%E3%83%81%E6%95%B0%E5%88%97/1072806085/
function getFib($n){
    return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}

echo getFib($n);
