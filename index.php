<?php
	session_start();
	
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['unametxt'];
		$pwd=$_POST['pwdtxt'];
		
		$sql=mysql_query("SELECT * FROM users_tbl
								WHERE username='$uname' AND password='$pwd' 
								
							");
						
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
					if($row['type']=='admin')
						$msg="Incorrect Details. Try Again";	
					else
						header("location: everyone.php");
					
			}
			
			else
					$msg="Incorrect Details. Try Again";
}

?>


<html>
<head>
<div><center>
<img src="picture/logo.jpg" width="150" height="150">
</div></center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>EASTBANK SCHOOL</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
	<form method="post">
    	<fieldset>
        	<fieldset></fieldset>
            	<div id="login_back">
        			<div id="msg">
                    
        			</div>
                    
                    <div id="login_form">
                    	<label for="login">Username:</label>
                    	<input type="text" class="fields" name="unametxt" title="Enter username here"  />
                        <div class="clear"></div>
                        <label for="login">Password:</label>
                        <input type="password" class="fields" name="pwdtxt"  title="Enter Password here"  autocomplete="off"/>
                        <div class="clear"></div>
                        
                        <div id="space_div"></div>
                        <input type="submit" class="button" name="btn_log" value="Log in" />	
                    
                    </div>
        		</div>
    	</fieldset>
    </form>
	<h2 style="color:#00F;" align="center">
	<?php echo $msg; ?>
	</h2>
</body>
</html>
