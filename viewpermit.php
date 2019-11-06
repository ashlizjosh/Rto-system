<html>
<head>
<title>VIEW PERMIT DETAILS</title>

<?php
  session_start();
 if(!empty($_POST)){

  $val=$_POST['vehicle_no'];
  $conn=mysqli_connect("localhost","root","","rto") or die("failed:" . mysqli_connect_error());
  
 $sql2="select * from vehicle_permit where Vehino='$val'";
      
      $sql=mysqli_query($conn,$sql2);
      if($sql==true){
      echo "<table style='width:100%;'><TR style='font-size:30px'><TD colspan='7' ><CENTER><B>PERMIT STATUS<hr></td><tr style='font-size:20px'><td>Owner's Name<hr></td><td width:100%>Vehicle Type<hr></td><td>Seating Capacity<hr></td><td>Permit Type<hr></td><td>Expiry Date<hr></td></tr>";
      while ($row1 = mysqli_fetch_array($sql))
  {
    $date=strtotime($row1['permitdate']);
    $d=date('Y',$date);
    $d=$d+1;
    $ret=date('d/m/',$date);
    echo "<tr><td>".$row1['Name']."</td><td>".$row1['vehitype']."</td><td>".$row1['seating']."</td><td>".$row1['permit']."</td><td>".$ret.$d."</td></tr>";;
  }
  echo "</table>";
 }
  else{
   echo ("Invalid register number");
  }
} 
?>
</body>
</html>