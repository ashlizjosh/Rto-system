<?php
session_start();
$vno=$_POST['vehno'];
$own=$_POST['ownname'];
$hme=$_POST['housename'];
$deal=$_POST['dealername'];
$plce=$_POST['place'];
$vclz=$_POST['cars'];
$btpe=$_POST['BODY'];
$manf=$_POST['manufature'];
$cylin=$_POST['cylinder'];
$ccity=$_POST['cubiccapacity'];
$cno=$_POST['chno'];
$eno=$_POST['engno'];
$ftpe=$_POST['ftype'];
$vclr=$_POST['vcolor'];
$fin=$_POST['finance'];
$conn=mysqli_connect("localhost","root","","rto") or die("failed:".mysqli_connect_error());
$rcinto=mysqli_query($conn,"insert into vehicle_reg(tmprno,oname,hname,dname,place,vehclz,btype,manufacture,cylindrno,cubicpcty,chaisisno,engineno,fuel_type,color,finance) values('$vno','$own','$hme','$deal','$plce','$vclz','$btpe','$manf','$cylin','$ccity','$cno','$eno','$ftpe','$vclr','$fin')") or die(mysqli_error($conn));
if($rcinto)
//echo '<script language="javascript">echo '</script>';';
echo ("Saved successfully ");

$conn->close();
?>