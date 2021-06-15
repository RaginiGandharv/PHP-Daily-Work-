<?php

$connection=mysqli_connect("localhost","root","","student");


$iddeleted=$_GET['deleteid'];

$q=mysqli_query($connection,
"delete from student_info where sno='{$iddeleted}'");

if($q){
    echo"<script>
    alert('record deleted');
    window.location='display.php';
    </script>";
}

?>