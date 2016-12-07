<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM sub_tbl WHERE sub_id=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	echo $msg;
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EASTBANK SCHOOL</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td width="200px" style="font-size:18px; color:#006; text-indent:30px;">View Subjects</td>
        <td><a href="?tag=subject_entry"><input type="button" title="Add new Subjects" name="butAdd" value="Add New" id="button-search" /></a></td>
        <td><input type="text" name="searchtxtz" title="Enter name for search " class="search" autocomplete="off"/></td>
        <td style="float:right"><input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Subject" /></td>
