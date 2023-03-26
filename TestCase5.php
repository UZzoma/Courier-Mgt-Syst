<?php
require_once('TestCase2.php');
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'courier_db';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");


$result = mysqli_query($link, "SELECT DISTINCT cons_no FROM tbl_courier ORDER BY cons_no;");
$num_rows = mysqli_num_rows($result);

if ($num_rows) {
    printf("TEST CASE 5 COUNTS THE NUMBER OF ROWS WITH NON DUPLICATE CONSIGNMENT NUMBERS.

   Number of Non duplicate Consignment number that exists : %d\n", $num_rows);
}
// Close the connection
mysqli_close($link);
?>
