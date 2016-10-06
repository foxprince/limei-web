<div class="subnavi_box">

<?php
include_once('content/sub_navi/about.php');
?>

</div>


<div class="main_contentbox">
<?php 


$sql_text='SELECT content_en FROM about';
foreach($conn->query($sql_text) as $txt){}


echo $txt['content_en'];
?>
</div>

<script type="text/javascript">
$('document').ready(function(){
	$('ul.inner_sub_navi').slideDown('slow');
	$('a#brandstorybtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>