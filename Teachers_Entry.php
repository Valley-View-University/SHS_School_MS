<?php

	$msg="";
	$opr="";
	$id="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
//--------------add data-----------------
if(isset($_POST['btn_sub'])){
	$f_name=$_POST['fnametxt'];
	$l_name=$_POST['lnametxt'];
	$gender=$_POST['genderrdo'];
	$dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
	$pob=$_POST['pobtxt'];
	$addr=$_POST['addrtxt'];
	$degree=$_POST['degree'];
	$salary=$_POST['slarytxt'];
	$married=$_POST['marriedrdo'];
	$phone=$_POST['phonetxt'];
	$mail=$_POST['emailtxt'];
	$note=$_POST['notetxt'];	
	
$sql_ins=mysql_query("INSERT INTO teacher_tbl 
						VALUES(
							NULL,
							'$f_name',
							'$l_name' ,
							'$gender',
							'$dob',
							'$pob',
							'$addr',
							'$degree',
							'$salary' ,
							'$married',
							'$phone',
							'$mail',
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
	$f_name=$_POST['fnametxt'];
	$l_name=$_POST['lnametxt'];
	$gender=$_POST['genderrdo'];
	$dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
	$pob=$_POST['pobtxt'];
	$addr=$_POST['addrtxt'];
	$degree=$_POST['degree'];
	$salary=$_POST['slarytxt'];
	$married=$_POST['marriedrdo'];
	$phone=$_POST['phonetxt'];
	$mail=$_POST['emailtxt'];
	$note=$_POST['notetxt'];

	$sql_update=mysql_query("UPDATE teacher_tbl SET
							f_name='$f_name' ,
							l_name='$l_name' ,
							gender='$gender' ,
							dob='$dob' ,
							pob='$pob' ,
							address='$addr' ,
							degree='$degree' ,
							salary='$salary' ,
							married='$married' ,
							phone='$phone' ,
							email='$mail' ,
							note='$note'
						WHERE teacher_id=$id
	
	");
if($sql_update==true)
	$msg="Update successful!...";
else
	$msg="Update Fail!...";

}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_entry.css" />
<title>EASTBANK SCHOOL</title>
</head>

<body>

<?php
if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM teacher_tbl WHERE teacher_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<div id="top_style">
        <div id="top_style_text">
        Teachers 
        Update</div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_teachers"><input type="button" name="btn_back" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<!-- for form Upadte-->


<div id="style_informations">
	<form method="post">
    	<div>
    	<table border="0" cellpadding="5" cellspacing="0">
            	<tr>
                	<td>First Name</td>
                    <td>
                    	<input type="text" name="fnametxt" id="textbox" value="<?php echo $rs_upd['f_name'];?>" />
                    </td>
            	</tr>
                
                <tr>
                	<td>Last Name</td>
                    <td>
                    	<input type="text" name="lnametxt" id="textbox"  value="<?php echo $rs_upd['f_name'];?>"/>
                    </td>
            	</tr>
                
                <tr>
                	<td>Gender</td>
                    <td>
                    	<input type="radio" name="genderrdo" value="Male"<?php if($rs_upd['gender']=="Male") echo "checked";?>  />Male
                        <input type="radio" name="genderrdo" value="Female"<?php if($rs_upd['gender']=="Female") echo "checked";?> />Female
                    </td>
                </tr>
                
                <tr>
            	<td>Date Of Birth:</td>
                <td>
                	<select name="yy" >
                    	<option>years</option>
                    	
                        <?php
							$sel="";
							for($i=1985;$i<=2015;$i++){	
								if($i==$y){
									$sel="selected='selected'";}
								else
								$sel="";
							echo"<option value='$i' $sel>$i </option>";
							}
							
						?>
	</select>
                    -
                    <select name="mm">
                    	<option>Month</option>
						<?php
							$sel="";
                            $mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
									if($i==$m){
										$sel=$sel="selected='selected'";}
									else
										$sel="";
                                echo"<option value='$i' $sel> $mon</option>";		
                            }
                        ?>