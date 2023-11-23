
<html lang="ar" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>
    <link type="text/css" rel="stylesheet" href="CSS_Files/Quiz_English_one.css" />
    <script type="text/javascript" src="Javascript/Quiz1.js">
    
    </script>
    
    <title></title>
    
    <?php
    include("connect.php");
    session_start();
if(!$_SESSION['quiz']){
     $url="location:default.php";
                header($url);
                exit;
}
?>
</head>

<?php

$username= $_COOKIE['Username'];

$query="Select * from Registration Where Username='$username'";
$results=mysql_query($query);
$info=mysql_fetch_assoc($results);
echo $info['Fullname'];
$score=$_POST['Score'];
// Insert The value of score in the registration table
$query1="Update Registration set F_Quiz_one='$score' Where Username='$username'";
$results=mysql_query($query1);
echo " <br/>". "<h1>";
echo $score;
echo "</h1>";
?>
<body lang="ar">
<?php
if($score>=9 && $info['Gender']=="Female"){
    echo "<img src='Pictures/Girl_Good_Exam_Results.jpg' style='margin-right:340px;'/>";
}else if ($score>=9 && $info['Gender']=="Male"){
    echo "<img src='Pictures/Boy_Good_Exam_Results1.jpg' style='margin-right:340px;'/>";
    
}else if ($score<9 && $info['Gender']=="Male"){
    echo "<img src='Pictures/Boy_Good_Exam_Results1.jpg' style='margin-right:340px;'/>";
    
}else if ($score<9 && $info['Gender']=="Female"){
    echo "<img src='Pictures/Bad_Girl_Exam_Results_2.jpg' style='margin-right:340px;'/>";
}
?>
<table id="Table_Quiz1" border="1">
        <tr><td>
        <input type="text" value="درجتك على الاختبار" style="font-size:30px;background-color:maroon;color:white;text-align:center;"/>
        </td></tr>
            <tr>
                <td>
                    <?php
                    echo "<h1>";
                    echo $info['Fullname'];
                    echo "</h1>";
                    ?>
                    
                </td></tr>
            <tr><td style="background-color:skyblue;">
            <?php
                echo  "<h1>";
                echo $score;
                echo "</h1>";
                ?>
            </td>
            </tr>
            <tr>
                <td style="font-size:30px;background-color:maroon;color:white;text-align:center;">
                    <a href="Quiz_English_one_MC.php" style="color:white;text-align:center;" >
                       هل ترغب في أخذ الاختبار مرة أخرى
                    </a>
                </td>
            </tr>
</table>
</body>
