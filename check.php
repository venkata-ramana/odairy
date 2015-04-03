<?php
$str="";
$date="2015-02-09 06:45:00";
$date_now=array(date('Y'),date('m'),date('d'));
$time_now=array(date('h'),date('i'),date('s'));
$ret=explode(" ",$date);
$date_past=explode("-",$ret[0]);
$time=explode(":",$ret[1]);
if($date_now[0]!=$date_past[0])
$str.=$date_now[0]-$date_past[0]." yr's";

if($date_now[1]!=$date_past[1])
$str.=$date_now[1]-$date_past[1]." mth's";
if($date_now[2]!=$date_past[2])
$str.=$date_now[2]-$date_past[2]." day's";

if($time_now[0]!=$time[0])
$str.=$time_now[0]-$time[0]." hr's  ";
if($time_now[1]!=$time[1])
$str.=$time_now[1]-$time[1]." min's ";
if($time_now[2]!=$time[2])
$str.=$time_now[2]-$time[2]." sec's  ";

echo $str." ago";
?>
