<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   
   $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass","hostel");
   
   if(! $conn )
   {
      die('CANT CONNECT1' . mysqli_error());
   }
   echo "ID              ".
         "NAME            ".
         "email             ".
         "moblie                <br>";

    $retval = mysqli_query($conn,"SELECT id, username, email,mob 
   FROM users" );

   
if(! $retval )
   {
      die('CANT CONNECT' . mysqli_error());
   }
echo "<table border=\"1\">\n";
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
 {
echo "<tr>\n";
foreach($row as $value)
 {
echo "<td>\n";
echo $value;
echo "</td>\n";
}
echo "</tr>\n";
}
echo "</table>\n";
   
   
   echo "DONE\n";
   
   mysqli_close($conn);
?>

