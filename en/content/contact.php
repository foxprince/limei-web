

<div class="subnavi_box">

<?php
if($crr_page=='contact'){
	include_once('content/sub_navi/contact.php');
}else if($crr_page=='diamonds'){
	include_once('content/sub_navi/diamonds.php');
}else if($crr_page=='jewelry'){
	include_once('content/sub_navi/jewelry.php');
}
?>

</div>



<div class="main_contentbox">
<?php
if(isset($_POST['thetxt']) && isset($_POST['email'])){
	
	
	 $input_email=$_POST['email'];
	 $input_name=$_POST['name'];
	 $input_address=$_POST['address'];
	 $input_country=$_POST['country'];
	 $input_question=$_POST['thetxt'];
	 $input_price=$_POST['price'];
	
	require_once('../includes/recaptchalib.php');
	$privatekey = "6LcO9u0SAAAAAGMQoM3deCE6Pw9eZ8oFOeZAZYVc";
	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

	if (!$resp->is_valid) {
	// What happens when the CAPTCHA was entered incorrectly
	/*
	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
		 "(reCAPTCHA said: " . $resp->error . ")");
		 */
		 $message="The reCAPTCHA wasn't entered correctly. Go back and try it again.";
		 
	}else if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
		$message="Invalid Email address, please verify";
	}else if($input_question==''){
		$message="Don not leave your message empty please";
	}else {
	// Your code here to handle a successful verification
		$to      = 'info@lumiagem.com';
		$subject = '您有一则通过网站发送的新留言';
		$message = "发信人: $input_name\n发信人地址: $input_address\n发信人国家: $input_country\n价格范围: $input_price\n\n信息内容:\n".$input_question;
		$headers = "From: $input_name <$input_email>";
		
		mail($to, $subject, $message, $headers);
		$message = "Thanks for your message, we will contact you back soon.";
		$input_email="";
		$input_name="";
		$input_address='';
		$input_question="";
		$input_price="";
		$input_country="";
	}

	
	
}else{
	$input_email="";
	$input_name="";
	$input_address='';
	$input_question="";
	$input_price="";
	$input_country="";
}
?>


<script type="text/javascript">
var RecaptchaOptions = {
theme : 'clean'
};
</script>




<?php
if(isset($message)){
?>
<h4 id="feedbackmessage"><?php echo $message; ?></h4>
<?php
}
?>

<p style="margin-bottom:35px; font-weight:bold;">Schedule a Visit:</p>

<p>Please enter your information below.</p>

<form action="" method="post" id="contactform">
<p class="pq"><label for="name" class="cformlabel">Name</label> <input type="text" name="name" id="visitorname" value="<?php echo $input_name; ?>" /></p>
<p class="pq"><label for="name" class="cformlabel">Post address</label> <input type="text" name="address" id="visitorname" value="<?php echo $input_address; ?>" /></p>
<p class="pq"><label for="name" class="cformlabel">Country</label> <input type="text" name="country" id="visitorname" value="<?php echo $input_country; ?>" /></p>

<p class="pq"><label for="email" class="cformlabel">E-mail</label> <input type="text" name="email" id="visitoremail" value="<?php echo $input_email; ?>" /></p>
<p class="pq">
<label for="subject" class="cformlabel">Price Range
</label>

<select name="price" id="subjectselect">
<option value="">Choose...</option>
<option value="less than 3000€" <?php if($input_price=='less than 3000€'){ echo 'selected="selected"';} ?>>3000€以内</option>
<option value="3000 - 5000€" <?php if($input_price=='3000 - 5000€'){ echo 'selected="selected"';} ?>>3000 - 5000€</option>
<option value="5000 - 7000€" <?php if($input_price=='5000 - 7000€'){ echo 'selected="selected"';} ?>>5000 - 7000€</option>
<option value="7000 - 10000€" <?php if($input_price=='7000 - 10000€'){ echo 'selected="selected"';} ?>>7000 - 10000€</option>
<option value="10000 - 15000€" <?php if($input_price=='10000 - 15000€'){ echo 'selected="selected"';} ?>>10000 - 15000€</option>
<option value="15000 - 20000€" <?php if($input_price=='15000 - 20000€'){ echo 'selected="selected"';} ?>>15000 - 20000€</option>
<option value="20000€ or more" <?php if($input_price=='20000€ or more'){ echo 'selected="selected"';} ?>>20000€以上</option>

</select>
</p>
<p class="pq" style="margin-top:12px;"><label for="thetxt" class="cformlabel">Message:</label></p>
<textarea name="thetxt" id="thetxt" style="width:350px; height:165px;"><?php echo $input_question; ?></textarea>


<br /><br />


<?php
  require_once('../includes/recaptchalib.php');
  $publickey = "6LcO9u0SAAAAANawStaX2pepCvdjPzfACk8Pizeo"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>

<br /><br />
<input type="submit" id="cformsendbtn" value="Send">

</form>

</div>


<script type="text/javascript">
$('document').ready(function(){
	$('a#contactbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>


