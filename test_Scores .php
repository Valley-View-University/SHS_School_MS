<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
<title>Untitled Document</title>
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View Scores</td>
        <td><a href="?tag=score_entry"><input type="button" title="Add new Scores" name="butAdd" value="Add New" id="button-search" /></a></td>
        <td><input type="text" name="txtsearch" title="Enter name for search " class="search" autocomplete="off"/></td>
        <td style="float:right"><input type="submit" name="btnsearch" value="Search" id="button-search" title="Search product" /></td>
    </tr>
</table>
</form>
</div>
<br />

<div id="content-input">
	 <table border="1" width="1300px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Students Name </th>
            <th rowspan="2">Sex </th>
            <th rowspan="2">Date of Birth </th>
            <th colspan="3">French</th>
            <th colspan="3">Business studies</th>
            <th colspan="3">Arts</th>
            <th colspan="3">Maths</th>
            <th colspan="3">Econs</th>
            <th colspan="3">English </th>
            <th rowspan="2">Note</th>
            <th colspan="2" rowspan="2" >Operation</th>
        </tr>
        
        <tr>
        	<th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
            
            <th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
            
            <th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
            
            <th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
            
            <th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
            
            <th>Mid</th>
            <th>Fin</th>
            <th> Total</th>
        </tr>
            
        <?php
		$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM sub_tbl WHERE f_name  like '%$key%' ");
else
        $sql_sel=mysql_query("SELECT * FROM stu_score_tbl GROUP BY stu_id");
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
		$num=$row['stu_id'];
    $i++;
    $color=($i%2==0)?"lightblue":"white";
		
		$sql_stu=mysql_query("SELECT * FROM stu_tbl WHERE stu_id=".$row['stu_id']);
		$fec_stu=mysql_fetch_array($sql_stu);
		
		$sql_web=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=1");
		$fec_web=mysql_fetch_array($sql_web);
		
		$sql_cpp=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=2");
		$fec_cpp=mysql_fetch_array($sql_cpp);
		
		
		$sql_vb=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=5");
		$fec_ec=mysql_fetch_array($sql_vb);
		
		$sql_net=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=4");
		$fec_netw=mysql_fetch_array($sql_net);
		
		$sql_dat=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=6");
		$fec_data=mysql_fetch_array($sql_dat);
		
		$sql_en=mysql_query("SELECT * FROM stu_score_tbl WHERE stu_id=".$row['stu_id']." AND sub_id=3");
		$fec_eng=mysql_fetch_array($sql_en);
    ?>    
       