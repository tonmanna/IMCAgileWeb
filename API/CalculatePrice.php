<?php
function CalculatePrice($end, $start) {
 $totalPrice = 0;
 $totalTime = GetParkHour($end, $start);

 $extraHour = 0;
 $useExtraHour = GetParkHour($end, date_format(date_create('2558-11-28 02:00:00'), 'Y-m-d H:i:s'));


 $totalTime = $totalTime - 1;

 if ($totalTime > 0) {
  if ($totalTime > 3) {
   $totalPrice = 30;
   $totalTime = $totalTime - 3;
   $totalPrice = $totalPrice + ($totalTime * 20);
   if ($useExtraHour <= 0) {
    $extraHour = 0;
   } else if ($useExtraHour > 4) {
    $extraHour = 4;
   } else {
    $extraHour = $useExtraHour;
   }

   $totalPrice = $totalPrice + ($extraHour * 230);
  } else {
   $totalPrice = $totalTime * 10;
  }
 }
 return $totalPrice;
}