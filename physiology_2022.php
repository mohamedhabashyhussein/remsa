<?php
 session_start();
 include("connect.php");
 if(isset($_COOKIE['Username'])==false | isset($_COOKIE['Password'])==false){
      header("location:../index.php");
 }
 // هدف هذا الجزء هو خروج الفرد من الصفحة إذا ذهب لها بطريقة مباشرة 
 $Username=$_COOKIE['Username'];
 $Password=$_COOKIE['Password'];
 $query4="Select * from Registration_2022 where Username='$Username'  and Password='$Password' ";
      $results4=mysqli_query($conn, $query4);
      $Status4=mysqli_fetch_assoc($results4);
date_default_timezone_set('Africa/Cairo');
 $Current_Date=date('Y-m-d h:i:s');
function diff(){
      include("connect.php");
      date_default_timezone_set('Africa/Cairo');
      $Current_Date=date('Y-m-d h:i:s');
      $Username=$_COOKIE['Username'];
      $Password=$_COOKIE['Password'];

      $query="Select * from Registration_2022 where Username='$Username'  and Password='$Password' ";
      $results=mysqli_query($conn, $query);
      $Status=mysqli_fetch_assoc($results);

      $update11="Update Registration_2022 Set score_chap1_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap1_practice_one=1 and (score_chap1_practice_one is NULL or score_chap1_practice_one>5)";
      mysqli_query($conn, $update11);
      $update12="Update Registration_2022 Set score_chap1_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap1_practice_two=1 and (score_chap1_practice_two is NULL or score_chap1_practice_two>5) ";
      mysqli_query($conn, $update12);
      $update13="Update Registration_2022 Set score_chap1_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap1_practice_three=1 and (score_chap1_practice_three is NULL or score_chap1_practice_three>5)";
      mysqli_query($conn, $update13);

      $update21="Update Registration_2022 Set score_chap2_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap2_practice_one=1 and (score_chap2_practice_one is NULL or score_chap2_practice_one>5)";
      mysqli_query($conn, $update21);
      $update22="Update Registration_2022 Set score_chap2_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap2_practice_two=1 and (score_chap2_practice_two is NULL or score_chap2_practice_two>5)";
      mysqli_query($conn, $update22);
      $update23="Update Registration_2022 Set score_chap2_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap2_practice_three=1 and (score_chap2_practice_three is NULL or score_chap2_practice_three>5)";
      mysqli_query($conn, $update23);

      $update31="Update Registration_2022 Set score_chap3_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap3_practice_one=1 and (score_chap3_practice_one is NULL or score_chap3_practice_one>5)";
      mysqli_query($conn, $update31);
      $update32="Update Registration_2022 Set score_chap3_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap3_practice_two=1 and (score_chap3_practice_two is NULL or score_chap3_practice_two>5)";
      mysqli_query($conn, $update32);
      $update33="Update Registration_2022 Set score_chap3_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap3_practice_three=1 and (score_chap3_practice_three is NULL or score_chap3_practice_three>5)";
      mysqli_query($conn, $update33);

      $update41="Update Registration_2022 Set score_chap4_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap4_practice_one=1 and (score_chap4_practice_one is NULL or score_chap4_practice_one>5)";
      mysqli_query($conn, $update41);
      $update42="Update Registration_2022 Set score_chap4_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap4_practice_two=1 and (score_chap4_practice_two is NULL or score_chap4_practice_two>5)";
      mysqli_query($conn, $update42);
      $update43="Update Registration_2022 Set score_chap4_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap4_practice_three=1 and (score_chap4_practice_three is NULL or score_chap4_practice_three>5)";
      mysqli_query($conn, $update43);

      $update51="Update Registration_2022 Set score_chap5_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap5_practice_one=1 and (score_chap5_practice_one is NULL or score_chap5_practice_one>5)";
      mysqli_query($conn, $update51);
      $update52="Update Registration_2022 Set score_chap5_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap5_practice_two=1 and (score_chap5_practice_two is NULL or score_chap5_practice_two>5)";
      mysqli_query($conn, $update52);
      $update53="Update Registration_2022 Set score_chap5_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap5_practice_three=1 and (score_chap5_practice_three is NULL or score_chap5_practice_three>5)";
      mysqli_query($conn, $update53);
      
      $update61="Update Registration_2022 Set score_chap6_practice_one=0 Where Username='$Username' and Password='$Password' and try_chap6_practice_one=1 and (score_chap6_practice_one is NULL or score_chap6_practice_one>5)";
      mysqli_query($conn, $update61);
      $update62="Update Registration_2022 Set score_chap6_practice_two=0 Where Username='$Username' and Password='$Password' and try_chap6_practice_two=1 and (score_chap6_practice_two is NULL or score_chap6_practice_two>5)";
      mysqli_query($conn, $update62);
      $update63="Update Registration_2022 Set score_chap6_practice_three=0 Where Username='$Username' and Password='$Password' and try_chap6_practice_three=1 and (score_chap6_practice_three is NULL or score_chap6_practice_three>5)";
      mysqli_query($conn, $update63);

      $update="Update Registration_2022 Set Last_Visiting='$Current_Date' Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update);
      $update1="Update Registration_2022 Set max_score_chap1=GREATEST(score_chap1_practice_one,score_chap1_practice_two, score_chap1_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update1);

      $update2="Update Registration_2022 Set max_score_chap2=GREATEST(score_chap2_practice_one,score_chap2_practice_two, score_chap2_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update2);

      $update3="Update Registration_2022 Set max_score_chap3=GREATEST(score_chap3_practice_one,score_chap3_practice_two, score_chap3_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update3);

      $update4="Update Registration_2022 Set max_score_chap4=GREATEST(score_chap4_practice_one,score_chap4_practice_two, score_chap4_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update4);

      $update5="Update Registration_2022 Set max_score_chap5=GREATEST(score_chap5_practice_one,score_chap5_practice_two, score_chap5_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update5);

      $update6="Update Registration_2022 Set max_score_chap6=GREATEST(score_chap6_practice_one,score_chap6_practice_two, score_chap6_practice_three)  Where Username='$Username' and Password='$Password'";
      mysqli_query($conn, $update6);

      $last_visiting=$Status['Last_Visiting'];
      $diff_time=(strtotime($Current_Date)-strtotime($last_visiting));
      if($diff_time<=10){
            return "اخر زيارة لك للموقع منذ ". round($diff_time, 0) ." ثواني ";

      }elseif($diff_time<=60){
            return "اخر زيارة لك للموقع منذ ". round($diff_time, 0) ." ثانية ";

      }elseif($diff_time<=60*10){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/60, 1) . " دقائق ";

      }elseif($diff_time<=3600){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/60, 1) . " دقيقة ";

      }elseif($diff_time<=60*60*24){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/(60*60), 1) . " ساعة ";

      }elseif($diff_time<=60*60*24*10){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/(60*60), 1) . " أيام ";

      }elseif($diff_time<=60*60*24*30){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/(60*60), 1) . " يوم ";

      }elseif($diff_time<=60*60*24*30*12){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/(60*60), 1) . " شهر ";

      }
      
      
}
      
      ?>
      
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="refresh" content="300; url=index.php">
      
    <meta http-equiv='pragma' content='no-cache'>
      <link rel="stylesheet" href="/CSS_Files/grid.css">
      <title>علم النفس الفسيولوجي</title>
                 |<script language="JavaScript">
      function prevback(){window.history.forward();
           };
      setTimeout(prevback, 0);
      window.onunload=function(){null;}
      </script>
      
</head>
<body>
      <div class="container">
            
            <div class="header">
                  <div class="headerLink">
                  <ul class="links">
                        <li class="list"> <a href="" class="courses">المقررات</a></li>
                        <li class="list"><a href="" class="programs">البرامج</a></li>
                        <li class="list"><a href="" class="workshops">الدورات التدريبية </a></li>
                  </ul>
                  
                  </div>
                  <div class="logout"><a href="index.php" class="logoutlink">
                        
                        <img src="/Pictures/logout.png" alt="الخروج"  class="logoutPic"></a>
                  </div>
            </div>
            <div class="sidebar">
                 
                       <ol class="chapters">
                             <li class="chapter1">
                               الفصل الأول
                               <ul class="chapter1 practices">
                                    <li><a href="../physiology/chapter_one.php"><span> التدريب الأول </span></span></a></li>
                                    <li><a href="../physiology/chapter_one.php"><span>  التدريب الثاني</span></a></li>
                                    <li><a href="../physiology/chapter_one.php"> <span> التدريب الثالث</span></a></li>
                                    </ul>
                               
                             </li>
                             <li class="chapter2"> الفصل الثاني
                                   <ul class="chapter2 practices"> 
                                   <li><a href="../physiology/chapter_two.php"> <span> التدريب الأول</span></a></li>
                                    <li><a href="../physiology/chapter_two.php"><span>  التدريب الثاني</span></a></li>
                                    <li><a href="../physiology/chapter_two.php"><span>  التدريب الثالث</span></a></li>
                                   
                                   </ul>
                             </li>

                        <li class="chapter3"> الفصل الثالث
                              <ul class="chapter3 practices">
                                    <li><a href="../physiology/chapter_three.php"><span>  التدريب الأول</span></a></li>
                                    <li><a href="../physiology/chapter_three.php"><span>  التدريب الثاني</span></a></li>
                                    <li><a href="../physiology/chapter_three.php"><span>  التدريب الثالث</span></a></li>
                              </ul>
                        </li>
                        <li class="chapter4"> الفصل الرابع
                              <ul class="chapter4 practices">
                              <li><a href="../physiology/chapter_four.php"><span  class='new41'>  التدريب الأول</span></a></li>
                              <li><a href="../physiology/chapter_four.php"> <span  class='new41'> التدريب الثاني</span></a></li>
                              <li><a href="../physiology/chapter_four.php"> <span  class='new41'> التدريب الثالث</span></a></li>
                              
                              </ul>
                        </li>
                        <li class="chapter5"> الفصل الخامس
                              <ul class="chapter5
                              practices">
                              <li><a href="../physiology/chapter_five.php"> <span class='new41'> التدريب الأول</span></a></li>
                              <li><a href="../physiology/chapter_five.php"><span class='new41'>  التدريب الثاني</span></a></li>
                              <li><a href="../physiology/chapter_five.php"><span class='new41'>  التدريب الثالث</span></a></li>
                              
                              </ul>
                        </li>
                       
                       <li class="chapter6"> الفصل السادس
                              <ul class="chapter6
                              practices">
                              <li><a href="../physiology/chapter_six.php"> <span class='new41'> التدريب الأول</span></a></li>
                              <li><a href="../physiology/chapter_six.php"><span class='new41'>  التدريب الثاني</span></a></li>
                              <li><a href="../physiology/chapter_six.php"><span class='new41'>  التدريب الثالث</span></a></li>
                              
                              </ul>
                        </li>
                       </ol>
                 
            </div>
                  
           <div class="main">
                <div class="course"><h3> علم النفس الفسيولوجي </h3></div> 
                <div class="studentinfo">
                <div class="studentName">
                <?php
                // من المهم ان يتم تشغيل الفترة من خلال الامر التالي 
               
                // it is important to logout if the session is expired ;
               
                  echo $Status4['Fullname'];
                  echo "( رقم جلوسك: ";
                  echo $Status4['Seat_N'];
                  echo ")";
                ?>
                </div>
               <div class="lastVisiting">
                     <?php
                     
                        echo diff();
                     ?>
               </div>
               </div>
                <div class="training">
                      <a href="https://youtu.be/mx16eZB_tUE" class="videoTraining" target="_blank">
                             من فضلك شاهد هذا الفيديو قبل بدء التدريبات
                             <br>
                        <img src="/Pictures/brain.jpg" alt="اتجه للاسفل" width="400px" , height="200px"></a>
                </div>
                
                <div class="videopractice"><a href="practice_frst.php" class="videoquestions">بعد مشاهدة الفيديو اجب عن هذا التدريب 
                      <br>
                  <img src="/Pictures/quiz_2022.jpg" alt="اتجه للاسفل" width="200px" , height="200px">
                </a></div>
                <div class="results">
                      <div class="rchap1">الفصل الأول</div>
                      <div class="rchap2">الفصل الثاني</div>
                      <div class="rchap3">الفصل الثالث</div>
                      <div class="rchap4">الفصل الرابع</div>
                      <div class="rchap5">الفصل الخامس</div>
                      <div class="rchap6">الفصل السادس</div>
                        <div class="scores1"> 
                        <?php
                        if ($Status4['max_score_chap1']==NULL){
                        echo "----- ";
                        }else{
                           echo  $Status4['max_score_chap1'] ;   
                        }
                        ?>
                        </div>
                        <div class="scores2">
                        <?php
                        
                        if ($Status4['max_score_chap2']==NULL){
                        echo "----- ";
                        }else{
                           echo   $Status4['max_score_chap2'] ;   
                        }
                        ?>
                        </div>
                        <div class="scores3">
                        <?php
                        if ($Status4['max_score_chap3']==NULL){
                        echo "----- ";
                        }else{
                           echo   $Status4['max_score_chap3'] ;   
                        }
                        ?>
                        </div>
                        <div class="scores4">
                        <?php
                        if ($Status4['max_score_chap4']==NULL){
                        echo "----- ";
                        }else{
                           echo   $Status4['max_score_chap4'] ;   
                        }
                        ?>
                        </div>
                        <div class="scores5"><?php
                        if ($Status4['max_score_chap5']==NULL){
                        echo "----- ";
                        }else{
                           echo   $Status4['max_score_chap5'] ;   
                        }
                        ?></div>
                        <div class="scores6"><?php
                        if ($Status4['max_score_chap6']==NULL){
                        echo "----- ";
                        }else{
                           echo   $Status4['max_score_chap6'] ;   
                        }
                        ?></div>
                  </div>

           </div>
           
           <div class="footer"><h3>&copy;  جميع حقوف الملكية الفكرية للأستاذ الدكتور / محمد حبشي حسين </h3></div>
      </div>
      
</body>
</html>