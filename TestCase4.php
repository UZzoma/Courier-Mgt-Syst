<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'courier_db';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$sql = "SELECT * from tbl_offices";
  
if ($result = mysqli_query($link, $sql)) {

// Return the number of rows in result set
$rowcount = mysqli_num_rows( $result );
  
// Display result
printf("TEST CASE 4 COUNTS THE NUMBER OF OFFICES IN THE SYSTEM.

Total offices that are running are : %d\n", $rowcount);
}

// Close the connection
mysqli_close($link);
?>