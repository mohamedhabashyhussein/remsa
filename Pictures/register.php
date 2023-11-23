<?php
include 'connect.php';
$Fullname=$_POST['fullname'];
$Major=$_POST['Major'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
mysql_query("Insert into Register_2 (`ID`, `Fullname`, `Major', `Gender`, `Email`, `Username`, `Password`) Values(NULL, '$Fullname',
            '$Major', '$Gender', '$Email', '$Username', '$Password')") or die(mysql_error());

?>