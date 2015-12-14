<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<!--<link rel="stylesheet" type="text/css" href="includes/styles.css" />-->
		<h1><?=$pageID?></h1>
<?php
    
    if(isset($_POST['submit'])){//data submitted
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'tgreis01@seattlecentral.edu';
    $message = process_post();
    $replyTo = $_POST['Email'];
    $subject = 'Test from contact form';
    
    safeEmail($to, $subject, $message, $replyTo);

}
else{//show form

    echo '
    
    <form method="post" action="' . THIS_PAGE . '">
   <!--<div align="center"><span class="required">(*required)</span></div>-->
	<table border="1" style="border-collapse:collapse" align="center">
		<tr><!-- the form elements Name and Email are sigificant to the app, any others can be added/deleted -->
			<td align="right"><span class="required">*</span>Name:</td>
			<td><input type="text" name="Name" required="required" /></td>
		</tr>
		<tr><td align="right"><span class="required">*</span>Email:</td>
			<td><input type="text" name="Email" required="required" /></td>
		</tr>
		<tr><td align="right">How Did You Hear About Us?</td>
			<td>
				<select name="How_Did_You_Hear_About_Us?">
					<option value="">Choose How You Heard</option>
					<option value="Phone">Phone</option>
					<option value="Web">Web</option>
					<option value="Magazine">Magazine</option>
					<option value="Smoke Signal">Smoke Signal</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr><td align="right">What Services Are You Interested In?:</td>
			<td>
				<input type="checkbox" name="Interested_In[]" value="New Website" /> New Website <br />
				<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
				<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
				<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
				<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
			</td>
		</tr>
		<tr>
			<td align="right">Would You Like To Join Our Mailing List?</td>
			<td>
				<input type="radio" name="Join_Mailing_List?" value="Yes" required="required"/> Yes <br />
				<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
			</td>
		</tr>
		<tr><td align="right">Comments:</td>
			<td><textarea name="Comments" cols="40" rows="4" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name = "submit" value="submit" /></td>
		</tr>
    </table>

    
    </form>
    
    ';
    
}
    
    
    
?>


<?php include 'includes/footer.php'; ?>