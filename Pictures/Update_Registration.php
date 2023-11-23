
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>الموقع الرسمي للاستاذ الدكتور محمد حبشي حسين</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>
    <script type="text/javascript">
     
    </script>
    
    
</head>


<body lang="ar" >
<table cellspacing="10px" id="login_table" border=l; style="margin:auto;">
<?php

session_start();
include 'connect.php';
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Major=$_POST['Major'];
$Current_Date=date('Y:M:d');




?>
<tr>
<td style="text-align:center;">
 <div style="margin:auto;" >
        <img id="bahrin" src="Pictures/Updating_Arabic.jpg" " alt="حدث بياناتك">
            </div>
  </td>
  </tr>
  <tr>
<td style="text-align:center; background_color:maroon; color:white;"><h1>
حان وقت تحديث بياناتك
قبل موعد الاختبارات النهائية
<br/>
من فضلك اضغط على الرابط التالي لتحديث بياناتك
<br/>
<a href='Update_Registration_form.php' style="color:white; font-size:25px; text-decoration:none;">
اضغط هنا لتحديث بياناتك
</a>
</h1>
</td>
</tr>
</table>
</body>
</html>