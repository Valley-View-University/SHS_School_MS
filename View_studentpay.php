
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
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View Student Pay</td>
        <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Student" />
        </td>
    </tr>
</table>
</form>
	</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Student Name</th>
            <th>class</th>
            <th>Term</th>
            <th>Year</th>
            <th>tution</th>
            <th>amount</th>
            <th>Balance</th>
			<th>date</th>
           
        </tr>
	     <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM payment WHERE fnames  like '%$key%'");
	else
		 $sql_sel=mysql_query("SELECT * FROM payment");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
 <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['fnames'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['term'];?></td>
            <td><?php echo $row['year'];?></td>
            <td><?php echo $row['tution'];?></td>
            <td><?php echo $row['amount'];?></td>
            <td><?php echo $row['balance'];?></td>
			 <td><?php echo $row['date'];?></td>
          
             
        </tr>
    <?php	
    }
		
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>
