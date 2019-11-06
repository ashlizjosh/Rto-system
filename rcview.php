<html>
<head>
<title>VIEW FOR VEHICLE REGISTRATION  DETAILS</title>
<style>
h3{
  font-family:Verdana, Geneva, Tahoma, sans-serif; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:red;
  text-align: center; 
  text-decoration:underline;
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:left; 
  background-color: rgb(225,175,0); 
  border-collapse: collapse;
  border-radius: 10px; 
  
}
table.inner{
  border: 0px
}
.class1
{
  background-color: black;
  background-image: url("images/2018041799.jpg");
   padding:50px;
   background-repeat: no-repeat;
   background-size: 100% 100%;
}

</style>
</head>

<body style="background-color: black;">
<form name="rcdetails" action="viewrc.php" method="post">
<h3>VIEW FOR VEHICLE REGISTRATION  DETAILS</h3>

<div class="class1">
  
<table  cellpadding = "10">
 
<!----- Temporary reg_no-------------------------------------------------------->
<tr>
<td>TEMPORARY REGISTER_NO</td>
 <td><input type="text" name="vehicle_no" pattern="[A-Za-z0-9]+" required/>
(letters and numbers only)                                              

</td>
</tr>
 

 

<!----- Submit and Reset ------------------------------------------------->

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
<div style="margin-left:125px; padding: 20px;">
    <form>
      <input type="button" value="Go back!" onclick="history.back()" style="color: rgb(218, 64, 18);background: aliceblue;width: 150px;height: 30px;">
      </form>
</div>


 </div>
 <center>
   
 
</center>

 
</body>
</html>