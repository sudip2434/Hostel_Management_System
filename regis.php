<?php
session_start();
error_reporting(1);


//mysql Connection
$con = mysqli_connect("localhost","root","","hostel") or die(mysqli_error());

//select database
mysqli_select_db("hostel",$con);
if(isset($_POST['submit']))
{
	$sid = $_POST['stid'];
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$moblie = $_POST['moblie'];

	//$p = md5($pass);
	$_SESSION['sid']=$sid;
	$_SESSION['pay']=$pay;

$q = "INSERT into student (stid,name,rollno,dob,gender,address, contact_no) values ('$sid', '$name', '$roll' , '$dob', '$gender', '$address','$moblie')";
$cq = mysqli_query($con,$q);
}

?>
<html>
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Student registration</strong></font></legend><p><b>STID : </b><input type="text" name="stid" required/>*<br>
<div align="left"><b>Name : </b><input type="text" name="name" required/>*<br></div>
<b>Roll no : </b><input type="text" name="roll" required/>*<br>
<b>DOB : </b><input type="text" name="dob" required/>*<br>
<b>Gender : </b><input type="text" name="gender" required/>*<br>
<b>Address : </b><input type="text" name="address" required/>*<br>
<b>Mobile : </b><input type="text" name="moblie" required/>*<br>

<div align="right">


<p><input type="submit" value="Submit" name="submit"/></p></div>
</fieldset>
</form>
</div>
</body>
</html> 

