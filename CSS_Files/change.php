<?php
include 'concent.php';
include 'menu.html';
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$query="Update Register_2 Set Username={$Username} and Password={$Password}";
$results=mysql_query($query);
if($resuls){
alert("OK");
}else{
}
?>