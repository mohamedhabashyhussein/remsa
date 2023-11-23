
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>الموقع الرسمي للاستاذ الدكتور محمد حبشي حسين</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>
    <script type="text/javascript" src="Javascript/default.js">
        
    </script>
    
    
</head>
<body>
<?php
include("connect.php");
$query="Select * from Registration where Major='Fourth_Grade' and F_Quiz_One>0 order by F_Quiz_One DESC";
$results=mysql_query($query);
$l=1;
echo "<img src='Pictures/Medals.jpg' style='width=200px; height:200px; margin-left:500px;padding:5px;'/>";

echo "<h1 style='font-weight:bolder; background-color:midnightblue; text-align:center;padding:20px;color:white;width:600px; margin:auto; border:solid white 5px;'> لوحة الشرف لطلاب وطالبات الفرقة الرابعة علم نفس";
echo " <br/>  تتضمن الطلاب الذين تزيد درجاتهم عن 8 من عشرة</h1>";

echo "<table border='l' style='direction:rtl;background-color:skyblue;color:gold;width=700px; margin:auto;'>";
echo "<tr style='font-size:25px; font-weight:bolder'><th > الترتيب </th> <th> الاسم</th> <th> الدرجة</th></tr>";
while($fetch=mysql_fetch_assoc($results)){

if($l==1){
    $l=$l+1;
echo "<tr  style='font-size:25px; font-weight:bolder'><td><img src='Pictures/golden_medal.jpg' style='height=100px;'> </td> ";
}elseif ($l==2){
    $l=$l+1;
  echo "<tr  style='font-size:25px; font-weight:bolder'><td><img src='Pictures/Silver_Medal.jpg'> </td> ";  
}elseif ($l==3){
    $l=$l+1;
    echo "<tr  style='font-size:25px; font-weight:bolder'><td><img src='Pictures/Bronze_Medal.jpg'> </td> ";
}else{
    break;
}
echo "<td>". $fetch["Fullname"] ."</td>";
echo "<td style='text-align:center;'>". $fetch["F_Quiz_one"] ."</td></tr>";

}
echo  "</table>";
?>
</body>
</html>