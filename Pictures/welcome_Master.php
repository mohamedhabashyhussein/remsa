<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>
 ترحيب

</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>


</head>

<body lang="ar">
<a href="medals.php">
    <img src="Pictures/Trophy.jpg" style="float:right;width:100px;"/>
    <h1>
        أضغط لتعرف أسماء افضل ثلاث طلاب
    </h1>
    </a>
    <table id="table_welcome" border="l">
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
    <ul style="font-size:20px; text-align: center;">
        <li>مقرر قراءات في علم النفس باللغة الإنجليزية</li>
        
    </ul>
</td>
</tr>
<tr>
<td colspan=3>
    <a href="Quiz_English_one.php">
        <h2 style="color:white;">
        التدريب الأول مدته خمس دقائق
    </h2></a>
</td>

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
