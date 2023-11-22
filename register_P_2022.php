<?php
session_start();
$conn = mysqli_connect("localhost", 'u947286288_hussein', 'up!HUsEN4@', "u947286288_hussein") or die("I cant connect");
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Current_Date = date('Y-m-d h:i:s');
setcookie("Username", $Username, time() + (60*60*24));
setcookie("Password", $Password, time() + (60*60*24));
date_default_timezone_set('Africa/Cairo');
$Current_Date = date('Y-m-d h:i:s');
$Fullname = $_POST['Fullname'];
setcookie("Fullname", $Fullname, time() + (60*60));
$Major = $_POST['Major'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Seat_N = $_POST['Seat_N'];
$Course = $_POST['Course'];
if(($Major=='Childhood_Second_Grade') || ($Major=='Second_Grade')  || ($Course=='physiology') ){
  include("Registration_Closed.php");
 exit();
}
$query2 = "Select Email from Registration_2022 where  Email='$Email' ";
$results2 = mysqli_query($conn, $query2);
if(mysqli_num_rows($results2)>=1 ){
    include("email_verification.php");
    exit();
}
$query3 = "Select Username, Password, Email  from Registration_2022 where Username='$Username'  and Password='$Password' and Email='$Email' ";
$results3 = mysqli_query($conn, $query3);

if (mysqli_num_rows($results3) == 0) {
    mysqli_query($conn, "Insert into Registration_2022 (`ID`, `Fullname`, `Major`, `Gender`, `Seat_N`, `Course`, `Email`, `Username`, `Password`) Values(NULL, N'$Fullname',
            '$Major', '$Gender', '$Seat_N', N'$Course', '$Email', '$Username', '$Password')");

    $_SESSION['username']=$_COOKIE['Username'];
    header("location:physiology_2022.php");
} else if(mysqli_num_rows($results3) == 1) {
    $_SESSION['username']=$_COOKIE['Username'];
   header("location:physiology_2022.php");
}else{
    session_destroy();
     header("location:registration_form_2022.php");
}
?>




