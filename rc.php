<html>
<head>
<title>VEHICLE REGISTRATION</title>
<style>
h3{
  font-family:Verdana, Geneva, Tahoma, sans-serif; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:white;
  text-align: center; 
  text-decoration:underline;
}

table{
  font-family: Calibri; 
  color:red; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:left; 
  background-color: rgb(225,225,0); 
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
<form action="rcins.php" name="vehicle registration" method="post">
<h3>VEHICLE REGISTRATION</h3>

<div class="class1">
  
<table  cellpadding = "10">
 
<!----- Temporary reg_no-------------------------------------------------------->
<tr>
<td>TEMPORARY REGISTER_NO</td>
 <td><input type="text" name="vehno" pattern="[A-Za-z0-9]+" required/>
(letters and numbers only)                                              

</td>
</tr>
 
<!----- Owner's Name ---------------------------------------------------------->
<tr>
<td>OWNER'S NAME</td>
<td><input type="text" name="ownname" maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
<!----- House Name---------------------------------------------------------->
<tr>
<td>HOUSE NAME</td>
<td><input type="textarea" name="housename" maxlength="50" required />
(max 50 characters a-z and A-Z)
</td>
</tr>


 
 
<!----- Dealer Name---------------------------------------------------------->
<tr>
<td>DEALER NAME</td>
<td>
<input type="text" name="dealername" maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!-----place --------------------------------------------------------->
<tr>
<td>PLACE</td>
<td>
 <input type="text" name="place"  maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Class of vehicle-------------------------------------------------------->
<tr>
<td>CLASS OF VEHICLE</td>
<td>
    <select name="cars">
        <option value="-1" selected>.....select.....</option>
        <option value="M/C With Gea">M/C With Gear</option>
        <option value="LMV">LMV</option>
        <option value="HMV">HMV</option>
        <option value="HGMV">HGMV</option>
        <option value="Trailer">Trailer</option>
      </select> 
  
</td>
</tr>
<!----- Type of  body-------------------------------------------------------->
<tr>
<td>TYPE OF BODY</td>
<td>
    <select name="BODY">
        <option value="-1" selected>.....select.....</option>
        <option value="HATCHBACK">HATCHBACK</option>
        <option value="SPORTS CAR">SPORTS CAR</option>
        <option value="FOUR-DOOR SEDAN">FOUR-DOOR SEDAN</option>
        <option value="LIMOUSINE">LIMOUSIN</option>
        <option value="COVERTIBLE">COVERTIBLE</option>
 <option value="HARDTOP">HARDTOP</option>
 <option value="VAN">VAN</option>
 <option value="PICK_UP TRUCK">PICK_UP TRUCK
</option>
      </select> 
  
</td>
</tr>
<!-----Manufacture--------------------------------------------------------->
<tr>
<td>MANUFACTURE</td>
<td>
 <input type="text" name="manufature"  maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!-----Number of cylinders---------------------------------------------->
<tr>
<td>NUMBER OF CYLINDERS</td>
<td>
 <input type="text" name="cylinder"  maxlength="30" required />
</td>
</tr>
<!-----Cubic capacity---------------------------------------------->
<tr>
<td>CUBIC CAPACITY</td>
<td>
 <input type="text" name="cubiccapacity"  maxlength="30" required />
</td>
</tr>

<!-----Chain no---------------------------------------------->
<tr>
<td>CHASIS NUMBER</td>
<td>
 <input type="text" name="chno"  maxlength="30" required />
</td>
</tr>
<!-----Engine Number---------------------------------------------->
<tr>
<td>ENGINE NUMBER</td>
<td>
 <input type="text" name="engno"  maxlength="30" required />
</td>
</tr>

<!-----Fuel Type------------------------------------------------------->
<tr>
<td>FUEL TYPE</td>
<td>
    <select name="ftype">
        <option value="PETROL">PETROL</option>
        <option value="DIESEL">DIESEL</option>
  
      </select> 

</td>
</tr>

 
<!-----COLOUR------------------------------------------------------->
<tr>
<td>COLOUR</td>
<td>
    <select name="vcolor">
        <option value="BLACK">BLACK</option>
        <option value="BLUE">BLUE</option>
        <option value="WHITE">WHITE</option>
        <option value="GREEN">GREEN</option>
        <option value="SILVER">SILVER</option>
 <option value="YELLOW">YELLOW</option>
 <option value="RED">RED</option>
      </select> 
  
</td>
</tr>
<!-----Finance --------------------------------------------------------->
<tr>
<td>FINANCE</td>
<td>
 <input type="text" name="finance"  maxlength="30" required />
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