<?php

$gender="female";
$weight=55;
$height=170;
$age=25;

$calori=10*$weight+6.25*170-5*$age;

if($gender=="male"):
echo $calori+5;
elseif($gender=="female"):
echo $calori-161;
else:
echo"Hatalı işlem yaptınız";

endif;
?>
