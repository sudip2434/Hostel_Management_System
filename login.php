<html>
<head>
<body style="background-color:#E5E5E5">
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #E5E5E5;"><legend><font size="+2"><strong>Login Panel</strong></font></legend><p><b>UserName : </b><input type="text" name="uname" required/>*</p>
<p><b>Password : </b><input type="password" name="upass" required/>*</p><br>
<p><input type="submit" value="Login" name="login"/></p>
</fieldset>
</form>
</div>
</body>
</head>
</html> 

<?php
session_start();
error_reporting(1);


//mysql Connection
$con = mysqli_connect("localhost","root","","hostel") or die(mysqli_error());

//select database
echo "1";
if(isset($_POST['login']))
{
	$u = $_POST['uname'];
	$pass = $_POST['upass'];
	//$p = md5($pass);
	//$_SESSION['user']=$u;
	//$_SESSION['pass']=$pass;
//user check
//$q = "SELECT * FROM users WHERE username='test' AND password='qwe' ";
//$cq = mysqli_query($con,"SELECT * FROM users );

$retval = mysqli_query($con,"SELECT * FROM users WHERE username='$u' AND password='$pass'");
   $ret = mysqli_num_rows($retval);
   
if($ret == true)
{
	echo "<script>document.location='profile.php'</script>";
	//echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
}
else
{
	echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}
}

?>
