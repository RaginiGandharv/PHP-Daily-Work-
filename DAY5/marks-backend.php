<?php

$a = $_POST['Sub1'];
$b = $_POST['Sub2'];
$c = $_POST['Sub3']; 
$d = $_POST['Sub4']; 
$e = $_POST['Sub5']; 

$total;
 
echo "Maths: $a";
echo "<br>Chemistry: $b";
echo "<br>Physics: $c";
echo "<br>English: $d";
echo "<br>Computer: $e<br>";

$total = ($a+$b+$c+$d+$e);
echo "<br>Your Total Marks:".($total)."<br>";

$percentage;
$percentage = ($a+$b+$c+$d+$e)/5;
echo "Your Percentage:".($percentage)."%<br>";  


if($percentage>80){
    echo "Congratulayions!! Your have Passed this exam with Fist Class!";
}else if($percentage>70 & $percentage<80){
    echo "Congratulayions!! Your have Passed this exam with Second Class!";
}else if($percentage>50 & $percentage<70){
    echo "Congratulayions!! Your have Passed this exam with Third Class!";
}else{
    echo "Sorry!! You are Fail!";
}





?>