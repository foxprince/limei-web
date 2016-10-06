<div class="subnavi_box">

<?php
if($crr_page=='jewelry'){
	include_once('content/sub_navi/jewelry.php');
}
?>

</div>



<div class="main_contentbox">
<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>




<?php
$querywhere=' ';

if(isset($_GET['ref'])){
	if($_GET['ref']=='ring'){
		$querywhere=' WHERE category = "ring" ';
?>
<script type="text/javascript">
$('document').ready(function(){
	$('a#ringbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>
<?php
	}else if($_GET['ref']=='bracelet'){
		$querywhere=' WHERE category = "bracelet" ';
?>
<script type="text/javascript">
$('document').ready(function(){
	$('a#braceletbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>
<?php
	}else if($_GET['ref']=='earring'){
		$querywhere=' WHERE category = "earring" ';
?>
<script type="text/javascript">
$('document').ready(function(){
	$('a#earringbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>
<?php
	}else if($_GET['ref']=='necklace'){
		$querywhere=' WHERE category = "necklace" ';
?>
<script type="text/javascript">
$('document').ready(function(){
	$('a#necklacebtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>
<?php
	}
}


$sql='SELECT * FROM jewelry '.$querywhere.' ORDER BY id';
foreach($conn->query($sql) as $row){
?>
<div class="r_box">
<a class="j_linker" href="jewelry.php?p=detail&id=<?php echo $row['id']; ?>">
<img class="thumb" src="../images/sitepictures/thumbs/<?php echo $row['image1']; ?>" />
</a>
<a class="j_linker_txt" href="jewelry.php?p=detail&id=<?php echo $row['id']; ?>">
<span class="jewlery_name">
<?php echo $row['name_en']; ?>
</span>
</a>
</div>
<?php
}
?>


</div>
