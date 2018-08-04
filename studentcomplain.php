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
$problem = $_POST['problem'];
$about = $_POST['about'];

	//$_SESSION['sid']=$sid;
	//$_SESSION['about']=$about;

if($about=='Mess')
{

$eq = "INSERT into complain values ($sid,'Mess',$problem)";
$cq = mysqli_query($con,$eq);
}
if($about=='Security')
{

$eq = "INSERT into complain values ($sid,'Security',$problem)";
$cq = mysqli_query($con,$eq);
}
if($about=='Room')
{

$eq = "INSERT into complain values ($sid,'Room',$problem)";
$cq = mysqli_query($con,$eq);
}

}
?>
<html>
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Student Complain</strong></font></legend><p><b>STID : </b><input type="text" name="stid" required/>*<br>
<b>Problem: </b><input type="text" name="problem" required/>*<br>
<input type="radio" name="about" value="Mess"> Mess
<input type="radio" name="about" value= "Security"> Security
<input type="radio" name="about" value = "Room"> Room 
<p><input type="submit" value="Submit" name="submit"/></p></div>
</fieldset>
</form>
</div>
</body>
</html> 


