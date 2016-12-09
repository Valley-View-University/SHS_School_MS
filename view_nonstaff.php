
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
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View Non-Staff</td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" Gender="mytable" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>duty</th>
            <th>Salary</th>
            <th>Phone</th>
           
        </tr>
   <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM payment WHERE Name  like '%$key%'");
	else
		 $sql_sel=mysql_query("SELECT * FROM nonstaff_tbl");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Gender'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['Duty'];?></td>
            <td><?php echo $row['Salary'];?></td>
            <td><?php echo $row['Phone'];?></td>
          
             
        </tr>
    <?php	
    }
		
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>      
