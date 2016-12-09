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
                        <a href="?tag=nonstaff" title="nonstaff">Register Non-staff</a><br />
                	</div>
		
					<div >
                        <a href="?tag=attendance" title="Attendance">Teacher Attendance</a><br />
                	</div>
                    
					<div >
                        <a href="?tag=studentpay" title="payment">Student pay</a><br />
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
					
					 
                
                </li>
                
                <li id="li_menu"><a href="#">Subjects</a>
                
                    
                    <ul>
                    	<li id="li_submenu"><a href="everyone.php?tag=subject_entry" class=" customer">Subjects Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_subjects" class=" customer">View Subjects</a></li>
                    </ul>
                
                
                </li>
           <li id="li_menu"><a href="">Score</a>
                
                    
                    <ul>
                        
                        <li id="li_submenu"><a href="everyone.php?tag=score_entry" class="customer"> Score Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_scores" class="order">View Score</a></li>
                    </ul>
                
                
                </li>
                
                <li id="li_menu" style="border-right:#CCC"><a href="">Users</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="everyone.php?tag=susers_entry" class="customer">Users Entry</a></li>
                        <li id="li_submenu"><a href="everyone.php?tag=view_users" class="sales">View Users</a></li>
                    </ul>
                    
                </li>
                
                <li id="li_menu"><a href="">AboutUs</a>
                
                    
                    <ul>
                        <li id="li_submenu"><a href="http://www.esc.edu.gh/about-us/" class="stocks">EBS</a></li>
                    </ul>
                
                
                </li>
                <li id="li_menu"><a href="">Contact</a>
                
                	<ul>
                    	 <li id="li_submenu"><a href="http://www.esc.edu.gh/contact-us/" class="customer">Contact Entry</a></li>
                
                	</ul>
                </li>
				
				
				 <li id="li_menu"><a href="">LogOut</a>
                
                	<ul>
                    	 <li id="li_submenu"><a href="logout.php" class="customer">Bye</a></li>
                	</ul>
                </li>
                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
						elseif($tag=="attendance")
                            include("attendance.php");	
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_nonstaff")
						    include("View_nonstaff.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_studentpay")
							include("View_studentpay.php");
						elseif($tag=="view_attendance")
							include("View_attendance.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="nonstaff")
							include("nonstaff.php");
						elseif($tag=="studentpay")
							include("studentpay.php");
						elseif($tag=="test_score")
							include("test_Scores .php");
							/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

             
</body>
</html>