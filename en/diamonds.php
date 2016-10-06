<?php
$crr_page='diamonds';
include_once('includes/header_ele.php');
?>


<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<style type="text/css">
#diamondsbtn{
	border-bottom-style:solid;
	border-width:2px;
}

div#tableheader{
	position:relative;
}


#filter_box{
	margin-bottom:5px;
	padding-bottom:25px;
	position:relative;
	z-index:5;
	margin-top:-33px;
	margin-left:185px;
	height:118px;
}
div#filter_box_inner{
	position:relative;
	background-color:#FFF;
	border-style:solid;
	border-width:5px;
	border-color:#FFF;
	box-shadow: 0 0 3px rgba(128,128,128,.5);
	margin-right:38px;
	border-radius:8px;
	overflow:hidden;
}
#filter_line_clarity ul{
	white-space:nowrap;
}
#filter_line_color ul{
	white-space:nowrap;
}
p#listdescription{
	margin:0 0 5px 0;
	font-size:12px;
}
span#resulthowmany{
	font-size:16px;
	font-weight:bold;
}

button#updateBTN{
	display:inline-block;
	background-color:#C90;
	color:#FFF;
	border-width:1px;
	position:absolute;
	right:50px;
	bottom:20px;
	font-size:18px;
	padding:3px 12px;
}

#dia-page-selector button{
	background-color:#FFF;
	border-style:solid;
	border-width:1px;
	border-radius:2px;
	padding:1px 3px;
	margin:0;
}

#dia-page-selector button.crr-page{
	background-color:#E0CF99;
	border-style:none;
	border-width:0;
	padding:2px 5px;
}






p#listdescription{
	position:relative;
}
span#dia-page-selector{
	position:absolute;
	right:30px;
	top:2px;
}
span.dia-page-btn{
	display:inline-block;
	margin:0 1px;
	font-size:12px;
	cursor:pointer;
	padding: 1px 2px;
}
span#crr_page{
	font-size:14px;
	border-style:solid;
	border-width:1px;
	border-color:#999;
}




/* for table */
tr{
	background-color:#F8F5EB;
}
td{
	padding:5px 3px;
	border-bottom-style:dotted;
	border-width:1px;
	border-color:#993300;
	font-size:12px;
	overflow:hidden;
}
tr:hover{
	background-color:#FFF;
}
td.ref_number{
	font-size:10px;
	border-left-style:solid;
	border-width:1px;
}
td.detail_1stcol{
	border-left-style:solid;
	border-right-style:solid;
	border-width:1px;
}

td.value_symmetry{
	white-space:nowrap;
	overflow:hidden;
}
span.valuetxt{
	display:inline-block;
	width:50px;
	white-space:nowrap;
	overflow:hidden;
	padding:0;
	margin:0;
}
td.seedetail{
	cursor:pointer;
	color:#433337;
	font-size:14px;
	border-right-style:solid;
}
tr.details{
	display:none;
	
}

.t_h td{
	background-color:#433337;
	color: #FFF;
	width: 50px;
	font-size:10px;
}
.details td{
	vertical-align:top;
	text-align:left;
	background-color:#FFF;
}
img.iconarrow{
	position:relative;
	left:2px;
}
div.detailouterbox{
	display:none;
}







p.details_txt{
	padding-left:20px;
}
p.details_txt2{
	padding-left:8px;
}
div.detailboxtop{
	clear:both;
}
div.detailboxleft{
	float:left;
	width:300px;
	margin-right:15px;
}
div.detailboxright{
	float:left;
	width:360px;
}
p.commentbox, p.stars{
	padding-left:20px;
	margin:5px 0;
}







div.picbox{
	display:inline-block;
	width:138px;
	height:138px;
	padding:3px;
	border-style:solid;
	border-width:1px;
	border-color:#CC6699;
	margin:0 0 3px 0;
}
div.picbox img{
	position:relative;
	width:138px;
	height:138px;
}
button.sortbtn{
	border:none; 
	background-color:#433337; 
	font-size:10px; 
	color:#FFF; 
	cursor:pointer;
	margin:0;
	padding:0;
}




div.imagescontainer{
	padding:0;
}

div.thumbsbox{
	position:relative;
	padding:10px 12px;
	border-radius:6px;
	margin-top:15px;
	background-color:#F8F5EB;
	text-align:left;
	margin-left:20px;
	margin-bottom:20px;
}
a.thumbbox{
	display:inline-block;
	font-size:0;
	width:70px;
	height:70px;
	overflow:hidden;
	padding:0px;
	border-width:3px;
	border-style:solid;
	border-color:#993300;
	margin:3px;
	border-radius:4px;
	text-align:center;
	cursor:pointer;
}
.thumbbox img{
	height:100%;
}


div.videobox{
	padding-top:15px;
	padding-left:5px;
}
div.videobox iframe{
	overflow:hidden;
}


p#filtertab{
	position:absolute;
	top:-18px;
	right:60px;
	font-size:28px;
	font-weight:bold;
	color:#FFF;
	text-shadow:0 1px 0px #C0C0C0;
}
#filter_box ul{
	margin-left:0px;
	padding-left:55px;
}

div.filter_line{
	background-color:rgba(248, 245, 235, 1);
	position:relative;
	font-size:12px;
	margin-bottom:1px;
	padding: 3px 0;
}
div.filter_line_inner{
	display:inline-block;
	padding-right:15px;
	border-right-style:solid;
	border-width:0px;
	border-color:#FFF;
	position:relative;	
}
div#filter_line_clarity, div#filter_line_color{
	width:280px;
}
div#filter_line_price, div#filter_line_weight{
	padding: 0px 0 0px 85px;
}
div#filter_line_price input, div#filter_line_weight input{
	width:55px;
}
div#filter_line_price button, div#filter_line_weight button{
	display:inline-block;
	border-radius:6px;
	cursor:pointer;
	padding:3px 8px;
	margin:0px 0 0px 15px;
	background-color:#FFF;
	border:none;
}
div.filter_line ul{
	margin:0 0 0 45px;
}
ul.fileber_shape_outer{
	margin-left:45px;
}
.filter_line li{
	list-style:none;
	display:inline-block;
	border-radius:5px;
	cursor:pointer;
	padding:2px 3px;
	margin:5px 0;
	background-color:#FFF;
	white-space:nowrap;
}
.filter_line li:hover{
	background-color:#F5f6f7;
}
span.filter_title{
	position:absolute;
	top:7px;
	left:12px;
	font-size:12px;
}
span#filter_title_shape{
	top:17px;
	left:12px;
}
li.filter_shape{
	text-align:center;
	width:25px;
	margin-right: 3px;
	height:25px;
	background-color:#FFF;
	padding:2px;
	font-size:12px;
	text-align:center;
}
li.filter_color{
	width:12px;
	text-align:center;
}
li.filter_clarity{
}
.filter_shape img{
	width:25px;
}






div.videobox{
	position:relative;
}
p.loadingvideo_indi{
	position:absolute;
	top:12px;
	left:20px;
	z-index:-1;
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

a.certi_linker{
	color:#000;
}
span.ratingicon{
	display:inline-block;
	position:relative;
	top:2px;
}
div.videobox_clean{
	position:relative;
}
a.openupvideo{
	display:inline-block;
	position:absolute;
	width:25px;
	height:25px;
	top:10px;
	right:10px;
	z-index:58;
}
</style>
<script type="text/javascript">

</script>
<title>利美钻石 - 精品钻石</title>
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
	$the_page='content/diamonds-all.php';
	break;
		
	case 'color':
	$the_page='content/diamonds-color.php';
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
	
	default:
	$the_page='content/diamonds-all.php';
}


include_once("$the_page");
?>



</div>




<?php
include_once('includes/footer.php');
?>


<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image9.jpg" />
</div>
</div>

</body>
</html>