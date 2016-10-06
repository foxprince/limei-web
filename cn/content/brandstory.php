<div  class="container-fluid">
<div class="row ">
<div class="subnavi_box-1 col-xs-12 col-sm-12 col-md-3">
<?php
include_once('content/sub_navi/about.php');
?>
</div>

<div class=" col-xs-12 col-sm-12 col-md-9">
<?php 
$sql_element='SELECT aboutimage FROM settings';
foreach($conn->query($sql_element) as $pic){}

$sql_text='SELECT content_ch FROM about';
foreach($conn->query($sql_text) as $txt){}


echo $txt['content_ch'];
?>
</div>
</div>
</div>
<script type="text/javascript">
$('document').ready(function(){
	$('ul.inner_sub_navi').slideDown('slow');
	$('a#brandstorybtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>