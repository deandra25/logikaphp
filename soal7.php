<?php
$x = ["merah", "biru", "kuning", "hitam", "abu-abu"];
$y = "merah";

foreach($x as $key=>$n){
    if($n == $y){
        echo $key;
    }
}
?>