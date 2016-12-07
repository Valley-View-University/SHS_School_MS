<?php
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
						
if(isset($_POST['btn_sub'])){
	$stu_name=$_POST['sudenttxt'];
	$fa_name=$_POST['factxt'];
	$sub_name=$_POST['subjecttxt'];
	$miderm=$_POST['midermtxt'];
	$final=$_POST['finaltxt'];
	$note=$_POST['notetxt'];	
	

$sql_ins=mysql_query("INSERT INTO stu_score_tbl 
						VALUES(
							NULL,
							'$stu_name',
							'$fa_name' ,
							'$sub_name',
							'$miderm',
							'$final',
							'$note'
							)
					");
if($sql_ins==true)
	$msg="1 Row Inserted";
else
	$msg="Insert Error:".mysql_error();
	
}

//------------------uodate data----------
if(isset($_POST['btn_upd'])){
	$stu_id=$_POST['sudenttxt'];
	$faculties_id =$_POST['factxt'];
	$sub_id=$_POST['subjecttxt'];
	$miderm=$_POST['midermtxt'];
	$final=$_POST['finaltxt'];
	$note=$_POST['notetxt'];
	
	$sql_update=mysql_query("UPDATE stu_score_tbl SET
							stu_id='$stu_id' ,
							faculties_id='$faculties_id' ,
							sub_id='$sub_id' ,
							miderm='$miderm' ,	
							final='$final' ,
							note='$note' 
						WHERE ss_id=$id

					");
					
if($sql_update==true)
	header("location:?tag=view_scores");
else
	$msg="Update Fail!...";
	
	
}
?>
