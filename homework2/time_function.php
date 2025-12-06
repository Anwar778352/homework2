<!-- 
 دوال الوقت والتاريخ في PHP

1) time()

شرح:

تعيد الوقت الحالي كرقم (طابع زمني Unix) -->

<?php

echo "الوقت الحالي (timestamp): <br>" . time();

?>

 <!-- 2) date(format, timestamp)

شرح:

تعرض الوقت بصيغة معينة
إذا لم يتم تمرير timestamp, تستخدم الوقت الحالي -->


<?php

echo date("Y-m-d H:i:s <br>"); 

?>

 <!-- 3) strtotime()

شرح:

تحوّل نص مثل "2025-12-01" إلى timestamp -->

<?php

$ts = strtotime("2025-12-01 15:00 <br>");
echo "Timestamp: $ts\n <br>";
echo "تاريخ محوّل: <br>" . date("Y-m-d H:i:s <br>", $ts);

?>

 <!-- 4) microtime(true)

شرح:

تعيد الوقت بدقة المايكرو ثانية → مفيد لقياس سرعة الكود -->


<?php

$start = microtime(true);

for ($i = 0; $i < 1000000; $i++) {}

$end = microtime(true);

echo "الوقت المستغرق: <br>" . ($end - $start) . " ثانية\n<br>";

?>
<!--  5) sleep(seconds)

شرح:

 توقف تنفيذ البرنامج لعدد ثوانٍ محدد -->

<?php

echo "قبل النوم...\n <br>";
sleep(2); 
echo "بعد النوم...\n <br>";
?>
