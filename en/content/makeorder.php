<div class="subnavi_box">

<?php
if($crr_page=='guide'){
	include_once('content/sub_navi/guide.php');
}
?>

</div>


<div class="main_contentbox">
<?php 

?>


<div id="makeorderbox">

<ul>

<li class="box" style="background-color:#F93;">
<a href="diamonds.php">
<img style="border:none; width:133px; border-radius:8px;" alt="Choose loose diamond" src="../images/site_elements/shopping_guide1.png" />
</a>
<ul>
<li><a href="diamonds.php">Choose based on 4C</a></li>
<li><a href="diamonds.php">Write down the "Reference Code"</a></li>
</ul>
</li>

<li class="box" style="background-color:#C60;">
<a href="jewelry.php"><img style="border:none; width:133px; border-radius:8px;" alt="Choose Jewelry" src="../images/site_elements/shopping_guide2.png" /></a>
<ul>

<li><a href="jewelry.php">Choose the setting</a></li>
<li>Choose the material<br /></li>
<li>Set up engraving</li>
</ul>
</li>


<li class="box">
<a href="contact.php"><img style="border:none; width:133px; border-radius:8px;" alt="Contact with Customer Service" src="../images/site_elements/shopping_guide3.png" /></a>
<ul>
<li><a href="contact.php">Consult our experts</a></li>
<li><a href="contact.php">Place the order</a></li>
</ul>
</li>



</ul>
<br style="clear:both;" />
</div>

</div>

<script type="text/javascript">
$('document').ready(function(){
	$('a#makeorderbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>