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
echo "<h1>";
echo $rows['Fullname'];
echo $rows['F_Quiz_one'];

echo "</h1>";
}
?>
<h1>
    لم تحقق شرط الحصول على ثمان درجات على الاختبار الأول
</h1>

</body>
</html>
