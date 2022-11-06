<?php

for($i = 1; $i <= 20; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo 'fizzbuzz';
        echo '<br>';
        continue;
    }elseif($i % 5 == 0){
        echo 'buzz';
        echo '<br>';
        continue;
    }elseif($i % 3 == 0){
        echo 'fizz';
        echo '<br>';
        continue;
    }
    echo $i;
    echo'<br>';
}