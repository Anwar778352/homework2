<!-- 
التعامل مع المنطقة الزمنية (Time Zone)

1) ضبط المنطقة الزمنية الافتراضية

شرح:

لتغيير التوقيت الذي ستستخدمه PHP افتراضيًا -->

<?php

date_default_timezone_set("Asia/Aden");

echo "الوقت في اليمن: <br>" . date("Y-m-d H:i:s <br>");

?>

 <!-- 2) إنشاء وقت في منطقة زمنية محددة

شرح:

إنشاء كائن وقت مع تحديد منطقة ثابتة -->


<?php

$dt = new DateTime("now", new DateTimeZone("UTC"));

echo "UTC: <br>" . $dt->format("Y-m-d H:i:s T <br>");

?>

 <!-- 3) تحويل الوقت من منطقة إلى أخرى

شرح:

نستخدم setTimezone() لتغيير المنطقة -->

<?php

$utc = new DateTime("now", new DateTimeZone("UTC"));

$utc->setTimezone(new DateTimeZone("Asia/Riyadh"));
echo "الوقت في السعودية: <br>" . $utc->format("Y-m-d H:i:s T <br>");

?>

<!-- 4) حساب الفرق بين تاريخين

شرح:

تستخدم DateTime → diff() لإيجاد المدة بين تاريخين -->


<?php

$d1 = new DateTime("2025-01-01 00:00:00");
$d2 = new DateTime("2025-01-05 12:30:00");

$diff = $d1->diff($d2);

echo $diff->format("الفرق: %a يوم و %h ساعة و %i دقيقة");

?>