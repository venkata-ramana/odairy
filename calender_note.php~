<head> 
<link rel="stylesheet" type="text/css" href="css/forestyle.css" />
</head>
<?php
if(isset($_GET['cid'])){
$user=$_COOKIE["logged_user"];
$date=$_GET['cid'];}
else{
$user=$_COOKIE["logged_user"];
}
if(isset($_GET['cid'])){
$date=substr($_GET['cid'],0,10);
include"connect.php";
$query="select * from insert_note where note_holder='$user' and `note_date` LIKE '$date%' order by note_id DESC limit 10";
$re=mysql_query($query,$db);
print"<div id='tab'>";
print "<div class=table_title>Notes on $date</div>";
while($row=mysql_fetch_row($re))
{
if(strlen($row[1])>30)
{
echo "<div class=tab_td_title><div class=one><a href='view_note.php?holder=$row[4]&id=$row[0]' target='view' class='view1'>".substr($row[1],0,30)."....</a></div><div class=two><a class=view>".hai("$row[2]")."</a></div></div>";

}
else{
echo "<div class=tab_td_title><div class=one><a href='view_note.php?holder=$row[4]&id=$row[0]' target='view' class='view1'>".$row[1]."</a></div><div class=two><a class=view>".hai("$row[2]")." ago</a></div></div>";		//substr($row[2],0,10);
}
}
echo"<div class=footer><a href=details.php>See More...</a></div>";
print"</div>";
}
?>
<?php
function hai($date)
{
$time = strtotime($date);

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'\'s':' ');
    }

}
?>
