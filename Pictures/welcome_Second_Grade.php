<?php
    include("check_login.php");
    ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>
 ترحيب

</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>


</head>

<body lang="ar">
    <table id="table_welcome" border="l">
    
    <tr><td colspan=3>
<a href="Medals_Second_Grade.php" >
    <img src="Pictures/Type_one.PNG" style="width:300px;float:right; height:200px;"/>
    
    <h2 style="color:white;">
        أضغط لتشاهد فيديو يوضح الخطأ من النوع الأول والخطأ من النوع الثاني
</h2>
    </a>
</td></tr>
    
<tr>
    <td colspan=3>
   
   <br/>
   لقد تم تفعيل اشتراكك بنجاح
    <br/>
   <?php
   include 'connect.php';
   $Un=$_COOKIE['Username'];
   $query="Select Fullname,  Email,  Last_Visiting from Registration where Username='$Un'";
   $results=mysql_query($query);
   $rows=mysql_fetch_assoc($results);
   ?>
      
</td>
</tr>
    <tr>
<td colspan=3>
  <?php
  echo "<h1>".$rows['Fullname']."</h1>";
  ?>
    
  
    
</td>
</tr>
<tr>
<td colspan=3>
<img src="Pictures/Physiology_3.jpg"/>
<br/>
    <ul style="font-size:20px; text-align: center;">
        <li>مقرر علم النفس الفسيولوجي</li>
        
    </ul>
</td>
</tr>
<tr>
<td colspan=3>

    <a href="Pictures/Z-Score.png">
        <h2 style="color:white;">
      حمل الجدول الإحصائي الأول
    </h2></a>
</td>
</tr>
<tr>
<td colspan=3>
<img src="Pictures/Quiz2.jpg"/>
<br/>
    <a href="Quiz_One_Instruction.php">
        <h2 style="color:white;">
        التدريب الأول مدته خمس دقائق
    </h2></a>
</td>
</tr>
<tr>
<th>
الحالة
</th>
<th>
البريد الإلكتروني
</th>
<th>
أخر زيارة لكي للموقع في 
</th>
</tr>
<td>
<?php
echo "<h1>. نشط.</h1>"
?>
</td>
<td>
<?php
echo $rows['Email'];
?>
</td>
<td>
<?php
echo $rows['Last_Visiting'];
?>
</td>
</tr>
</table>
</body>
</html>
