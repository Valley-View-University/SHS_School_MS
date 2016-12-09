<html>
<head></head>
<title>EAST BANK SHS</title>
<body>
 <form method = "post" >
		<table width = "100%">
		<tr><td width ="10%">Name: </td><td><input type = "text" name = "name"/></td></tr>
		<tr><td width ="10%">Date: </td><td><input type = "date" name = "date"/></td></tr>
		<tr><td width ="10%">Time: </td><td><input type = "time" name = "time"/></td></tr>
		</table><br/><br/>
		<input type = "submit" value = "Check">
		</form>
		<form method="post">
    <a href="?tag=view_attendance"><input type="button" name="btn_view" title="View Attendance" value="View Attendance" id="button_view" style="width:120px;"  /></a>
             
       		</form>	
		<?php		
$josh = mysqli_connect("localhost", "root", "odunayo07", "assignment");
 

if($josh === false){
