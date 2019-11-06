<?php
session_start();

$name=$_POST['nme'];
$vno=$_POST['vehno'];
$vtype=$_POST['vehicle'];
$capacity=$_POST['seat'];
$ptpe=$_POST['PERMITTYPE'];
$dt=$_POST['pdate'];
$conn=mysqli_connect("localhost","root","","rto") or die("failed:".mysqli_connect_error());
$vehicle_permit=mysqli_query($conn,"insert into vehicle_permit (Name,Vehino,vehitype,seating,permit,permitdate) values('$name','$vno','$vtype','$capacity','$ptpe','$dt')") or die(mysqli_error($conn));
if($vehicle_permit)
echo '<script language="javascript">';
echo 'alert("Saved successfully ")';

echo '</script>';
$conn->close();
?>