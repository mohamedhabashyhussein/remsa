<?php
    include("check_login.php");
     include("connect.php");
     include("menu.html");
    ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <script type="text/javascript" src="Javascript/jquery-2.1.3.min.js">
        
    </script>
     <script type="text/javascript">
     
     $(document).ready(function(){
       
            $('#midterm').css('text-align', 'center').css('color', 'red')
            .css("font-weight", "bolder")
            .slideUp(1000).slideDown(1000)
            .css('color', 'white')
             .slideUp(1000).slideDown(1000)
             .slideUp(1000).slideToggle(1000)
             .css('margin-top', '50px');
             
        });
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
      

         
echo "<td style='text-align:center;font-size:24px; color:white;'>";

echo "درجتك على الاختبار الأول";

if($image['Tries_1']>=1){
    echo "<hr>";
    echo "<h1>";
echo $image['F_Quiz_one'] ;
echo "</h1>";
}else{
    echo "<hr>";
    echo "لم تحاول الإجابة عن الاختبار الأول";
}
echo "</td>";
echo "<td style='text-align:center;font-size:24px; color:white;'>";

echo "درجتك على الاختبار الثاني <br/>";

if($image['Tries_2']>=1){
    echo "<hr>";
     echo "<h1>";
echo $image['S_Quiz_one'] ;
 echo "</h1>";
}else{
    echo "<hr>";
    echo "لم تحاول الإجابة عن الأختبار الثاني <br/>";
}
echo "</td>";
?>

</tr>
<tr>
<td >
    <img src="Pictures/Upload3.jpg" id="upfile1" style='width:200px;height: 50px;'/> 
    <input type="file" value="غير الصورة" id="file1" name="image" style='display: none;' />

                                    
                                </td>
<td colspan=4 style="text-align: center;">
    
    <input type="submit" value="أضغط لتغير الصورة" id="file1" name="Change_Image" style=" width:200px;background-color:midnightblue;color:white;border:outset red 5px;font-size:25px;"  />

                                    
                                </td>
                                
         </tr>                       
                                
       
                                
</tr>                       
   
      <?php
      if($Seat_N>=1){
       echo "<tr></td><td colspan=4 style='color:white; text-align:center;'>";
       $first_connect=mysqli_query($conn, "Select Score from Physiology_midterm_2018 where Seat_n='$Seat_N'");
        $mid=mysqli_fetch_assoc($first_connect);
        if (30-$mid['Score']<=4){
            echo "<img src='/Pictures/Mohamed2.jpg' style='width:100px; float:right;height:100px;'/>";
            echo "<h2>";
            echo "<a href='PSI_Javascript.php' style='color:white;'>";
            echo "هل تريد أن ترفع درجتك على اختبار الميد ترم لتصبح 30 من 30";
            echo "اجب على هذا الاختبار لكن بمصداقية لكي تحصل على 30 من 30 ";
            echo "اضغط على الرابط التالي";
            echo "</a>";
            echo "</h2>";
        }elseif (30-$mid['Score']>4){
            echo "<img src='/Pictures/Mohamed2.jpg' style='width:100px; float:right; height:100px;'/>";
            echo "<h2>";
            echo "<a href='PSI_Javascript.php' style='color:white;'>";
            echo "هل تريد ان ترفع درجتك على اختبار الميد ترم بمقدار أربع درجات";
            echo "<br>";
            echo "كل المطلوب أن تجيب بمصداقية على الاختبار النفسي التالي ";
            echo "<br/>";
            echo "اضغط على الرابط التالي";
            echo "</a>";
            echo "</h2>";
        }
        
      echo    " </td>     </tr>";
      }
      ?>
            
     
    

</table>

</form>
    
  
    
    
    <table class="table_welcome" border="l" width="400px" style="margin-top:5px;height:400px; float:left;margin-right:600px;position:absolute;">
        <tr style=" font-size:14px; font-weight:bolder; background-color:skyblue;color:midnightblue;">
            <td  style='height:100px;'>
        <a href="First_Step_to_the_Second_Test.php" style="color:white;font-size:25px;text-decoration:none;">
        <img src='Pictures/Psychophysics.jpg' style='float:right; width:100px;float:right; height:100px;'/>
       الاختبار الأول على الفصل الأول من الكتاب عدد اسئلة الاختبار 10 أسئلة
        <br>
        مدة الاختبار خمس دقائق
        <br>
        امامك فرصتان لكي تحصل على ثمان درجات من عشرة
        <br>
        للطلبة المتميزين فقط
        </a>
        </td>
        <td style='height:100px;' >
        <a href="First_Step_to_the_Third_Test.php" style="color:midnightblue;font-size:25px;text-decoration:none;">
        <img src='Pictures/Neuron.jpg' style='float:right; width:100px;float:right; height:100px;'/>
       
      اختبار مكون من عشر أسئلة على الفصل الثاني الخلية العصبية
        <hr/>
        مدة الاختبار خمس دقائق فقط
        <hr/>
        فقط للطلبة الحاصلين على ثمان درجات أو أكثر على الاختبار الأول
        <hr/>
        رجاء المذاكرة جيداً
        </a>
        </td>
        </tr>
       <?php
    if(is_null($Seat_N)){
   echo " <tr><td olspan=1>";
   echo " <img src='Pictures/scary.jpg' style='float:right;'>";
   echo "<hr/>";
   echo " <a href='Deal_Motivation.php'>";
   echo "    <h2 style='color:white;'>";
   echo "  اضغط على الرابط التالي لمعرفة درجتك على اختبار الميد ترم";
   echo "</h2></a>";
   
   echo "</td><td colspan=2>";
    }
  if($Seat_N>=1){
    echo "</td><td colspan=2>";
    $first_connect=mysqli_query($conn, "Select Score from Physiology_midterm_2018 where Seat_n='$Seat_N'");
    $mid=mysqli_fetch_assoc($first_connect);
    
    if($mid['Score']>=20){
    echo "<img src='Pictures/well_done.jpg' style='float:right; width:100px; height:100px;'> ";
    }else{
        echo "<img src='Pictures/challenge.jpg' style='float:right; width:100px; height:100px;'> "; 
    }
    echo "<hr/>";
  
    echo "<h1 style='text-align:center; color:white;padding:5px; border:5px red groove;'>";
    echo "درجتك على اختبار الميد ترم هي ";
    echo "<hr/>";
    echo $mid['Score'];
    echo "</h1>";
     echo "</td></tr>";
  }else{
     echo "<h2 style='text-align:center; color:white;padding:5px; background-color:tan;border:5px red groove;'>";
     echo " <a href='Deal_Motivation.php'>";
    echo "للأسف أنت إلى الأن لم تعرف درجتك على امتحان الميد ترم ";
    echo "<hr/>";
    echo "اضغط على الرابط التالي لمعرفة درجتك";
    echo "</h1>";
    echo "</a>";
    echo "</td></tr>";
  }
  echo "<h1>".$rows['Fullname']."</h1>";
    ?>
    
  
    
</td>
</tr>
        
  <?php
  echo "<h1>".$rows['Fullname']."</h1>";
  ?>
    
  
    

</tr>

</table>
</body>
</html>
