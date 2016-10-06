<div class="subnavi_box">

<?php
if($crr_page=='about'){
	include_once('content/sub_navi/about.php');
}else if($crr_page=='guide'){
	include_once('content/sub_navi/guide.php');
}else if($crr_page=='diamonds'){
	include_once('content/sub_navi/diamonds.php');
}else if($crr_page=='jewelry'){
	include_once('content/sub_navi/jewelry.php');
}else if($crr_page=='contact'){
	include_once('content/sub_navi/contact.php');
}
?>

</div>


<div class="main_contentbox">
<img style="float:right; width:128px; margin: 20px 0 12px 22px;" src="http://lumiagem.com/images/sitepictures/limei20140512_050456.jpg" />
<p>Do you know which carat to choose?<br />Do you know your price range?<br />You don't know diamond well but want the best value one?</p>
<p>Please contact our diamond experts through phone, Skype or e-mail. We will base on your need and your budget and offer best suggestions.</p>

<p><strong style="color:#900;">Lumia diamonds promises you the best price and undoubted quality to fit all your need.</strong></p>



<div class="contacticonsbox" style="position:relative; padding-left:0; margin-left:0; left:0;">
<a class="contacticon" href="contact.php">
<img src="../images/phone.gif" />
</a> 
<a class="contacticon" href="mailto:info@lumiagem.com">
<img src="../images/mail.gif" />
</a> 

<!--
<a class="contacticon" href="">
<img src="../images/skype.gif" />
</a> 
-->
</div>



</div>




<script type="text/javascript">
$('document').ready(function(){
	$('a#buyeasybtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>