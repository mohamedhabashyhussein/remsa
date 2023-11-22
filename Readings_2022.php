<?php
 session_start();
  $conn=mysqli_connect("localhost", "u947286288_hussein", "up!HUsEN4@", "u947286288_hussein") or die("I cant connect");
 if(!isset($_COOKIE['Username']) | !isset($_COOKIE['Password'])){
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
      $conn=mysqli_connect("localhost", "u947286288_hussein", "up!HUsEN4@", "u947286288_hussein") or die("I cant connect");
      date_default_timezone_set('Africa/Cairo');
      $Current_Date=date('Y-m-d h:i:s');
      $Username=$_COOKIE['Username'];
      $Password=$_COOKIE['Password'];

      $query="Select * from Registration_2022 where Username='$Username'  and Password='$Password' ";
      $results=mysqli_query($conn, $query);
      $Status=mysqli_fetch_assoc($results);
      $update="Update Registration_2022 Set Last_Visiting='$Current_Date' Where Username='$Username' and Password='$Password'";
      
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
      <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
      <link rel="stylesheet" href="/CSS_Files/grid_en.css">
      <title>قراءات في علم النفس باللغة الإنجليزية </title>
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
                  <div class="logout"><a href="../index.php" class="logoutlink">
                        
                        <img src="/Pictures/logout.png" alt="الخروج"  class="logoutPic"></a>
                  </div>
            </div>
            <div class="sidebar">
                 
                       <ol class="chapters">
                             <li id="chapter1">
                            Chapter One
                               <ul class="practices">
                                    <li><a href="../Readings/chapter_one.php"> Excercise one</a></li>
                                    <li><a href="../Readings/chapter_one.php"> Exercise Two</a></li>
                                    <li><a href="../Readings/chapter_one.php"> Excercise Three</a></li>
                                    </ul>
                               
                             </li>
                             <li class="chapter2"> Chpater Two 
                                   <ul class="chapter2 practices"> 
                                   <li><a href="#"> Excercise one </a></li>
                                    <li><a href="#"> Exercise Two </a></li>
                                    <li><a href="#"> Excercise Three</a></li>
                                    </ul>
                                   </ul>
                             </li>

                        <li class="chapter3"> Chpater Three
                              <ul class="chapter3 practices">
                              <li><a href="#"> Excercise one </a></li>
                                    <li><a href="#"> Exercise Two </a></li>
                                    <li><a href="#"> Excercise Three</a></li>
                              </ul>
                              </ul>
                        </li>
                        <li class="chapter4"> Chapter Four
                              <ul class="chapter4 practices">
                                    <li><a href="#"> Excercise one </a></li>
                                    <li><a href="#"> Exercise Two </a></li>
                                    <li><a href="#"> Excercise Three</a></li>
                              </ul>
                              </ul>
                        </li>
                        
                       </ol>
                 
            </div>
                  
           <div class="main">
                <div class="course"><h3> Psychological Readings in English</h3></div> 
                <div class="studentinfo">
                
               <div class="lastVisiting">
                     <?php
                     
                        echo diff();
                     ?>
               </div>
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
               </div>
                <div class="training">
                      <a href="https://youtu.be/mx16eZB_tUE" class="videoTraining" target="_blank">
                             من فضلك شاهد هذا الفيديو قبل بدء التدريبات
                             <br>
                        <img src="/Pictures/revelation.jpg" alt="اتجه للاسفل" width="100px" , height="100px"></a>
                </div>
                
                
                
                <div class="videopractice"><a href="practice_frst.php" class="videoquestions">بعد مشاهدة الفيديو اجب عن هذا التدريب 
                      <br>
                  <img src="/Pictures/quiz_2022.jpg" alt="اتجه للاسفل" width="100px" , height="100px">
                </a></div>
                <div class="results">
                <div class="rchap1">Chapter One</div>
                <div class="rchap2">Chapter Two</div>
                <div class="rchap3">Chapter Three</div>
                      <div class="rchap4">Chapter Four</div>
                      
                      
                      
                        <div class="scores4"> Score</div>
                        <div class="scores3">Score</div>
                        <div class="scores2">Score</div>
                        <div class="scores1">Score</div>
                        
                  </div>

           </div>
           
           <div class="footer"><h3>&copy;  جميع حقوف الملكية الفكرية للأستاذ الدكتور / محمد حبشي حسين </h3></div>
      </div>
      
</body>
</html>