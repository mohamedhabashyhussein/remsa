<?php
 session_start();
 // هدف هذا الجزء هو خروج الفرد من الصفحة إذا ذهب لها بطريقة مباشرة 
 
 $Username=$_COOKIE['Username'];
 $Password=$_COOKIE['Password'];
 if(isset($_COOKIE['Username'])==false | $_COOKIE['Username']!=$Username){
      header("location:../index.php");
}
date_default_timezone_set('Africa/Cairo');
 $Current_Date=date('Y-m-d h:i:s');
function diff(){
      
      include("connect.php");
      $Current_Date=date('Y-m-d h:i:s');
      $Username=$_COOKIE['Username'];
      $Password=$_COOKIE['Password'];
      
      $query="Select * from Registration_2022 where Username='$Username'  and Password='$Password' ";
      $results=mysqli_query($conn, $query);
      $Status=mysqli_fetch_assoc($results);
      $update="Update Registration_2022 Set Last_Visiting='$Current_Date' Where Username='$Username' and Password='$Password'";
      $update_R=mysqli_query($conn, $update);
      $last_visiting=$Status['Last_Visiting'];
      $diff_time=(strtotime($Current_Date)-strtotime($last_visiting));
      if($diff_time<=10){
            return "اخر زيارة لك للموقع منذ ". round($diff_time, 0) ." ثواني ";

      }elseif($diff_time<=60){
            return "اخر زيارة لك للموقع منذ ". round($diff_time, 0) ." ثانية ";

      }elseif($diff_time<=60*10){
            return "اخر زيارة لك للموقع منذ ". round($diff_time/60, 1) . " دقائق ";

      }elseif($diff_time<=360){
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
      <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
      <link rel="stylesheet" href="/CSS_Files/grid.css">
      <title>علم النفس الفسيولوجي</title>
</head>
<body>
      <div class="container">
            
            <div class="header">
                  <div class="header">
                  <ul class="links">
                        <li class="list"> <a href="" class="courses">المقررات</a></li>
                        <li class="list"><a href="" class="programs">البرامج</a></li>
                        <li class="list"><a href="" class="workshops">الدورات التدريبية </a></li>
                  </ul>
                  
                  </div>
            <div class="logout">
                  <img src="/Pictures/logout.png" alt="الخروج"  width="50px" height="50px" class="logoutPic">
            </div>
            </div>
            <div class="sidebar">
                 
                       <ol class="chapters">
                             <li id="chapter1">
                               الفصل الأول
                               <ul class="practices">
                                    <li><a href="#"> التدريب الأول</a></li>
                                    <li><a href="#"> التدريب الثاني</a></li>
                                    <li><a href="#"> التدريب الثالث</a></li>
                                    </ul>
                               
                             </li>
                             <li class="chapter2"> الفصل الثاني
                                   <ul class="chapter2 practices"> 
                                    <li><a href="#"> التدريب الأول</a></li>
                                    <li><a href="#"> التدريب الثاني</a></li>
                                    <li><a href="#"> التدريب الثالث</a></li>
                                    </ul>
                                   </ul>
                             </li>

                        <li class="chapter3"> الفصل الثالث
                              <ul class="chapter3 practices">
                                    <li><a href="#"> التدريب الأول</a></li>
                                    <li><a href="#"> التدريب الثاني</a></li>
                                    <li><a href="#"> التدريب الثالث</a></li>
                              </ul>
                              </ul>
                        </li>
                        <li class="chapter4"> الفصل الرابع
                              <ul class="chapter4 practices">
                                    <li><a href="#"> التدريب الأول</a></li>
                                    <li><a href="#"> التدريب الثاني</a></li>
                                    <li><a href="#"> التدريب الثالث</a></li>
                              </ul>
                              </ul>
                        </li>
                        <li class="chapter5"> الفصل الخامس
                              <ul class="chapter5
                              practices">
                                    <li><a href="#"> التدريب الأول</a></li>
                                    <li><a href="#"> التدريب الثاني</a></li>
                                    <li><a href="#"> التدريب الثالث</a></li>
                              </ul>
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
                if(isset($_SESSION['username'])){
                  echo $_COOKIE['Fullname'];
                  echo "</h3>";
                  
                }else{
                    header("location:index.php");
                }
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
                        <div class="scores1"> الدرجة</div>
                        <div class="scores2">الدرجة</div>
                        <div class="scores3">الدرجة</div>
                        <div class="scores4">الدرجة</div>
                        <div class="scores5">الدرجة</div>
                        <div class="scores6">الدرجة</div>
                  </div>

           </div>
           
           <div class="footer"><h3>&copy;  جميع حقوف الملكية الفكرية للأستاذ الدكتور / محمد حبشي حسين </h3></div>
      </div>
      
</body>
</html>