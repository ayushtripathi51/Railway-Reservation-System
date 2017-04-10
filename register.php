<?php
session_start();
require('firstimport.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['psd'];
$mail=$_POST['eid'];
$gender=$_POST['gnd'];
$marital=$_POST['mrt'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];


$sql="INSERT INTO $tbl_name(f_name,l_name,password,email,gender,marital,dob,mobile,ques,ans)
VALUES ('$fname','$lname','$pass','$mail','$gender','$marital','$dob','$mobile','$ques','$ans')";
$result=mysql_query($sql);

$_SESSION['name']=$fname;
header("location:index.php");
//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>