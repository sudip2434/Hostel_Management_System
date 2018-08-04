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
	$leave = $_POST['leaveday'];

	//$p = md5($pass);
	$_SESSION['sid']=$sid;

$q = "UPDATE student s set s.dayleave=s.dayleave+'$leave' where s.stid='$sid'";
$p = "UPDATE free s set s.feeminus=s.feeminus+'$leave'*1000 where s.sid='$sid'";
$z = "UPDATE free s set s.needtopay=s.needtopay-'$leave'*1000 where s.sid='$sid'";

$cq = mysqli_query($con,$q);
$cp = mysqli_query($con,$p);
$cz = mysqli_query($con,$z);
}

?>
<html>
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Student registration</strong></font></legend><p><b>STID : </b><input type="text" name="stid" required/>*<br>

<b>Day Leave : </b><input type="text" name="leaveday" required/>*<br>
<div align="right">


<p><input type="submit" value="Submit" name="submit"/></p></div>
</fieldset>
</form>
</div>
</body>
</html> 

