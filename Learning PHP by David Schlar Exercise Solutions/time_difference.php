<?php
$to_time = strtotime("2019-12-18 12:42:00");
$from_time = strtotime("2010-12-18 10:21:00");
$minutes = round(abs($to_time - $from_time) / 60,2). " minute";
if($minutes < 60)
{ 
  echo $minutes;
}
elseif($minutes <24*60){
  echo round(($minutes/60),2)." hours ago";
}
elseif($minutes > 24*60){
  echo round($minutes/(60*24),0)." day ago";
    
}
?>
