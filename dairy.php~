<head>
 <style>
.page
{
text-align:center;
background-color:#fff;
display:inline-block;
}
.page .header
{
width:auto;
height:auto;
display:inline-block;
background-color:#fff;
}

.page .header .cell
{
width:820px;
margin-left:15px;
background-color:#fff;
border:1px solid gray;
border-radius:10px;
text-align:left;
padding:10px 0 0 10px;
display:inline-block;
}
.body
{
width:auto;
height:auto;
background-image:url(1.png);
padding-left:70px;
text-align:center;
}
.form_title
{
font-size:14pt;
padding:2px;
border:0px;
background-image:url(2.png);
}
.form_text
{
padding-top:5px;
width:100%;
height:70%;
font-size:16pt;
border:0px;
background-image:url(3.png);
font-weight:normal;
}
.form_title:focus, .form_text:focus
{
border:0px;
outline:0px;
}
.submit
{
width:160px;
height:30px;
border:3px solid #ddd;
background-color:gray;
border-radius:5px;
color:white;
font-size:14pt;
cursor:pointer;
}

 </style>
</head>

 <body>
<?php
$date=date('Y-m-d');
$time=date('h:i:s');
$timestamp=$date." ".$time;
?>
  <section class="page">
<div class="header">
<div class="cell">
<form method="post">
<textarea rows="1" cols="40" class="form_title" placeholder="Note Title" name="note_title" required></textarea>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<textarea class="form_title" id="tdate" rows="1" name="note_date" size="24"><?=$timestamp?></textarea>
</div>
  </section>
<div class="body">

<textarea class="form_text" placeholder="How was the day.." name="note_desc" required></textarea>
<a href="dairy.php" target="_parent"><button type="button" class="submit" name="submit">Full Page</button></a><button type="submit" class="submit" name="submit">Save it!</button>
</form>
<?php
if(isset($_POST['submit']))
{
$title=$_POST['note_title'];
$date=$_POST['note_date'];
$desc=$_POST['note_desc'];
$holder=$_COOKIE['logged_user'];
include"connect.php";
//CURRENT_TIMESTAMP;
$query="insert into insert_note(`note_title`,`note_date`,`note_desc`,`note_holder`) values('$title','$date','$desc','$holder')";
$re=mysql_query($query,$db);
if($re)
	{
	?>
	<script>alert("successfully saved your note..");</script>
	<?php
	}
else
	{
?>
	<script>alert("There is a problem while saving your note..");</script>
	<?php
	}
}
?>
</div>
</body>
