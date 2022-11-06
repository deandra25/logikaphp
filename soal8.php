<?php
function blueOcean($array, $search){
    $arry = $array;
    foreach($arry as $arr){
        if($arr == $search){
            $hps = array_search($search, $arry);
            unset($arry[$hps]);

        }
    }
    print_r($arry);
}
echo blueOcean([1,2,3,4,5,5,5,4,4,4,4,4], 5) . "<br>";
echo"<br>";
?>