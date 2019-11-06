<?php
session_start();
//$appno=$_POST['1002'];
$lid=$_POST['First_Name'];
$name=$_POST['Last_Name'];
$gmail=$_POST['Email_Id'];
$mobile=$_POST['Mobile_Number'];
$gender=$_POST['Gender'];
$house=$_POST['Address'];
$city=$_POST['City'];
$postoff=$_POST['PO'];
$pcode=$_POST['Pin_Code'];
$classveh=$_POST['State'];
$dt=$_POST['date1'];
$conn=mysqli_connect("localhost","root","","rto") or die("failed:".mysqli_connect_error());
$licenceinto=mysqli_query($conn,"insert into licence(appno,learnersid,name,email,mob,gen,hname,place,po,pin,vehclass,dte) values('2896','$lid','$name','$gmail','$mobile','$gender','$house','$city','$postoff','$pcode','$classveh','$dt')") or die(mysqli_error($conn));
if($licenceinto)
//echo '<script language="javascript">echo '</script>';';
echo ("Saved successfully ");

$conn->close();
?>