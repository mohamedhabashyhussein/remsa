<?php
    include("check_login.php");
     include("check_login.php");
     include("connect.php");
    ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <script type="text/javascript" src="Javascript/jquery-2.1.3.min.js">
        
    </script>
 <script type='text/javascript'>
    $(function(){
        //Maps your button click event to the File Upload click event
        $("#upfile1").click(function () {
             $("#file1").trigger('click');
        });
    });
</script>
<title>
 ترحيب

</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>


</head>
<body lang="ar">
    <?php
    
    include("connect.php");
     $result = mysqli_query($conn, "SET NAMES 'utf8'"); 
if (!$result) { 
die("Charset Failed"); 
} 
 $Username=$_COOKIE['Username'];
 $image=mysqli_query($conn, "Select * from Registration where Username='$Username' ");
 $image=mysqli_fetch_assoc($image);
  $Seat_N=$image['Seat_N'];
  ?>  
    
    <div id="main" style="float:right">
    

    
    <form id="my_image" method="Post" action="welcome_Second_Grade_Unique.php" enctype="multipart/form-data">

<table border=l id="table_Seat" width="500px; border="l" style="padding:5px;margin-top:20px; margin-right:20px;float:right;background-color:seagreen;">

<tr> <td colspan=5 style="text-align:center;font-size:30px; color:white;">
<?php  echo $image['Fullname'] ?>
</td>
</tr>
<tr>
    
    
    
    <td style="text-align:center;">
<?php

       $file_tmp=$_FILES['image']['tmp_name'];
      $file_name=$_FILES['image']['name'];
      $file_size=$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      
      
           
          
       if(isset($file_name)){
        
        if(!empty($file_name)){
                if(move_uploaded_file($file_tmp, "Pictures/Upload/".$file_name)){
             echo "<img  src='Pictures/Upload/". $file_name ."' style=' width:200; height:220px;'/>";
             $query_image=mysqli_query($conn, "Update Registration Set Image_Name ='$file_name' Where Username='$Username'");
                }
        }
        else{
                 echo "<img  src='Pictures/landscape1.jpg' style=' width:200; height:220px;'/>";
                 echo "<script type='text/javascript'> alert('من فضلك اختار صورة') </script>";
                  }
          
               
        }else {
            
            $query_image=mysqli_query($conn, "Select * from  Registration  Where Username='$Username'");
          $query_image=mysqli_fetch_assoc($query_image);
          
          if ($query_image['Image_Name']!=NULL){
            echo "<img  src='Pictures/Upload/". $query_image['Image_Name'] ."' style=' width:200; height:220px;'/>";
          }else {
        echo "<img  src='Pictures/landscape1.jpg' style=' width:200; height:220px;'/>";
        
          }
            
        }
       
     
      
      echo "</td>";
      

         
echo "<td style='text-align:center;font-size:20px; color:white;'>";

echo "درجتك على الاختبار الأول </td>";
echo "</td> <td style='text-align:center;font-size:20px; color:white;'>";
echo $image['F_Quiz_one'] ."</td>";
echo "<td style='text-align:center;font-size:20px; color:white;'>";

echo "درجتك على الاختبار الثاني </td>";
echo "</td> <td style='text-align:center;font-size:20px; color:white;'>";
echo $image['S_Quiz_one'] ."</td>";

?>

</tr>
<tr></tr>
<td >
    <img src="Pictures/Upload3.jpg" id="upfile1" style='width:200px;height: 50px;'/> 
    <input type="file" value="غير الصورة" id="file1" name="image" style='display: none;' />

                                    
                                </td>
<td colspan=4 style="text-align: center;">
    
    <input type="submit" value="أضغط لتغير الصورة" id="file1" name="Change_Image" style=" width:200px;background-color:midnightblue;color:white;border:outset red 5px;font-size:25px;"  />

                                    
                                </td>
                                
         </tr>                       
                                
       
                                
</tr>                       
    <tr style="text-align:center;font-size:20px; background-color:midnightblue; color:white;">
        <td colspan=3 style="text-align:center;font-size:20px; background-color:midnightblue; color:white;">
           عدد مرات الغياب في مقرر قراءات في علم النفس باللغة الإنجليزية
        </td>
        <td colspan=2>
            <?php
            $Absent=mysqli_query($conn, "Select * from Fourth_Grade_Absentism Where Id='$Seat_N' ");
            $Absent=mysqli_fetch_assoc($Absent);
            $max=mysqli_query($conn, "Select max(Present_Days) as max from Fourth_Grade_Absentism ");
            $max=mysqli_fetch_assoc($max);
            $max=$max['max'];
            echo "<h1> جاري حصر الغياب </h1>";
            
            ?>
        </td>
    </tr>
    

</table>

</form>
    
    <form id="form_Seat_N" method="Post" action="Absentism.php">

<table id="table_Seat" width="35%" border="l" style=" width:500px; padding:5px;margin-top:20px; margin-right:20px;float:right;background-color:seagreen;">
<tr> <td style="text-align:center;" colspan=2><h1 style="color:white;">
هل تريد معرفة عدد مرات غيابك
</h1></td>
</tr>
<tr>

                                <td style="text-align:center;">
                                    <label style="font-size:25px; color:white;">
                                        اختار البرنامج الدراسي
                                    </label>
                               </td><td>
                                    <select name="Major" id="Major" style="height:30px;direction:rtl; font-weight:bolder;font-size:18px;width:200px;">
                        <option >  </option>
                                    <option value="php"  >  دكتوراه</option>
                                    <option value="Master"> ماجستير</option>
                        <option value="Pro"> مهنية قياس</option>
                        <option value="General"> دبلوم عام</option>
                        <option value="Fourth_Grade"> رابعة علم نفس</option>
                        <option value="Second_Grade"> ثانية علم نفس</option>
                        
                        <option value="Teacher" >  معلم فصل</option>
                        
                       </select>
                                    
                                </td>
                            </tr>
<tr>
<td style="text-align:center;">
<label style="font-size:25px; color:white;">
أدخل رقم جلوسك
</label>
</td><td>
<input type="text" id="Seat"  name="Seat" style=" text-align:center;width:200px;font-size:20px; height:30px;font-weight:bolder;"/>

</td>
</tr>
<tr>
<td style="text-align:center;" colspan=2>
<input type="submit"  style="width:300px;font-weight:bolder;font-size:20px;color:midnightblue;" value="اضغط لتعرف عدد مرات غيابك"/>
</td>
</tr>

</table>

    </form>
    </div>
    
    
    
    <table id="table_welcome" border="l" width="600px" style="position:absolue; margin-right:650px;background-color:blue;margin-top:25px;">
        
        <tr><td colspan=3 style=" font-size:20px; font-weight:bolder; color:white;">
        <img src="Pictures/Exam_1.jpg"/ style="float:right";"> 
    <a href="Quiz_One_Instruction.php">
        <h2 style="color:white;">
        التدريب الأول مدته خمس دقائق
    </h2></a>
</td>
        </tr>
    <tr><td colspan=3>
    <?php
    include("connect.php");
        
    ?>
    <img src="Pictures/Exam_two.jpg"/ style="float:right";"> 
    <a href="First_Step_to_the_Second_Readings_Test.php">
        <h2 style="color:white;">
        التدريب الثاني على موضوع فروع الرئيسية لعلم النفس
    </h2></a>
</td>
    <tr><td olspan=3>
<img src="Pictures/scary.jpg" style="float:right";">
<hr/>
    <a href="Deal_Motivation.php">
        <h2 style="color:white;">
        اضغط على الرابط التالي لمعرفة درجتك على اختبار الميد ترم
    </h2></a>
</td>
    </tr>
<td colspan=3>
  <?php
  if($Seat_N>=1){
    $first_connect=mysqli_query($conn, "Select Score from Midterm_Reading where Seat_n='$Seat_N'");
    $mid=mysqli_fetch_assoc($first_connect);
    echo "<tr><td olspan=3>";
    if($mid['Score']>=25){
    echo "<img src='Pictures/well_done.jpg' style='float:right; width:100px; height:100px;'> ";
    }else{
        echo "<img src='Pictures/challenge.jpg' style='float:right; width:100px; height:100px;'> "; 
    }
    echo "<hr/>";
  
    echo "<h1 style='text-alignment:center;>";
    echo "درجتك على اختبار الميد ترم هي ";
    echo "<hr/>";
    echo $mid['Score'];
    echo "</h1>";
    echo "</td></tr>";
  }
  echo "<h1>".$rows['Fullname']."</h1>";
  ?>
    
  
    
</td>
</tr>

</table>
</body>
</html>
