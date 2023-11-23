<html lang="ar">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body dir="rtl">
<?php
include("connect.php");
$Questions=$_POST['Questions'];
$Answers=$_POST['Answers'];
$query="select * from Readings where Answers='$Answers' and  Questions='$Questions'";
$resutls=mysql_query($query);
if(mysql_num_rows($resutls)==0){
mysql_query("Insert into Readings (`ID`, `Questions`, `Answers`) Values(NULL, '$Questions',
            '$Answers')") or die(mysql_error());
header("location:create_Complete.php");
}else{
    echo "<h1> نفس البيانات أدخلت من قبل </h1>";
}
?>
</body>
</html>