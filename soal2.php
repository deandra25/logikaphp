<?php 
echo"input n = 5";
echo"<br>";
   $n = 5;

 for ($i=1; $i<=$n; $i++){
   for ($j = 1; $j<=($n+3);$j++){
    if($i+1 == $j || $i+2 == $j){
     echo "*";
    }
    else {
     echo "$j"; 
    }
   }
   echo " ";
   echo"<br>";
}
echo"<br>";
echo"input n = 4";
echo"<br>";
$n = 4;

for ($i=1; $i<=$n; $i++){
   for ($j = 1; $j<=($n+3);$j++){
    if($i+1 == $j || $i+2 == $j){
     echo "*";
    }
    else {
     echo "$j"; 
    }
   }
   echo " ";
   echo"<br>";
}
?>