<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>
 ترحيب

</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>


</head>


<body>
<?php
include("connect.php");
include("menu.html");
$Username=$_COOKIE['Username'];
$Password=$_COOKIE['Password'];
$query="Select * from Registration where Username='$Username' and Password='$Password'";
$results=mysql_query($query);
if(mysql_num_rows($results)==1){
$rows=mysql_fetch_assoc($results);
echo "<img src='Pictures/Prohibited.jpg' style='margin:auto; width:200px; height:200px;'/>";
echo "<h1 style='color:white; text-align:center;'>";
echo $rows['Fullname'];
echo "<br/>";
echo $rows['S_Quiz_one'];

echo "</h1>";
}
?>
<img src='Pictures/Prohibited.jpg' style='margin:auto; width:200px; height:200px;'/>
<h1 style='color:white; text-align:center;'>
    لقد ضيعت فرصك في حل الاختبار الثاني
    <br/>
   ستحرم من دخول الموقع لمدة اسبوعين
</h1>

</body>
</html>
