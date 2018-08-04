<html>
<div align="center">
<h1 style="color:#5B5B5B"><u>PAYMENT LIST</u></h1>
<table width="1045" height="213" border="1">
<tbody>
	<tr>
      <td width="141" height="35"><center>STID</center></td>
      <td width="121"><center>STUDENT NAME</center></td>
      <td width="200"><center>Roll NO</center></td>
      <td width="133"><center>ROOM FEE</center></td>
<td width="100"><center>MESS FEE</center></td>
<td width="133"><center>MINUS FEE</center></td>
<td width="100"><center>PAIED</center></td>
<td width="100"><center>NEED TO PAY</center></td>

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

    $retval = mysqli_query($conn,"SELECT * FROM student S,free V where S.stid=V.sid " );

   
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
      <td><center><?php echo "{$row['roomfee']}"?></center></td>
<td><center><?php echo "{$row['messfee']}"?></center></td>
<td><center><?php echo "{$row['feeminus']}"?></center></td>
<td><center><?php echo "{$row['paied']}"?></center></td>
<td><center><?php echo "{$row['needtopay']}"?></center></td>

    </tr>

<?php   
}
  
   
   mysqli_close($conn);

?>
<?php

?>
</tbody>
</table>

<?php
    		include('a.php');


	?>

</div>





