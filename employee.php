<html>
<div align="center">
<h1 style="color:#5B5B5B"><u>EMPLOYEE</u></h1>
<table width="1045" height="213" border="1">
<tbody>
	<tr>
      <td width="241" height="35"><center>ID</center></td>
      <td width="121"><center>NAME</center></td>
      <td width="500"><center>Email</center></td>
      <td width="133"><center>Mobile no</center></td>
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

    $retval = mysqli_query($conn,"SELECT id, username, email,mob 
   FROM users" );

   
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
 <td height="57"><center><?php echo "{$row['id']}"?></center></td>
      <td><center><?php echo "{$row['username']}"?></center></td>
      <td><center><?php echo "{$row['email']}"?></center></td>
      <td><center><?php echo "{$row['mob']}"?></center></td>
    </tr>
<?php   
}
  
   
   mysqli_close($conn);
?>
</tbody>
</table>
</div>


