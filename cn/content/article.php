<div  class="container-fluid">
<div class="row ">
<div class="subnavi_box-1 col-xs-12 col-sm-12 col-md-3">

<?php
if($crr_page=='guide'){
	include_once('content/sub_navi/guide.php');
}else if($crr_page=='news'){
	include_once('content/sub_navi/news.php');
}else if($crr_page=='about'){
	include_once('content/sub_navi/about.php');
}else {
    include_once('content/sub_navi/about.php');
}

?>

</div>


<div class=" col-xs-12 col-sm-12 col-md-9">
<?php 
if(!isset($_GET['id'])){exit('error: id required');}

$id=$_GET['id'];
$sql='SELECT * FROM usefulinfo WHERE id = "'.$id.'"';
foreach($conn->query($sql) as $row){}
if(isset($row)){
?>
<h1 id="articletitle"><?php echo $row['title_ch']; ?></h1>


<div id="txt_box" style="margin-top:12px;">
<?php echo $row['text_ch']; ?>
</div>
<?php
}
?>

</div>

</div>
</div>