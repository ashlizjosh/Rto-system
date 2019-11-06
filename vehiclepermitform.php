<html>
<head>
<title>VEHICLE PERMIT</title>
<style>
h3{
  font-family:Verdana, Geneva, Tahoma, sans-serif; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:blue;
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
  background-color: rgb(225,0,0); 
  border-collapse: collapse;
  border-radius: 20px; 
  
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
<form action="vehiclepermit.php" name="permit request" method="post">
<h3>VEHICLE PERMIT</h3>

<div class="class1">
  
<table  cellpadding = "10">
 
<!----- Name---------------------------------------------------------->
<tr>
<td>NAME</td>
<td><input type="text" name="nme" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Vehicle number ---------------------------------------------------------->
<tr>
<td>VEHICLE NUMBER</td>
<td><input type="text" name="vehno" pattern="[A-Za-z0-9]+" required/>
(letters and numbers only)
</td>
</tr>
 
<!----- vechicle type -------------------------------------------------------->
<tr>
<td>VEHICLE TYPE</td>
<td>
    <select name="vehicle">
     
    <option value="select">.....select.....</option>
       <option value="CAR">CAR</option>
        <option value="BUS">BUS</option>
        <option value="BIKE">BIKE</option>

        <option value=" VAN">VAN
</option>
        <option value="LORRI">LORRI</option>
      </select> 
  
</td>
</tr>
 
 
<!----- Seating capacity ---------------------------------------------------------->
<tr>
<td>SEATING CAPACITY</td>
<td>
    <select name="seat">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="6">6</option>	  
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="12">12</option>
    <option value="25">25</option>
    <option value="30">30</option>
      </select> 
  
</td>
</tr>
 
 
<!----- Permit Type ---------------------------------------------------------->
<tr>
<td>PERMIT TYPE</td>
<td>
<input type="PEMIT TYPE" name="PERMITTYPE" maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date of Permit ----------------------------------------------------------->
<tr>
<td>DATE OF PERMIT</td>
<td>
 <input type="DATE" name="pdate"  required />
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

 
</body>
</html>