<html>
<div align="center">
<h1 style="color:#5B5B5B"><u>STUDENT LIST</u></h1>
<table width="1045" height="213" border="1">
<tbody>
	<tr>
      <td width="141" height="35"><center>STID</center></td>
      <td width="121"><center>NAME</center></td>
      <td width="200"><center>Roll NO</center></td>
      <td width="133"><center>Date of Birth</center></td>
<td width="100"><center>Gender</center></td>
<td width="100"><center>Address</center></td>
<td width="100"><center>Mobile no</center></td>

    </tr>
    
    
<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   
   $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass","hostel");
   
   if(! $conn )
   {
      die('CANT CONNECT1' . mysqli_error());
   }

    $retval = mysqli_query($conn,"SELECT stid, name, rollno, dob, gender, address,contact_no FROM student" );

   
if(! $retval )
   {
      die('CANT CONNECT' . mysqli_error());
   }
?>
<?php
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
   {
?>	
	<tr>
 <td height="57"><center><?php echo "{$row['stid']}"?></center></td>
      <td><center><?php echo "{$row['name']}"?></center></td>
      <td><center><?php echo "{$row['rollno']}"?></center></td>
      <td><center><?php echo "{$row['dob']}"?></center></td>
<td><center><?php echo "{$row['gender']}"?></center></td>
<td><center><?php echo "{$row['address']}"?></center></td>
<td><center><?php echo "{$row['contact_no']}"?></center></td>

    </tr>
<?php   
}
  
   
   mysqli_close($conn);
?>
</tbody>
</table>
</div>



