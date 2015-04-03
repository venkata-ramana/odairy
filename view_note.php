
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
padding-top:5px;
display:inline-block;
}
span{padding:20px 20px 0 20px;}
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
font-size:12pt;
margin-top:5px;
padding:0px;
height:30px;
border:0px;
background-image:url(2.png);
}
.form_text
{
padding-top:5px;
width:100%;
height:84%;
font-size:18pt;
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
height:35px;
border:3px solid #ddd;
background-color:gray;
border-radius:5px;
color:white;
font-size:14pt;
cursor:pointer;
}


 </style>
</head>
<?php
$hold=$_GET['holder'];
$id=$_GET['id'];
include"connect.php";
$query="select * from insert_note where note_holder='$hold' and note_id='$id'";
$re=mysql_query($query,$db);
while($row=mysql_fetch_row($re))
{
$title=$row[1];
$desc=$row[3];
$date=$row[2];
}

?>
 <body>
<style>
.submit:active
{
background-color:red;
}
</style>
  <section class="page">
<div class="header">
<div class="cell">
<form method="post">
<span>Title:</span><textarea rows="1" cols="32" class="form_title" name="note_title" ><?=$title?></textarea>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>Date:</span><textarea class="form_title" id="tdate" rows="1" name="note_date" size="24" ><?=$date?></textarea>
</div>
  </section>
<div class="body">

<textarea  class="form_text"  name="note_desc"><?=$desc?></textarea>
<button type="submit" class="submit" name="submit">Update it!</button>
</form>
<?php
if(isset($_POST['submit']))
{
$title=$_POST['note_title'];
$date=$_POST['note_date'];
$desc=$_POST['note_desc'];
$holder=$_COOKIE['logged_user'];
include"connect.php";
$query="update insert_note set `note_title`='$title',`note_date`='$date',`note_desc`='$desc' where `note_id`='$id'";
$re=mysql_query($query,$db);
if($re)
	{
	?>
	<script>alert("successfully updated your note..");</script>
	<?php
	}
else
	{
?>
	<script>alert("There is a problem while updating your note..");</script>
	<?php
	}

}
?>
</div>
</body>
