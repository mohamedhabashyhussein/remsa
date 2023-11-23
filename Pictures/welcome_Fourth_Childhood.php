<?php
    include("check_login.php");
     include("connect.php");
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
<h1 style="text-align:center; color:white; background-color:midnightblue;">
الصفحة الرئيسية لمقرر علم النفس الفسيولوجي
<br/>
رابعة طفولة
</h1>
    <?php
    
    include("connect.php");
     $result = mysql_query("SET NAMES 'utf8'"); 
if (!$result) { 
die("Charset Failed"); 
} 
 $Username=$_COOKIE['Username'];
 $image=mysql_query("Select * from Registration where Username='$Username' ");
 $image=mysql_fetch_assoc($image);
  $Seat_N=$image['Seat_N'];
  ?>  
    
    <div id="main" style="float:right">
    
    
    <form id="my_image" method="Post" action="welcome_Fouth_Childhood_Unique.php" enctype="multipart/form-data">

<table border=l id="table_Seat" width="500px; border="l" style="padding:5px;margin-top:-10px; margin-right:20px;float:right;background-color:seagreen;">


<tr> <td colspan=5 style="text-align:center;font-size:30px; color:white;">
<?php  echo $image['Fullname'] ?>
</td>
</tr>
<tr>
    
    
    
    <td style="text-align:center;" colspan=5 >
<?php

       $file_tmp=$_FILES['image']['tmp_name'];
      $file_name=$_FILES['image']['name'];
      $file_size=$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      
      
           
          
       if(isset($file_name)){
        
        if(!empty($file_name)){
                if(move_uploaded_file($file_tmp, "Pictures/Upload/".$file_name)){
             echo "<img  src='Pictures/Upload/". $file_name ."' style='width:300px; height:220px;'/>";
             $query_image=mysql_query("Update Registration Set Image_Name ='$file_name' Where Username='$Username'");
                }
        }
        else{
                 echo "<img  src='Pictures/landscape1.jpg' style='width:300px; height:220px;'/>";
                 echo "<script type='text/javascript'> alert('من فضلك اختار صورة') </script>";
                  }
          
               
        }else {
            
            $query_image=mysql_query("Select * from  Registration  Where Username='$Username'");
          $query_image=mysql_fetch_assoc($query_image);
          
          if ($query_image['Image_Name']!=NULL){
            echo "<img  src='Pictures/Upload/". $query_image['Image_Name'] ."' style=' width:200; height:220px;'/>";
          }else {
        echo "<img  src='Pictures/landscape1.jpg' style=' width:200; height:220px;'/>";
        
          }
            
        }
       
     
      
     


?>

</tr>
<tr></tr>
<td colspan=2>
    <img src="Pictures/Upload3.jpg" id="upfile1" style='width:200px;height: 50px;'/> 
    <input type="file" value="غير الصورة" id="file1" name="image" style='display: none;' />

                                    
                                </td>
<td colspan=4 style="text-align: center;">
    
    <input type="submit" value="أضغط لتغير الصورة" id="file1" name="Change_Image" style=" width:200px;background-color:midnightblue;color:white;border:outset red 5px;font-size:25px;"  />

                                    
                                </td>
                                
         </tr>                       
                                
       
                                
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
						 <option value="Childhood">  رابعة طفولة</option>
                                    <option value="php">  دكتوراه</option>
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
<input type="text" id="Seat"  name="Seat" style=" text-align:center;width:200px;font-size:14px; height:30px;font-weight:bolder;"/>

</td>
</tr>
<tr>
<td style="text-align:center;" colspan=2>
<input type="submit"  style="width:300px;font-weight:bolder;font-size:14px;color:midnightblue;" value="اضغط لتعرف عدد مرات غيابك"/>
</td>
</tr>

</table>

    </form>
    </div>
    
    
    
    <table class="table_welcome" border="l" width="75%" style="margin-top:5px;">
        <tr style=" font-size:14px; font-weight:bolder; background-color:skyblue;color:midnightblue;">
            <td  >
        <a href="First_Step_to_the_Second_Test.php" style="color:white;font-size:25px;text-decoration:none;">
        <img src='Pictures/Psychophysics.jpg' style='float:right; width:100px;float:right; height:100px;'/>
        اختبار مكون من 30 سؤال على الفصل الأول بالكامل
        <br>
        مدة الاختبار 15 دقيقة
        <br>
        امامك فرصة واحدة لتحصل على 28 وإلا ستمنع من دخول الموقع على الإطلاق
        <br>
        للطلبة المتميزين فقط
        </a>
        </td>
       
  <?php
  echo "<h1>".$rows['Fullname']."</h1>";
  ?>
    
  
    
</td>
</tr>
<tr>
<td>
<a href="Childhood_Midterm.php" style="color:white;">
<img src="Pictures/Surprise_Child.jpg"/>
إضغط لتعرف درجتك على اختبار الميدتيرم 
</a>
</td>
</tr>

</table>


</body>
</html>
