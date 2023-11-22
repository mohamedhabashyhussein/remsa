<html>
     
<head>

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>
    <link type="text/css" rel="stylesheet" href="CSS_Files/Quiz_English_one.css" />
         <?php
    session_start();
    
if(!$_SESSION['quiz']){
     $url="location:default.php";
                header($url);
                exit;
                
}
     include("connect.php");
     
     //
     $Username=$_COOKIE['Username'];
     $Password=$_COOKIE['Password'];
     
     $query_t="Select * from Registration Where Username='$Username' and Password='$Password'";
     $results_t=mysql_query($query_t);
     $rows_t=mysql_fetch_assoc($results_t);
     $tries=$rows_t['Tries_Stat_1'];
     if(mysql_num_rows($results_t)==1 && $rows_t['Tries_Stat_1']<1){
          $tries=1;
          echo "<img src='Pictures/One.png'/>";
          echo "<h1 style='color:white; text-align:center;'> المحاولة الأولى</h1>";
          $query_u="Update Registration Set Tries_Stat_1='$tries' Where Username='$Username' and Password='$Password'";
     $results_u=mysql_query($query_u);
     }else if (mysql_num_rows($results_t)==1 && $rows_t['Tries_Stat_1']<2){
          $tries=$tries+1;
           echo "<img src='Pictures/Last_Change.jpg'/>";
           echo "<h1 style='color:white; text-align:center;'> المحاولة الثانية والأخيرة</h1>";
          $query_u="Update Registration Set Tries_Stat_1='$tries' Where Username='$Username' and Password='$Password'";
     $results_u=mysql_query($query_u);
     }else if (mysql_num_rows($results_t)==1 && $rows_t['Tries_Stat_1']>=2 &&$rows_t['F_Stat_one']<8){
          $url="location:Lost_Your_all__Chances_For_ALL_SG.php";
                header($url);
                exit;
     }else if (mysql_num_rows($results_t)==1 && $rows_t['Tries_Stat_1']>=2 &&$rows_t['F_Stat_one']>8){
          $url="location:Congratulate_Statistics_One.php";
                header($url);
                exit;
     }
     //
     $questions=array();
     for($i=1; $i<14; ++$i)
     {
     $query="Select * from Statistics_MC where ID='$i'";
     $results=mysql_query($query);
     $questions[$i]=mysql_fetch_assoc($results);
      }
     
?>
    <script type="text/javascript">
    // JavaScript source code
// store is an array to store the questions numbers
var store = new Array();
var Store_O = new Array();
var Choice=new Array();
var first_load = 0;
var Q_n=13;
var Q_a=10;
window.onload = function () {
   
    var x;
    var xx;
    var zz=0;
    var ll=1;
    var z = 0;
    var l = 1;
    do {
        z = 0;
        x = Math.round(Math.random() *Q_n+1, 0);
                for (var i = 1; i < store.length+1; ++i) {
            
            if(x==store[i]){
                z=z+1;
                
            }
            
        }
        if (z == 0) {
            store[l] = x;
          
           
            l = l + 1;
        }
    }while(store.length<(Q_n))
    // Create a random number for the Options
    do {
        zz = 0;
        xx = Math.round(Math.random() *3+1, 0);
                for (var ii = 1; ii < Store_O.length+1; ++ii) {
            
            if(xx==Store_O[ii]){
                zz=zz+1;
                
            }
            
        }
        if (zz == 0) {
            Store_O[ll] = xx;
            ll = ll + 1;
        }
       
    }while(Store_O.length<(5))
    
    
    if (document.getElementById("refresh").value =="") {
        clock_1();
        document.getElementById("refresh").value ="1";
        
        next();
      }
}
// the variable score will hold the test score
// it starts with zero
var Score=0;
function next() {
    // quiz1 is the stem and Op1 to Op4 for the Options
    var xx;
    var zz=0;
    var ll=1;
    var quiz1 = document.getElementById("Stem");
    var Op1 = document.getElementById("Opt1");
    var Op2 = document.getElementById("Opt2");
    var Op3 = document.getElementById("Opt3");
    var Op4 = document.getElementById("Opt4");
    var Radio=new Array();
     Radio[1] = document.getElementById("choice1");
      Radio[2] = document.getElementById("choice2");
     Radio[3] = document.getElementById("choice3");
     Radio[4] = document.getElementById("choice4");
    
    var cell = document.getElementById("cell_n");
   // Sc Will Hold the Total number of Correct Questions
    var Sc = document.getElementById("Score");
    var questions = new Array();
    var Stem=new Array();
    var Option1=new Array();
    var Option2=new Array();
    var Option3=new Array();
    var Option4=new Array();
    var Answers=new Array();
    
    Stem[1]="<?php echo $questions[1]['Stem'];?>";
    Stem[2]="<?php echo $questions[2]['Stem'];?>";
    Stem[3]="<?php echo $questions[3]['Stem'];?>";
    Stem[4]="<?php echo $questions[4]['Stem'];?>";
    Stem[5]="<?php echo $questions[5]['Stem'];?>";
    Stem[6]="<?php echo $questions[6]['Stem'];?>";
    Stem[7]="<?php echo $questions[7]['Stem'];?>";
    Stem[8]="<?php echo $questions[8]['Stem'];?>";
    Stem[9]="<?php echo $questions[9]['Stem'];?>";
    Stem[10]="<?php echo $questions[10]['Stem'];?>";
    Stem[11]="<?php echo $questions[11]['Stem'];?>";
    Stem[12]="<?php echo $questions[12]['Stem'];?>";
    Stem[13]="<?php echo $questions[13]['Stem'];?>";
  
   
    Option1[1]="<?php echo $questions[1]['Option1'];?>";
    Option1[2]="<?php echo $questions[2]['Option1'];?>";
    Option1[3]="<?php echo $questions[3]['Option1'];?>";
    Option1[4]="<?php echo $questions[4]['Option1'];?>";
    Option1[5]="<?php echo $questions[5]['Option1'];?>";
    Option1[6]="<?php echo $questions[6]['Option1'];?>";
    Option1[7]="<?php echo $questions[7]['Option1'];?>";
    Option1[8]="<?php echo $questions[8]['Option1'];?>";
    Option1[9]="<?php echo $questions[9]['Option1'];?>";
    Option1[10]="<?php echo $questions[10]['Option1'];?>";
    Option1[11]="<?php echo $questions[11]['Option1'];?>";
    Option1[12]="<?php echo $questions[12]['Option1'];?>";
    Option1[13]="<?php echo $questions[13]['Option1'];?>";
    
    Option2[1]="<?php echo $questions[1]['Option2'];?>";
    Option2[2]="<?php echo $questions[2]['Option2'];?>";
    Option2[3]="<?php echo $questions[3]['Option2'];?>";
    Option2[4]="<?php echo $questions[4]['Option2'];?>";
    Option2[5]="<?php echo $questions[5]['Option2'];?>";
    Option2[6]="<?php echo $questions[6]['Option2'];?>";
    Option2[7]="<?php echo $questions[7]['Option2'];?>";
    Option2[8]="<?php echo $questions[8]['Option2'];?>";
    Option2[9]="<?php echo $questions[9]['Option2'];?>";
    Option2[10]="<?php echo $questions[10]['Option2'];?>";
     Option2[11]="<?php echo $questions[11]['Option2'];?>";
    Option2[12]="<?php echo $questions[12]['Option2'];?>";
    Option2[13]="<?php echo $questions[13]['Option2'];?>";
    
    Option3[1]="<?php echo $questions[1]['Option3'];?>";
    Option3[2]="<?php echo $questions[2]['Option3'];?>";
    Option3[3]="<?php echo $questions[3]['Option3'];?>";
    Option3[4]="<?php echo $questions[4]['Option3'];?>";
    Option3[5]="<?php echo $questions[5]['Option3'];?>";
    Option3[6]="<?php echo $questions[6]['Option3'];?>";
    Option3[7]="<?php echo $questions[7]['Option3'];?>";
    Option3[8]="<?php echo $questions[8]['Option3'];?>";
    Option3[9]="<?php echo $questions[9]['Option3'];?>";
    Option3[10]="<?php echo $questions[10]['Option3'];?>";
    Option3[11]="<?php echo $questions[11]['Option3'];?>";
    Option3[12]="<?php echo $questions[12]['Option3'];?>";
     Option3[13]="<?php echo $questions[13]['Option3'];?>";
     
    Option4[1]="<?php echo $questions[1]['Option4'];?>";
    Option4[2]="<?php echo $questions[2]['Option4'];?>";
    Option4[3]="<?php echo $questions[3]['Option4'];?>";
    Option4[4]="<?php echo $questions[4]['Option4'];?>";
    Option4[5]="<?php echo $questions[5]['Option4'];?>";
    Option4[6]="<?php echo $questions[6]['Option4'];?>";
    Option4[7]="<?php echo $questions[7]['Option4'];?>";
    Option4[8]="<?php echo $questions[8]['Option4'];?>";
    Option4[9]="<?php echo $questions[9]['Option4'];?>";
    Option4[10]="<?php echo $questions[10]['Option4'];?>";
    Option4[11]="<?php echo $questions[11]['Option4'];?>";
    Option4[12]="<?php echo $questions[12]['Option4'];?>";
    Option4[13]="<?php echo $questions[13]['Option4'];?>";
    
    Answers[1]="<?php echo $questions[1]['Answers'];?>";
    Answers[2]="<?php echo $questions[2]['Answers'];?>";
    Answers[3]="<?php echo $questions[3]['Answers'];?>";
    Answers[4]="<?php echo $questions[4]['Answers'];?>";
    Answers[5]="<?php echo $questions[5]['Answers'];?>";
    Answers[6]="<?php echo $questions[6]['Answers'];?>";
    Answers[7]="<?php echo $questions[7]['Answers'];?>";
    Answers[8]="<?php echo $questions[8]['Answers'];?>";
    Answers[9]="<?php echo $questions[9]['Answers'];?>";
    Answers[10]="<?php echo$questions[10]['Answers'];?>";
    Answers[11]="<?php echo $questions[11]['Answers'];?>";
    Answers[12]="<?php echo$questions[12]['Answers'];?>";
    Answers[13]="<?php echo$questions[13]['Answers'];?>";
  var submit = document.getElementById("submit");
    
   
    
    //يشير Q_a إلى عدد أسئلة الاختبار
    if (cell.value < (Q_a+1)) {
  
    //quiz1 is the cell contain the question;
        quiz1.textContent = questions[store[cell.value]];
    // an is the cell where students enter their answers;
    
           if (first > 0) {
           
           for(var s=1; s<5; ++s){
   //هذا الجزء لتغير ترتيب الإجابة الصحيحة نتيجة التغيير العشوائي         
    if(Answers[store[cell.value]]==Store_O[s]){
                
               if (Radio[Store_O[Answers[store[cell.value]]]].checked) {
                   Sc.value=Number(Sc.value)+1;
            
            Score=Sc.value;
                
                }
                }
               }
               
             cell.value = Number(cell.value) + 1;
           
             
             
            Choice[Store_O[1]]=Option1[store[cell.value]]; 
            Choice[Store_O[2]]=Option2[store[cell.value]];
            Choice[Store_O[3]]=Option3[store[cell.value]];
            Choice[Store_O[4]]=Option4[store[cell.value]];
            quiz1.textContent = Stem[store[cell.value]];
            Op1.textContent=Choice[1];
            Op2.textContent=Choice[2]
            Op3.textContent=Choice[3];
            Op4.textContent=Choice[4];
             var check_stem=quiz1.textContent;
          
            if (check_stem.length<3) {
            cell.value = Number(cell.value)+1;
            Choice[Store_O[1]]=Option1[store[cell.value]]; 
            Choice[Store_O[2]]=Option2[store[cell.value]];
            Choice[Store_O[3]]=Option3[store[cell.value]];
            Choice[Store_O[4]]=Option4[store[cell.value]];
            quiz1.textContent = Stem[store[cell.value]];
            Op1.textContent=Choice[1];
            Op2.textContent=Choice[2]
            Op3.textContent=Choice[3];
            Op4.textContent=Choice[4];
            }
               
               for (var k=1; k<5; ++k) {
                Radio[k].checked=false;
            }
           
              
            } else if(first==0){
               
                first=first+1
            cell.value = Number(cell.value);
            quiz1.textContent = Stem[store[cell.value]];
            Choice[Store_O[1]]=Option1[store[cell.value]]; 
            Choice[Store_O[2]]=Option2[store[cell.value]];
            Choice[Store_O[3]]=Option3[store[cell.value]];
            Choice[Store_O[4]]=Option4[store[cell.value]];
           
            Op1.textContent=Choice[1];
            Op2.textContent=Choice[2]
            Op3.textContent=Choice[3];
            Op4.textContent=Choice[4];
            }
            if (Radio[Answers[store[cell.value]]].checked) {
                   Sc.value=Number(Sc.value)+1;
            
            Score=Sc.value;
           
            //reset the radio button
            }
            for (var k=1; k<5; ++k) {
                Radio[k].checked=false;
            }
           
               
              
        do {
        zz = 0;
        xx = Math.round(Math.random() *3+1, 0);
                for (var ii = 1; ii < Store_O.length+1; ++ii) {
            
            if(xx==Store_O[ii]){
                zz=zz+1;
                
            }
            
        }
        if (zz == 0) {
            Store_O[ll] = xx;
            ll = ll + 1;
        }
       
    }while(Store_O.length<(5))     
            
    }else {
        alert("أحبس انفاسك فسوف تعرف درجتك")
        submit.click();
        //window.location.assign("Score.php");
        return false;
              }
   

         
}
var testTimeM = 4;
var testTimeS =59;
var i = 0;
var first = 0;
function clock_1() {
   
    var cl = document.getElementById("clock");
    var submit = document.getElementById("submit");
    var difS;
    
    //var curtime=new Date();
    if(i >=59) {
        i = 0;
        testTimeS = 59;
        testTimeM = testTimeM - 1
        difS = testTimeS - i;
        cl.value = testTimeM + ":" + difS;
    } else if (i >= 49) {
        ++i;
        difS = testTimeS - i;
        cl.value = testTimeM + ":" + "0"+ difS;
    } else {
        ++i;
        difS = testTimeS - i;
        cl.value = testTimeM + ":" + difS;
    
    }
    
    if (Number(testTimeM)==0 & Number(difS)==0){
            alert("الوقت انتهي استعد لتعرف درجتك");
       
            submit.click();
        //window.location.assign("Score.php");
        return false;
    }
    setTimeout(clock_1, 1000);

}

</script>
    
    <title></title>
    
    
</head>
<body>

    <div id="menu" style="margin:20px 50px;">

        <ul>
            <li>
                <a href="default.php">الرئيسية</a>

            </li>

            <li>
                <a href="#"> المقاييس </a>
                <ul id="Level2">
                    <li>
                        <a href="#">
                            اليقظة العقلية
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            تقويم أداء الأستاذ الجامعي
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            التفاؤل الأكاديمي
                        </a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="#">
                    المقررات الدراسية
                </a>

                <ul id="Level2">
                    <li>
                        <a href="#">
                           دكتوراه
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ماجستير
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            مهنية قياس
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            دبلوم عام
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            رابعة علم نفس
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ثانية علم نفس
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"> البرامج التدريبية</a>
                <ul id="Level2">
                    <li>
                        <a href="#">
                            برنامج SPSS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            برنامج EXCEL
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            برنامج R
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            برنامج AMOS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            برنامج LISRL
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="contact.php">الاتصال</a>

            </li>

        </ul>
    </div>


    <form id="Form_Quiz1" method="post" action="Score_Stat_Second_Grade.php">
        <table id="Table_Quiz1" border="1">
        <tr><td colspan=6>
        <input type="text" id="clock" style="font-size:30px;background-color:maroon;color:white;text-align:center;"/>
        </td></tr>
            <tr>
                <td colspan=6>
                <h2 style="color:maroon;">
                   أختار أفضل إجابة من بين الإجابات التي تلي كل سؤال
                </h2></td></tr>
            <tr><td colspan=6>
                    <label>
                    <h2 id="Stem">
                        
                    </h2></label>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <label id="Opt1" >  </label>
                </td> <td style="text-align:center;">
                    <input type="radio" id="choice1" value="1" name="qu1" />
               
                </td>
                <td colspan=2>
                    <label id="Opt2" > </label>
                </td> <td style="text-align:center;">
                    <input type="radio" id="choice2" value="2" name="qu1" />
               
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <label id="Opt3" > </label>
                </td> <td style="text-align:center;">
                    <input type="radio" id="choice3" value="3" name="qu1" />
               
                </td>
                <td colspan=2>
                    <label id="Opt4" >  </label>
                </td> <td style="text-align:center;">
                    <input type="radio" id="choice4" value="4" name="qu1" />
               
                </td>
            </tr>
            <tr>
            <td colspan=3>
                
                    <input value="السؤال التالي" type="button"  onclick="return next();" style="font-size:22px;color:red;"/>
                    
                    
                       </td> 
                       <td colspan=3>       
                    <input value="أنهيت جميع الأسئلة" type="submit" id="submit" style="font-size:20px;"/>
                    </td>
                    </tr>
                    <tr><td colspan=6>
                    <input type="hidden" id="cell_n" value="1"/>
                    <input type="hidden" id="refresh" value=""/>
                    <input type="hidden" id="Score" name="Score" value="0"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
