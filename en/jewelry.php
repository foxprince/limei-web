<?php
$crr_page='jewelry';
include_once('includes/header_ele.php');
?>


<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<style type="text/css">
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
	text-align:left;
}

div#thumbsbox{
	position:relative;
	float:left;
	width:350px;
}
div#txtvideobox{
	position:relative;
	float:left;
	margin:5px 0 0 3px;
	width:350px;
}
a.thumb{
	display:inline-block;
	width: 98px;
	height:98px;
	overflow:hidden;
	padding:0;
	margin:3px;
	border-width:3px;
	border-color:#FFF;
	border-style:solid;
	background-color:#999;
}
a.thumb img{
	width:100%;
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
</style>
<script type="text/javascript">

</script>
<title>利美钻石 - 精品首饰</title>
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
	case 'all':
	$the_page='content/jewelry-all.php';
	break;
	
	
	case 'steps':
	$the_page='content/steps.php';
	break;
	
	case 'contact':
	$the_page='content/contact.php';
	break;
	
	case 'buyeasy':
	$the_page='content/buyeasy.php';
	break;
	
	case 'detail':
	$the_page='content/jewelry-detail.php';
	break;
	

	default:
	$the_page='content/jewelry-all.php';
}


include_once("$the_page");
?>



</div>




<?php
include_once('includes/footer.php');
?>


<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image11.jpg" />
</div>
</div>

</body>
</html>