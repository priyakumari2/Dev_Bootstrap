<?php

$dbconn3="host=localhost port=5432 dbname=celebration user=psql2 password=psql2";

$conn=pg_connect($dbconn3);

$Email = $_POST["Email"]; 
$Password = $_POST["Password"]; 

$result1 = pg_query($conn,"SELECT email FROM login WHERE email = '".$Email."'");
$row1 = pg_fetch_row($result1);
print_r($row1[0]);

$result2 = pg_query($conn,"SELECT password FROM login WHERE password = '".$Password."'");
$row2 = pg_fetch_row($result2);
print_r($row2[0]);

if($Email==$row1[0] && $Password==$row2[0])
{
	echo 'Successfully logged in!!';
}
else
{
	echo 'Try again!!';
}

?>
