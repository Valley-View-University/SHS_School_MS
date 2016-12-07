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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EASTBANK SCHOOL</title>
<link rel="stylesheet" type="text/css" href="css/style_entry.css" />
</head>

<body>
<?php
if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM stu_score_tbl WHERE ss_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
?>

	<div id="top_style">
        <div id="top_style_text">
      		Scores Update
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_scores"><input type="button" name="btn_view" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post">
    	<div>
    	<table border="0" cellpadding="5" cellspacing="0">
        	<tr>
            	<td>Students's Name</td>
            	<td>
                	<select name="sudenttxt" id="textbox">
                    	<option>---- Students's Name -----</option>
                            <?php
                          		$student_name=mysql_query("SELECT * FROM stu_tbl");
								while($row=mysql_fetch_array($student_name)){
									 if($row['stu_id']==$rs_upd['stu_id'])
								   		$iselect="selected";
									else
										$iselect="";
								?>
                                <option value="<?php echo $row['stu_id'];?>" <?php echo $iselect ;?> > <?php echo $row['f_name']; echo" "; echo $row['l_name'];?> </option>
								<?php	
								}
                            ?>
                            
                    </select>
                </td>
            </tr>
            
            <tr>
            	<td>Facuties's Name</td>
            	<td>
                	<select name="factxt" id="textbox">
                    	<option>---- Facuries's Name   ------</option>
                            <?php
                               $fac_name=mysql_query("SELECT * FROM facuties_tbl");
							   while($row=mysql_fetch_array($fac_name)){
								    if($row['faculties_id']==$rs_upd['faculties_id'])
								   		$iselect="selected";
									else
										$iselect="";
								?>
                        		<option value="<?php echo $row['faculties_id'];?>" <?php echo $iselect ;?> > <?php echo $row['faculties_name'];?> </option>
                                <?php 
							   }
                            ?>
                    </select>
                </td>
            </tr>
		       
            <tr>
            	<td>Subjects's Name</td>
            	<td>
                	<select name="subjecttxt" id="textbox">
                    	<option>------------ Sujects -----------</option>
                            <?php
                               $subject=mysql_query("SELECT * FROM sub_tbl");
							   while($row=mysql_fetch_array($subject)){
								   if($row['sub_id']==$rs_upd['sub_id'])
								   		$iselect="selected";
									else
										$iselect="";
							?>
                            <option value="<?php echo $row['sub_id'];?>" <?php echo $iselect ;?> > <?php echo $row['sub_name'];?> </option>
                            <?php	   
							   }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Miderm</td>
            	<td>
                	<input type="text" name="midermtxt" id="textbox" value="<?php echo $rs_upd['miderm'];?> "/>
                </td>
            </tr>
            
            <tr>
            	<td>Final</td>
                <td>
                	<input type="text" name="finaltxt"  id="textbox" value="<?php echo $rs_upd['final'];?>" />
                </td>
            </tr>
 
