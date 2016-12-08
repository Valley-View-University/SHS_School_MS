<html>
<head>
<title>EAST BANK SHS</title>
 <form method="post">
<td>NAMES</td>
<td ><input type="text" name="firstname" required ><br/><br/>
<td>CLASS</td>
      <td></td>
      <td><select name="class"  title="senior ?">
          <option value="SENIOR ONE">S.1</option>
          <option value="SENIOR TWO">S.2</option>
          <option value="SENIOR THREE">S.3</option>
          <option value="SENIOR FOUR">S.4</option>
          <option value="SENIOR FIVE">S.5</option>
          <option value="SENIOR SIX">S.6</option>
        </select></td>
    </tr><br/><br/>
    <tr>
      <td>TERM</td>
      <td></td>
      <td><select name="term"  title="Term">
          <option value="FIRST TERM">1st Term</option>
          <option value="SECOND TERM">2nd Term</option>
          <option value="THIRD TERM">3rd Term</option>
        </select></td>
    </tr><br/><br/>
    <tr>
      <td>YEAR</td>
      <td></td>
      <td><?php
									$options=0;
										for($ya=2011; $ya<=2017; $ya++)
										{
											$options.="<option value=".$ya.">".$ya."</option>";
										}
									?>
        <select name="year">
          <?php echo $options; ?>
        </select></td>
    </tr><br/><br/>
    <tr>
      <td>Amount paid</td>
      <td>&nbsp;</td>
      <td><input type="text" name="amount" size="30" id='in'title="pay money" /></td>
    </tr><br/><br/>
	    <tr>
 <td>TUITION PAID</td>
      <td>&nbsp;</td>
      <td><input type="text" name="tuition" size="30" id='in'title="pay money" /></td>
    </tr><br/><br/>
    <tr>
      <td>DATE</td>
      <td>&nbsp;</td>
      <td><input type="date" id="SelectedDate" name='date' readonly onclick="GetDate(this)" placeholder='select date' /></td>
    </tr><br/><br/>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="bottom" align="center"><input type="submit" name="send" id='send'value="send data" />
        <input type='reset' id='clear'name="clear" value="cancel"  /></td>
    </tr><br/><br/>
  </table>
</form>
<?php		
$josh = mysqli_connect("localhost", "root", "", "akas");
 

if($josh === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$fnames =$_POST['firstname'];
			
			$class=$_POST['class'];
			$term=$_POST['term'];
			$year=$_POST['year'];
			$tution=$_POST['tuition'];
			
			$amount =$_POST['amount'];
			$balance;
			$date=$_POST['date'];
			
			//echo $day;
			$balance=$amount-$tution;
			
	$sql = "INSERT INTO payment (fnames, class, term, year,tution,amount,balance,date) VALUES ('$fnames','$class','$term','$year','$tution','$amount','$balance','$date')";
if(mysqli_query($josh, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($josh);
}
 

mysqli_close($josh);
?>
</body>
</html>