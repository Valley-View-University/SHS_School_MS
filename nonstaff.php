<html>
<title>EAST BANK SHS</title>
<head>
</head>
<body>

   <form method="post">
  NAME: <input type="text" name="name" title="required"><br/><br/>
  GENDER:<input type="text" name="gender" title="required"><br/><br/>
  ADDRESS: <input type="text" name="address" title="required"><br/><br/>
  DUTY:<input type="text" name="duty" title="required"><br/><br/>
  SALARY:<input type="text" name="salary"title="required"><br/><br/>
  PHONE:<input type="text" name="phone" title="required"><br/><br/>
   <input type = "submit" value = "REGISTER">
		</form>
	<form method="post">
    <a href="?tag=view_nonstaff"><input type="button" name="btn_view" title="View Teachers" value="View Nonstaff" id="button_view" style="width:120px;"  /></a>
             
       		</form>	
<?php		
$josh = mysqli_connect("localhost", "root", "odunayo07", "assignment");
 

if($josh === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$Name = mysqli_real_escape_string($josh, $_POST['name']);
$Gender= mysqli_real_escape_string($josh, $_POST['gender']);
$Address= mysqli_real_escape_string($josh, $_POST['address']);
$Duty= mysqli_real_escape_string($josh, $_POST['duty']);
$Salary= mysqli_real_escape_string($josh, $_POST['salary']);
$Phone= mysqli_real_escape_string($josh, $_POST['phone']);
 $sql = "INSERT INTO nonstaff_tbl (name, gender, address, duty, salary, phone) VALUES ('$Name', '$Gender', '$Address', '$Duty', '$Salary', '$Phone')";
if(mysqli_query($josh, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($josh);
}
 

mysqli_close($josh);
?>

	</body>
</html>