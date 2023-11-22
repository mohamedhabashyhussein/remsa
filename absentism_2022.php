<?php
session_start();
$conn=mysqli_connect("localhost", 'u947286288_hussein', 'up!HUsEN4@', "u947286288_hussein") or die("I cant connect");
$Current_Date=date('Y-m-d h:i:s');
date_default_timezone_set('Africa/Cairo');
$Current_Date=date('Y-m-d h:i:s');
$Name=$_POST['name'];
$Major=$_POST['Major'];
$Seat_Num=$_POST['Seat_Num'];
$Ques1=$_POST['rd1'];
$Ques2=$_POST['rd2'];
$Ques3=$_POST['rd3'];
?>
<?php

 $query1="Select * from Absentism_2022 where Name='$Name' and Seat_Id='$Seat_Num' ";
 $results1=mysqli_query($conn, $query1);
 $rownum=mysqli_num_rows($results1);
  if($rownum>=1){
   echo "<h1>";
   echo "  هذه البيانات تم تسجيلها من قبل";
   echo "<br>";
   echo "<a href='lect1.html'>";
  echo " اضغط هنا لتصحيح البيانات"; 
  echo " </a>" ;
  echo "</h1>";
  }else{
  mysqli_query($conn, "Insert into Absentism_2022 (`ID`, `Name`, `Seat_Id`, `Major`, `Ques1`, `Ques2`, `Ques3`) Values(NULL, N'$Name',
             '$Seat_Num','$Major', '$Ques1', '$Ques2', '$Ques3')");
  
  echo "<h1>";
   echo " شكرا على تسجيل بياناتك";
   echo "<br>";
   echo "<a href='https://www.google.com'>";
  echo " اضغط هنا للخروج"; 
  echo " </a>" ;
  echo "</h1>";
    }
 ?>




