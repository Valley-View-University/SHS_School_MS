style type="text/css">
			
			th{border-bottom:1px solid #333333;border-left:1px solid #333333;border-top:1px solid #666666; padding-bottom:12px;}
			td{ border-bottom:1px solid #3F3F3F ;border-left:1px solid #333333;}
			</style>
<?php
        $host = "localhost";
$user = "root";
$password = "odunayo07";
$database  = "assignment";
 
 $db_server = mysql_connect("localhost", "root", "odunayo07");
  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db('assignment')
    or die("Unable to select database: " . mysql_error()); 

			$sel=mysql_query("SELECT * FROM teachercheck");
			echo '<table style="width:100%;">';
			echo '<th align="left">NAME</th><th align="left">DATE  </th><th align="left">TIME </th>';
			$flag = 0;
			while($fetch=mysql_fetch_array($sel)){
			echo '<tr><td>'.$fetch['1'].'</td><td>'.$fetch['2'].'</td><td>'.$fetch['3'].'</td></tr>';
			 
			}
			echo '</table>';
