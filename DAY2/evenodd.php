<?php
// check whether the number is even or not 
function evenodd($num){
    if($num%2==0){
        return 0;
    }
    return 1;
}
$num=17;
$flag=evenodd($num);
if($flag==0){
    echo $num." is a even number";
}
else{
    echo $num." is a odd number";
}

?>