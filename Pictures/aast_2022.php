<?php
session_start();
$conn=mysqli_connect("localhost", 'u947286288_hussein', 'up!HUsEN4@', "u947286288_hussein") or die("I cant connect");
$Current_Date=date('Y-m-d h:i:s');
date_default_timezone_set('Africa/Cairo');
$Current_Date=date('Y-m-d h:i:s');
$Name=$_POST['name'];
$Level=$_POST['Level'];
$Course=$_POST['Course'];
$Group=$_POST['Group'];
$Seat_Num=$_POST['Seat_Num'];
$Ques1=$_POST['rd1'];
$Ques2=$_POST['rd2'];
$Ques3=$_POST['rd3'];
$Ques4=$_POST['rd4'];
?>
<?php
echo "<img src='Pictures/Mohamed1.jpg' alt='Dr. Mohamed Habashy Hussein' width=500 height=600></img> ";
 $query1="Select * from aast_2022 where Name='$Name' and Seat_N='$Seat_Num' ";
 $results1=mysqli_query($conn, $query1);
 $rownum=mysqli_num_rows($results1);
  if($rownum>=1){
   
   echo "<table> <tr><td>";
   echo "  هذه البيانات تم تسجيلها من قبل";
   echo "</td></tr> <tr><td>";
   echo "<a href='lect1.html'>";
  echo " اضغط هنا لتصحيح البيانات"; 
  echo " </a>" ;
  echo "</td></tr></table>";
  }else{
  mysqli_query($conn, "Insert into aast_2022 (`ID`, `Name`, `Seat_N`, `Level`,`Group_N`, `Course`,  `Ques1`, `Ques2`, `Ques3`, `Ques4`) Values(NULL, N'$Name',
             '$Seat_Num','$Level', '$Group', '$Course', '$Ques1', '$Ques2', '$Ques3', '$Ques4')");
  
  echo "<h1>";
   echo " شكرا على تسجيل بياناتك";
   echo "<br>";
   echo "<a href='https://www.google.com'>";
  echo " اضغط هنا للخروج"; 
  echo " </a>" ;
  echo "</h1>";
    }
 ?>




