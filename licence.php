<html>
<head>
<title>License Registration Form</title>
<style>
  
  h3{
  font-family:Verdana, Geneva, Tahoma, sans-serif; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:steelblue;
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
  background-color: rgb(250, 144, 44); 
  border-collapse: collapse;
  border-radius: 20px; 
  
}
table.inner{
  border: 0px
}
.class1
{
  background-color: black;
  background-image: url("2018041799.jpg");
   padding:50px;
   background-repeat: no-repeat;
   background-size: 100% 100%;
}
}
</style>
</head>
 
<body style="background-color: darkkhaki;">

<form action="licenceinsrt.php" name="licence details" method="post">

<h3>LICENSE REGISTRATION FORM</h3>

<div class="class1">
  
<table  cellpadding = "10">
 
<!----- Learner's Id ---------------------------------------------------------->
<tr>
<td>LEARNER'S ID</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Name ---------------------------------------------------------->
<tr>
<td>APPLICANT NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE</td>
 
<td>
<input type="date" name="date1"><br>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td> 
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>HOUSE NAME </td>
<td><input type="text" name="Address" maxlength="30" />
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
  <td>POST OFFICE</td>
  <td><input type="text" name="PO" maxlength="30" />
  (max 30 characters a-z and A-Z)
  </td>
  </tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>CLASS OF VEHICLE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
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
<div style="margin:15px; padding:20px;">
    <form>
        <input type="button" value="Go Back!" onclick="history.back()" style="color:rgb(255,145,0); background:rgb(19,209,209);width:150px; height:30px;">
</form>
</div>

 </div>
</form>
 
</body>
</html>