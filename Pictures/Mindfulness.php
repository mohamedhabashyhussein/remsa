<!DOCTYPE html>

<html>
<head>
    <title>الموقع الرسمي للاستاذ الدكتور محمد حبشي حسين</title>
    <link type="text/css" rel="stylesheet" href="CSS_Files/main_2.css"/>
    <script type="text/javascript">
        function login()
    {
var Username=document.getElementById('Username');
var Password=document.getElementById('Password');
alert(Password);
if (Username.value=="" || Password.value=="") {
    alert("من فضلك ادخل اسم مستخدم وكلمة مرور صحيحة")
 
}
}
    </script>
    
    
</head>

<body>
<div id="container">
        <div id="header">
                    <h2 id="My_Name">
                        الاستاذ الدكتور محمد حبشي حسين
                        <br/>
                        استاذ الإحصاء والقياس النفسي
                        <br/>
                        كلية التربية  جامعة الأسكندرية
                        
                    </h2>
        </div>
        <div id="menu">
                 
                <ul>
                    <li>  <a href="default.php">الرئيسية</a>
                         
                    </li>
            
                <li> <a href="#"> المقاييس </a>
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
                <li><a href="#">
                المقررات الدراسية</a>
                
                <ul id="Level2">
                           <li>
                            <a href="#">
                    القياس النفسي
                            </a>
                           </li>
                           <li>
                            <a href="#">
                    سيكولوجية التعلم
                            </a>
                           </li>
                           <li>
                            <a href="#">
                    الإحصاء الوصفي
                           </a>
                          </li>
                           <li>
                            <a href="#">
                    الفروق الفردية
                           </a>
                          </li>
                        </ul>
                </li>
                <li><a href="#"> البرامج التدريبية</a>
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
                <li>  <a href="contact.php">الاتصال</a>
                         
                    </li>
		
            </ul>
        </div>
        <form id=mindfulness_form method="POST" action="mindfulness.php">
            <table id="mindfulness_table">
                <tr>
                    <th style="width:70%;">
                        العبــــــــــــــــارة
                    </th>
                    <th>
                            مطلقاً                            
                    </th>
                    <th>
                            نادراً
                    </th>
                    <th>
                  
                            أحياناً
                    </th>
                    <th>
                            غالباً
                    </th>
                     <th>
                            دائما
                    </th>
                    
                </tr>
                <tr id="item1" class=odd_rows>
                    <td >
                        أثناء سيري اراقب عن قصد إحساسات حركة جسدي
                    </td>
                    <td>
                            <input type="radio" name="item1"/>
                            
                    </td>
                    <td>
                            <input type="radio" name="item1"/>
                    </td>
                    <td>
                  
                            <input type="radio" name="item1"/>
                    </td>
                    <td>
                            <input type="radio" name="item1"/>
                    </td>
                     <td>
                            <input type="radio" name="item1"/>
                    </td>
                    
                </tr>
                
                <tr id="item2" class=even_rows>
                    <td >
                        أتميز بقدرتي على إيجاد الكلمات التي تصف مشاعري.
                    </td>
                    <td>
                            <input type="radio" name="item2"/>
                            
                    </td>
                    <td>
                            <input type="radio" name="item2"/>
                    </td>
                    <td>
                  
                            <input type="radio" name="item2"/>
                    </td>
                    <td>
                            <input type="radio" name="item2"/>
                    </td>
                     <td>
                            <input type="radio" name="item2"/>
                    </td>
                    
                </tr>
                <tr id="item3" class=odd_rows>
                    <td >
                        انتقد نفسي لانفعالاتي غير المناسبة أو غير المبررة.
                    </td>
                    <td>
                            <input type="radio" name="item3"/>
                            
                    </td>
                    <td>
                            <input type="radio" name="item3"/>
                    </td>
                    <td>
                  
                            <input type="radio" name="item3"/>
                    </td>
                    <td>
                            <input type="radio" name="item3"/>
                    </td>
                     <td>
                            <input type="radio" name="item3"/>
                    </td>
                    
                </tr>
                <tr id="item4" class=even_rows>
                    <td >
                أدرك مشاعري وانفعلاتي بدن أن أضطر للاستجابة لها.
                    </td>
                    <td>
                            <input type="radio" name="item4"/>
                            
                    </td>
                    <td>
                            <input type="radio" name="item4"/>
                    </td>
                    <td>
                  
                            <input type="radio" name="item4"/>
                    </td>
                    <td>
                            <input type="radio" name="item4"/>
                    </td>
                     <td>
                            <input type="radio" name="item4"/>
                    </td>
                    
                </tr>
            </table>
            
            
        </form>
            
    <div id="footer">
        جميع حقوق هذا الموقع خاصة بالأستاذ الدكتور محمد حبشي حسين
    </div>
</div>

</body>
</html>
