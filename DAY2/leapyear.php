<?php 
// check whether the year is leap or not. 
function checkyear($year){
    if($year%4==0){
        echo "<br/>".$year." is a leap year";
    }
    else if($year%100==0){
        echo "<br/>".$year." is a leap year";
    }
    else{
        echo $year." is not a leap year.";
    }
}
$year_main=2025;
checkyear($year_main);
$year_main=1000;
checkyear($year_main);
?>