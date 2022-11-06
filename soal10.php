<?php

$a = 1;
$b = 1;
$c = 1;

if($a!=$b || $b!=$c || $c!=$a || $a!=$c){
    echo "narcissistic($a$b$c) are false";
}else{
    echo "narcissistic($a$b$c) are true";
}