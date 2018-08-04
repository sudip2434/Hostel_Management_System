<html>
<table>
<div align="left">

<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Student Check</strong></font></legend><p><b>STID : </b><input type="text" name="stid" required/>*
<b>Name : </b><input type="text" name="name" required/>*<br>
<p></p>
<div align="right"><input type="submit" value="Submit" name="submit"/></p>
</fieldset>
</form>
</div>
</table>

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
	$name = $_POST['name'];

	//$p = md5($pass);
	$_SESSION['sid']=$sid;
	$_SESSION['name']=$name;

//user check
$q = "SELECT * FROM student S,free V where S.stid=V.sid and S.stid='$sid' and S.name='$name'";
$cq = mysqli_query($con,$q);
if(! $cq )
   {
      die('CANT CONNECT' . mysqli_error());
   }


?>
<table width="945" height="213" border="1">

	<tr>
      <td width="141" height="35"><center>STID</center></td>
      <td width="121"><center>STUDENT NAME</center></td>
      <td width="200"><center>Roll NO</center></td>
      <td width="133"><center>ROOM FEE</center></td>
<td width="100"><center>MESS FEE</center></td>
<td width="100"><center>PAIED</center></td>
<td width="100"><center>NEED TO PAY</center></td>

    </tr>

<?php
   while($row = mysqli_fetch_array($cq, MYSQLI_ASSOC))
   {
?>	
	<tr>

 <td height="57"><center><?php echo "{$row['stid']}"?></center></td>
      <td><center><?php echo "{$row['name']}"?></center></td>
      <td><center><?php echo "{$row['rollno']}"?></center></td>
      <td><center><?php echo "{$row['roomfee']}"?></center></td>
<td><center><?php echo "{$row['messfee']}"?></center></td>
<td><center><?php echo "{$row['paied']}"?></center></td>
<td><center><?php echo "{$row['needtopay']}"?></center></td>

    </tr>

</table>
<?php   
}
  }
   
   mysqli_close($conn);

?>


</html> 


