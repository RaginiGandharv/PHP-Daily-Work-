<?php
$connection=mysqli_connect("localhost","root","","student");

if($_POST){
    $fname=$_POST['txt1'];
    $lname=$_POST['txt2'];
    $gender=$_POST['txt3'];
    $email=$_POST['txt4'];
    $code=$_POST['txt5'];
    $phone=$_POST['txt6'];
    $address=$_POST['txt7'];
    $psw=$_POST['txt8'];
    $bloodgroup=$_POST['txt9'];
    $dob=$_POST['txt10'];

  

    $sql=mysqli_query($connection," INSERT INTO `student_info`(`fname`, `lname`, `gender`, `email`, `code`, `phone`, `address`, `psw`, `bloodgroup`, `dob`) VALUES ('$fname','$lname','$gender','$email','$code','$phone','$address','$psw','$bloodgroup','$dob')") or die('eroor'.mysqli_error($connection));

        echo "<script>
        alert('event registered successfully.');
        window.location='index.html';
        </script>";
}
else{
    echo "connection failed.";
}

?>