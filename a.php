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
	$name = $_POST['sname'];
	$pay = $_POST['paied'];

	//$p = md5($pass);
	$_SESSION['sid']=$sid;
	$_SESSION['pay']=$pay;

//user check
$q = "UPDATE free SET paied=paied+$pay,needtopay=needtopay-$pay WHERE sid='$sid'";
$cq = mysqli_query($con,$q);
}

?>
<html>
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Payment Update</strong></font></legend><p><b>STID : </b><input type="text" name="stid" required/>*
<b>Paied : </b><input type="text" name="paied" required/>*<br>
<div align="right">
<p><input type="submit" value="Submit" name="submit"/></p></div>
<?php
if(isset($_POST['submit']))
{echo "<script>document.location='payment.php'</script>";
}
?>
</fieldset>
</form>
</div>
</body>
</html> 

