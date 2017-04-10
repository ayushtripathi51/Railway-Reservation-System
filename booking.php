<?php


session_start();
require('firstimport.php');
$tbl_name="booking";

mysqli_select_db($conn,"$db_name") or die("cannot select db");


$uname=$_SESSION['name'];
$num=$_GET['tno'];
$seat= $_GET['selct'];
$name=$_GET['name1'];
$age=$_GET['age1'];
$sex=$_GET['sex1'];
$fromstn=$_GET[	'fromstn'];
$tostn=$_GET['tostn'];
$doj=$_GET['doj'];
$dob=$_GET['dob'];
echo "..".$num."..".$name."..".$age."..".$sex."..".$seat."..";

if(!empty($name) || !empty($age) )
{
$sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex)
VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name','$age','$sex')";
$result=$conn->query($sql);
echo "$sql</br>";
if(!$result) die ($conn->error);

}



$name=$_GET['name2'];
$age=$_GET['age2'];
$sex=$_GET['sex2'];
if(!empty($name) || !empty($age) )
{
$sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex)
VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name','$age','$sex')";
$result=$conn->query($sql);
echo "$sql</br>";
if(!$result) die ($conn->error);

}



$name=$_GET['name3'];
$age=$_GET['age3'];
$sex=$_GET['sex3'];
if(!empty($name) || !empty($age) )
{
$sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex)
VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name','$age','$sex')";
$result=$conn->query($sql);
echo "$sql</br>";
if(!$result) die ($conn->error);
}

$name=$_GET['name4'];
$age=$_GET['age4'];
$sex=$_GET['sex4'];
if(!empty($name) || !empty($age) )
{
$sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex)
VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name','$age','$sex')";
$result=$conn->query($sql);
echo "$sql</br>";
if(!$result) die ($conn->error);
}

$name=$_GET['name5'];
$age=$_GET['age5'];
$sex=$_GET['sex5'];
if(!empty($name) || !empty($age) )
{
$sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex)
VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name','$age','$sex')";
$result=$conn->query($sql);
echo "$sql</br>";
if(!$result) die ($conn->error);

}


echo("file succesfully inserted");




header("location:display.php?tno='$num'&& doj='$doj'&& seat='$seat'");


?>
