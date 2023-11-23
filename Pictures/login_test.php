<head>
<script type="text/javascript" src="Javascript/login.js">
</script>
</head>
<?php

session_start();
include 'connect.php';
$Username=$_POST['Username'];
$Password=$_POST['Password'];
 $query="Select * from Register_2 where Username='$Username' and Password='$Password'";
            $results=mysql_query($query);
            $persons=mysql_fetch_array($results);
// the nineth step

        
          if(mysql_num_rows($results)==1){
          ?>
          
          <body onload="check(<?php $persons['Username']?>);">
          <h1>
         
          <?php 
          echo $persons['Username'];
          echo $persons['Password'];
          ?>
          </h1>
          </body>
          <?php
              
               }
               else {
                
                echo "<script type='text/Javascript'>";
                echo "alert('من فضلك تأكد أن كلمة المرور واستخدم المستخدم صحيحة')";
               
                echo "</script>";
                $url="location:default.php";
                header($url);
              
               }



?>
