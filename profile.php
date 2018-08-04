<?php
session_start();
error_reporting(1);

//mysql Connection
$con = mysqli_connect("localhost","root","","hostel") or die(mysqli_error());

//select database
mysqli_select_db("hostel",$con);
?>
<html>
<head>
<title>DBMS MINI PROJECT</title>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1333" height="1100" border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">NITR - ROURKELA</a></font></b><marquee direction="left" height="100%">
    </tr>
    <tr>
      <th height="317" colspan="2"><img src="data1/images/banner_01.jpg" >
</ul></div>
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div align="center"><a href="profile.php" style="text-decoration:none ; color:#010101" id="horizontalmenu li"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</b></a>
        <a href="profile.php?option=emp" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMPLOYEE</b></a>
        <a href="profile.php?option=student" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STUDENT LIST</b></a>
		<a href="profile.php?option=regis" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTRATION</b></a>
		<a href="profile.php?option=complain" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLAINMENT</b></a>

        <a href="profile.php?option=visiter" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VISITERS</b></a>
		<a href="profile.php?option=payment" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAYMENT</b></a>

        <div align="right"><a href="logout.php" style="text-decoration:none"><input type="submit" value="Logout" name="logout"></a></div></td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
    </html>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'complain':
		include('complain.php');
		break;

		case 'mess':
		include('mfees.php');
		break;
case 'room':
		include ('rfees.php');
		break;
case 'regis':
		include ('regis.php');
		break;

case 'vist':
		include ('a.php');
		break;
case 'student':
		include ('student.php');
		break;

case 'emp':
		include ('employee.php');
		break;
case 'visiter':
		include ('visit.php');
		break;
case 'payment':
		include ('payment.php');
		break;


		
	}}

	?>
	
      
      </td>
          </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b></b></center></td>
    </tr>
  </tbody>
</table>
</html>