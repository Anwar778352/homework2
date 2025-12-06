
 <!-- التعامل مع الملفات في PHP -->
  
<!-- 
 1) إنشاء ملف أو الكتابة فيه

شرح:

تستخدم الدالة file_put_contents لكتابة نص داخل ملف

إذا كان الملف غير موجود , يتم إنشاؤه

إذا كان موجودًا, يتم استبدال محتواه -->

<?php

$file = "yemen.txt";

// كتابة نص داخل ملف (سيتم إنشاؤه إن لم يكن موجود)
file_put_contents($file, "اليمن الحبيبة\n");

echo "تم إنشاء الملف وكتابة النص\n <br>";
?>

<!-- 2) الإضافة لنهاية الملف (Append)

 شرح:

 تُستخدم لإضافة نص بدون حذف النص القديم داخل الملف -->

<?php

$file = "yemen.txt";

// إضافة نص جديد لنهاية الملف
file_put_contents($file, "اللهم احفظ اليمن وأهلها\n", FILE_APPEND);

echo "تمت إضافة النص بنجاح\n<br>";

?>

<!-- 3) قراءة محتوى الملف

شرح:

الدالة file_get_contents تقرأ محتوى الملف بالكامل وتعيده كسلسلة نصية -->

<?php

$file = "yemen.txt";

// قراءة محتوى الملف
$content = file_get_contents($file);

echo "محتوى الملف:\n<br>";
echo $content;
?>

<!-- 4) التحقق من وجود ملف

شرح:

file_exists تعيد true إذا كان الملف موجودًا -->

<?php

$file = "yemen.txt";

if (file_exists($file)) {
    echo "الملف موجود\n<br>";
} else {
    echo "الملف غير موجود\n<br>";
}

?>

<!-- 5) حذف ملف

شرح:

تُستخدم unlink لحذف ملف من السيرفر -->


<?php

$file = "file_to_delete.txt";

// إنشاء ملف أولاً
file_put_contents($file, "ملف سيتم حذفه");

// حذف الملف
unlink($file);

echo "تم حذف الملف\n<br>";

?>

<!-- 6) حجم الملف

شرح:

الدالة filesize تعيد حجم الملف بالبايت (Bytes) -->

<?php

$file = "yemen.txt";

echo "حجم الملف: <br>" . filesize($file) . " بايت\n<br>";
?>

<!-- 
7) فتح ملف وقراءته سطر بسطر

شرح:

باستخدام fopen و fgets يمكنك قراءة الملف تدريجيًا -->

<?php

$file = "yemen.txt";

$handle = fopen($file, "r");

while (!feof($handle)) {
    echo fgets($handle);
}

fclose($handle);

?>