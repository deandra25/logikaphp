<?php
function huruf($str1a, $str2a){
    $str1 = strtolower($str1a);
    $str2 = strtolower($str2a);
    $str1 = str_split($str1);
    $str2 = str_split($str2);
    sort($str1);
    sort($str2);
    if($str1 == $str2){
        return $str1a. ", " .$str2a ." mengandung huruf yang sama";
    }else{
        return $str1a. ", " .$str2a ." tidak mengandung huruf yang sama";
    }
}
echo huruf('maya','ayam');
echo "<hr>";
?>