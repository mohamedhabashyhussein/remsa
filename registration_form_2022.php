<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>الصورة المعدلة لملف التسجيل 2022</title>
    <link type="text/css" rel="stylesheet" href="/CSS_Files/main_2_A.css"/>
    <script type="text/javascript" src="/Javascript/login_2022_C.js">
    </script>
    
 
</head>

<body lang="ar" >

            
           <div id="instruction">
       
           من فضلك استخدم أحرف وأرقام باللغة الإنجليزية عند اختيار اسم المستخدم وكلمة المرور الخاصة بك
        
            
        <!-- الفورم والجدول -->
        <div id="registration_form">
                <form method="POST" id="form" onsubmit=" check_Fullname(); check_Seat_N();check_Username(); check_Password();  check_Email();  check();" action="register_P_2022.php" >
                     <fieldset>
                        <legend> ادخل جميع البيانات التالية</legend>
        <!--  بداية الجدول -->
        <table id="Registration_Table" cellspacing="20px">
               
                <tr>
                   
                        
                    <td>
                        <label>
                        ادخل اسمك بالكامل
                        </label>
                    </td>
                    <td>
                        <input type="text" placeholder="أدخل اسمك بالكامل باللغة العربية " id="Fullname"  name="Fullname" onblur="check_Fullname();">
                        
                    </td>
                    <td>
                        <label>
                        اختار التخصص
                        </label>
                    </td>
                    <td>
                       <select name="Major" id="Major"  onchange="selection();">
                        <option >  </option>
                        <option value="Childhood_Second_Grade">ثانية طفولة  </option>
                          <option value="Fourth_Grade">  رابعة علم نفس  </option>
                        <option value="Second_Grade"> ثانية علم نفس </option>
                                                 
                        
                       </select>
                        
                    </td>
                    
                </tr>
                <!--  الجزء الثاني -->
                <tr>
                <td>
                    <label>
                        اختار المقرر الذي تدرسه
                    </label>
                </td>
                <td>
                    <select name="Course" id="Course" onchange="selection();">
                        <option >  </option>
                        <option   value="physiology" >
                            علم النفس الفسيولوجي
                            
                        </option>
                        <option   value="Readings" >
                            
                            قراءات في علم النفس باللغة الأنجليزية
                            
                        </option>
                    </select>
                </td>
                <td>
                        <label>
                            أدخل رقم جلوسك 
                        </label>
                    </td>
                    <td>
                        <input type="text" id="Seat_N" name="Seat_N"  onblur="check_Seat_N();">
                            
                    </td>
               </tr>
               <!--  الجزء الثالث -->
                <tr>
                <td>
                    <label>
                        هل أنت طالب أم طالبة؟
                    </label>
                </td>
                <td>
                    <select name="Gender" id="Gender" onchange="selection();" >
                        <option >  </option>
                        <option value="Female">
                            طالبة
                        </option>
                        <option value="Male">
                            طالب
                        </option>
                    </select>
                </td>
                <td>
                        <label>
                            ادخل البريد الالكتروني
                        </label>
                    </td>
                    <td>
                        <input type="text" id="Email" name="Email" placeholder="ادخل البريد الإليكتروني الجامعي" onblur="check_Email();" >
                            
                    </td>
               </tr>
               <tr>
                    <td>
                        <label>
                            ادخل اسم المستخدم
                        </label>
                    </td>
                    <td>
                        <input type="text"  placeholder="اسم المستخدم حروف وارقام باللغة الإنجلزية "  onblur="check_Username();"  id="Username" name="Username" >
                            
                    </td>
                    <td>
                        <label>
                            ادخل كلمة المرور
                        </label>
                    </td>
                    <td>
                        <input type="password" placeholder=" كلمة المرور حروف وارقام باللغة الانجليزية" id="Password" onblur="check_Password();" name="Password">
                            
                    </td>
                    
               </tr>
               
               <tr>
                <td colspan="4">
                    <input type="submit" onsubmit="check();" value="سجل البيانات"  >
                    
                </td>
               </tr>
        </table>
             </fieldset>
            </form>
          </div>
          </div>
</body>
</html>

