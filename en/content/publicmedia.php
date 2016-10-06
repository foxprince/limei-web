<div class="subnavi_box">

<?php
if($crr_page=='about'){
	include_once('content/sub_navi/about.php');
}
?>

</div>


<div class="main_contentbox">
<?php 
$sql_count='SELECT COUNT(*) AS num_articles FROM usefulinfo WHERE category = "publicmedia"';
foreach($conn->query($sql_count) as $number){
	$articleCount=$number['num_articles'];
}

$totalpages=ceil($articleCount/25);

if(isset($_GET['n'])){
	$crr_page=$_GET['n'];
	if($crr_page>$totalpages){
		$crr_page=$totalpages;
	}
}else{
	$crr_page=1;
}

$startnumber=($crr_page-1)*25;


$sql='SELECT * FROM usefulinfo WHERE category = "publicmedia" ORDER BY id DESC LIMIT '.$startnumber.',25';
$stmt=$conn->query($sql);
?>


<ul class="news-box">


<?php
foreach($stmt as $row){
	if(trim($row['text_en'])!=''){
?>
<li class="newspiece">
<a class="imglinker" href="about.php?p=article&ref=publicmedia&id=<?php echo $row['id']; ?>">
<img class="article_img" src="<?php echo $row['main_image_en']; ?>" />
</a>
<a class="txtlinker" href="about.php?p=article&ref=publicmedia&id=<?php echo $row['id']; ?>">
<?php echo $row['title_en']; ?>
</a>
</li>
<?php
	}
}
?>


<li class="pagesbtn">
<?php
if(isset($totalpages) && $totalpages>1){
	
	for($i=1; $i<=$totalpages; $i++){
	?>
	<a class="articlepagelinker" href="guide.php?p=publicmedia&n=<?php echo $i; ?>">
    
	<?php 
	if($crr_page==$i){
		echo '<span style="font-weight:bold; font-size:16px;">'.$i.'</span>'; 
	}else{
		echo $i;
	}
	?>
    </a>
	<?php
	}
	
}
?>
</li>

</ul>
</div>

<script type="text/javascript">
$('document').ready(function(){
	$('a#industrybtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>