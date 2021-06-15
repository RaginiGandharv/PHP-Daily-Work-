<?php

$connection=mysqli_connect("localhost","root","","student");

$updated=$_GET['updateid'];

$q=mysqli_query($connection,"update student_info set is_delete = 1 where sno = '{$updated}'");

// $data=mysqli_fetch_array($q);

if($q){
  echo"<script>
  alert('record deleted');
  window.location='display.php';
  </script>";
}

?>