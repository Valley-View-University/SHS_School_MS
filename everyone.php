<?php
	session_start();
	
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>


<html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EASTBANK SCHOOL</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

</head>

<body>

<div id="admin">
	
        <div id="lmain">
                <a href="#" title="logo" ><img src="picture/logo.jpg" width="190" height="210" /></a>
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="HOME">HOME</a><br />
                	</div>
                    
                   <?php /*?> 
                    <?php 
						$sql_menu=mysql_query("SELECT * FROM  article_tbl WHERE loca_id=1");
						while($row=mysql_fetch_array($sql_menu)){
						?>
						 <div><a href="?tag=view&v_id=<?php echo $row['a_id'];?>"><?php echo $row['title'];?></a></div>
						<?php	
							}
						?>  <?php */?>
                    <div >
                        <a href="?tag=non_staff" title="non-staff">Register Non-staff</a><br />
                	</div>
					
					  <div >
                        <a href="teachers_pay.php" title="payment">Teacher pay</a><br />
                	</div>
					
					<div >
                        <a href="teachers_attendance.php" title="Attendance">Teacher Attendance</a><br />
                	</div>
                    
					<div >
                        <a href="student_pay.php" title="payment">Student pay</a><br />
                	</div>
                    
                     <div>
                    	<a href="everyone.php?tag=test_score" class="customer" title="Shift+Ctrl+T">&nbsp;Test Score</a>
                    </div>
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    		<a href="#" title="Student"></a>
            <a href="#" title="Teacher"></a>
            <a href="#" title="Department"></a>
            <a href="#" title="Subject"></a>
            <a href="#" title="Score"></a>
            <a href="#" title="User"></a>
            <a href="#" title="About us"></a>
            <a href="#" title="Contact"></a>
			<a href="#" title="Log out"></a>
         </div>        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="">Students</a>
                
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="everyone.php?tag=student_entry" class="sales">Students Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_students" class="stocks">View Students</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="#">Teachers</a>
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="everyone.php?tag=teachers_entry" class="order">Teachers Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_teachers" class="stocks">View Teachers</a></li>
                    </ul>
                
                </li>
				
				<li id="li_menu"><a href="">Dept</a>
                 
                    <ul>
                        <li id="li_submenu"><a href="everyone.php?tag=faculties_entry" class=" order">Department Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_faculties" class="customer">View Department</a></li>
                    </ul>
             
</body>
</html>