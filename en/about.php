<?php
$crr_page='about';
include_once('includes/header_ele.php');
?>



<style type="text/css">
#aboutbtn{
	border-bottom-style:solid;
	border-width:2px;
}
img.sidevisual{
	width:360px; 
	margin: 20px 35px 185px 0; 
	float:left;
}
.empart em{
	font-size:14px !important;
}


ul.news-box{
	padding:0;
}
li.newspiece{
	display:inline-block;
	list-style:none;
	width:165px;
	padding:0;
	margin:2px;
	height:128px;
	position:relative;
	background-color:#CCC;
}
li.pagesbtn{
	list-style:none;
	margin-top:35px;
}
a.imglinker{
	position:absolute;
	width:165px;
	top:0;
	left:0;
	height:128px;
	overflow:hidden;
}
a.imglinker img{
	width:100%;
}
a.txtlinker{
	position:absolute;
	bottom:0;
	left:0;
	padding:5px;
	width:155px;
	font-size:12px;
	color:#000;
	text-decoration:none;
	background-color:#F5F6F7;
	background-color:rgba(255,255,255,.95);
}
a.articlepagelinker{
	display:inline-block;
	padding:2px;
	color:#333;
	font-size:13px;
}
ol{
	padding-left:25px;
}
ol li{
	padding:8px 0;
}
</style>
<title>利美钻石 - 品牌故事</title>
</head>

<body>



<?php
include_once('includes/header.php');
?>



<div id="bodycontent">

<?php

if(isset($_GET['p'])){
	$p=$_GET['p'];
}else{
	$p='';
}

switch($p){
	case 'brandstory':
	$the_page='content/brandstory.php';
	break;
	
	case 'whylumia':
	$the_page='content/whylumia.php';
	break;
	
	case 'buyeasy':
	$the_page='content/buyeasy.php';
	break;
	
	case 'publicmedia':
	$the_page='content/publicmedia.php';
	break;
	
	case 'article':
	$the_page='content/article.php';
	break;
	
	default:
	$the_page='content/brandstory.php';
}


include_once("$the_page");
?>

</div>




<?php
include_once('includes/footer.php');
?>


<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image4.jpg" />
</div>
</div>

</body>
</html>