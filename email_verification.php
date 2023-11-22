<?php
 include("connect.php");
 
 $conn=mysqli_connect("localhost", "u947286288_hussein", "up!HUsEN4@", "u947286288_hussein") or die("I cant connect");

 $Username=$_COOKIE['Username'];
 $Password=$_COOKIE['Password'];
 $query="Select * from Registration_2022 where Username='$Username'  and Password='$Password' ";
      $results=mysqli_query($conn, $query);
      $Status=mysqli_fetch_assoc($results);
      $Fullname=$Status['Fullname'];
 ?>
 <!-- هذا لحساب الوقت اللازم  -->
 <?php 
   
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>التحقق من البريد الإليكتروني</title>
     
</head>
<body dir="rtl" style="height:90vh;">
      <table border="l" style="background-color:lightgreen; margin:auto;  height:80vh; margin-top:5px;text-align:center;">
      <tr><td>
<img src="../Pictures/shockpng.png" alt="" width="150px" height="150px">
</td></tr>
      <tr><td>
      <h2 style="margin:auto; margin-top:20px; padding=5px;">
            هذا البريد الإليكتروني تم تسجيله من قبل بالبيانات التالية: 
      </h2>
      </td></tr>
      <tr><td>
   <?php
echo "<h2> الاسم :". $Status['Fullname'] ."</h2>";
echo "</td></tr><tr><td ><h1>  البريد الإليكتروني : ". $Status['Email'] ."</h1>";
echo "</td></tr><tr> <td ><h2>  إذا كان ذلك هو بريدك الأليكتروني وهناك شخص اخر سجله باسمك من فضلك بلغ الدكتور على الفور </h2>";
   ?>
      </td></tr>
      <tr><td>
            <a href="../index.php"><h3> اضغط هنا للخروج من الموقع </h3></a>
      </td></tr>
      </table>
</body>
</html>