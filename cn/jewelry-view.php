<?php
$crr_page='jewelry-view';

require_once('../includes/connection.php');
$conn=dbConnect('write','pdo');
$conn->query("SET NAMES 'utf8'");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../styles/main.css?v=<?php echo strtotime('now'); ?>" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://releases.flowplayer.org/5.4.6/skin/minimalist.css" />

<!---调用css---->
<link rel="stylesheet" href="/styles/bootstrap.min.css?v=17"/>
<link rel="stylesheet" href="/fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<!---调用js---->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="//releases.flowplayer.org/5.4.6/flowplayer.min.js"></script>
<script type="text/javascript" src="../jscontrol.js?v=<?php echo strtotime('now'); ?>"></script>
<script src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!---diamonds-view.php调用---->




<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<style type="text/css">
div.main_contentbox{
	margin:0;
}
#jewelrybtn{
	border-bottom-style: solid;
    border-width: 2px;
}
div.r_box{
	background-color: #CCCCCC;
    display: inline-block;
    height: 165px;
    list-style: none outside none;
    margin: 2px;
    padding: 0;
    position: relative;
    width: 165px;
}
a.j_linker{
	height: 165px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 165px;
}
.j_linker img{
	width:100%;
}
a.j_linker_txt{
	background-color: rgba(255, 255, 255, 0.95);
    bottom: 0;
    color: #000000;
    font-size: 12px;
    left: 0;
    padding: 5px;
    position: absolute;
    text-decoration: none;
    width: 155px;
}



h3.blocktitle{
	text-align:center;
	margin:0;
	font-size:22px !important;
	padding:25px 0;
}
div#txt_box{
	max-width:358px;
	margin:0 auto;
	text-align:center;
}

div#thumbsbox{
	position:relative;
	max-width:528px;
	text-align:center;
	margin:5px auto;
}
div#txtvideobox{
	position:relative;
	margin:5px auto 0 auto;
	width:350px;
}

#thumbsbox img{
	position:relative;
	display:block;
	width:100%;
	max-width:528px;
	margin:12px auto;
}
label{
	display:inline-block;
	width:108px;
}
#contactform input{
	width:208px;
}
#cformsendbtn{
	font-size:14px; 
	font-weight:bold; 
	padding:12px 30px; 
	background-color:#CC6699;
	color:#FFF; 
	border-width:1px; 
	width:200px;
}
p.pq{
	margin:5px 0;
}
h4#feedbackmessage{
	color:#CC6699;
	font-size:20px;
}
#contactinfo{
	margin-bottom:20px;
	border-bottom-style:dotted;
	border-width:1px;
	border-color:#CC6699;
	padding-bottom:20px;
}
div.subnavi_box{
	display:none;
}
</style>
<script type="text/javascript">

</script>
<title>利美钻石 - 精品首饰</title>
</head>

<body>
<div  class="container" >


<div class="bodycontent">
<?php

if(isset($_GET['p'])){
	$p=$_GET['p'];
}else{
	$p='';
}
?>


<div class="main_contentbox">
<?php
if(!isset($_GET['id'])){exit('error: id required');}

$id=$_GET['id'];


$sql='SELECT * FROM jewelry WHERE id = '.$id;
foreach($conn->query($sql) as $row){}
?>

<?php


if($row['category']=='ring'){
	$cate='戒指';
	$cate_linker='ring.php';
}else if($row['category']=='necklace'){
	$cate='项链';
	$cate_linker='necklace.php';
}else if($row['category']=='earring'){
	$cate='耳环';
	$cate_linker='earring.php';
}else if($row['category']=='bracelet'){
	$cate='手链';
	$cate_linker='bracelet.php';
}
?>




<h3 class="blocktitle"><?php echo $row['name_ch']; ?></h3>





<div id="txt_box" style="margin-top:12px;">
<?php echo $row['text_ch']; ?>
</div>


<div id="img_show_box">


<div id="thumbsbox">


<img id="thumb1" src="../images/sitepictures/<?php echo $row['image1']; ?>" />


<?php
if($row['image2']!=NULL && $row['image2']!=''){
?>


<img id="thumb2" src="../images/sitepictures/<?php echo $row['image2']; ?>" />

<?php
}
?>
<?php
if($row['image3']!=NULL && $row['image3']!=''){
?>


<img id="thumb3" src="../images/sitepictures/<?php echo $row['image3']; ?>" />


<?php
}
?>
<?php
if($row['image4']!=NULL && $row['image4']!=''){
?>

<img id="thumb4" src="../images/sitepictures/<?php echo $row['image4']; ?>" />

<?php
}
?>
<?php
if($row['image5']!=NULL && $row['image5']!=''){
?>

<img id="thumb5" src="../images/sitepictures/<?php echo $row['image5']; ?>" />

<?php
}
?>
<?php
if($row['image6']!=NULL && $row['image6']!=''){
?>

<img id="thumb6" src="../images/sitepictures/<?php echo $row['image6']; ?>" />


<?php
}
?>
<?php
if($row['image7']!=NULL && $row['image7']!=''){
?>

<img id="thumb7" src="../images/sitepictures/<?php echo $row['image7']; ?>" />

<?php
}
?>
<?php
if($row['image8']!=NULL && $row['image8']!=''){
?>

<img id="thumb8" src="../images/sitepictures/<?php echo $row['image8']; ?>" />

<?php
}
?>




</div>

<div id="txtvideobox">
<?php
if($row['videolink']!=NULL && $row['videolink']!=''){

echo $row['videolink']; 

}
?>
</div>


<br style="clear:both;" />


<div id="placeholder" style="position:relative; height:68px;"></div>
</div>








<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
$("a.thumb").fancybox({
	beforeLoad: function(){
					$('iframe').css('visibility',"hidden");
				},
	afterClose: function(){
					$('iframe').css('visibility',"visible");
				}
});
</script>

</div>


</div>


</div>
</body>
</html>