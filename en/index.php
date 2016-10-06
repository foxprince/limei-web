<?php
include_once('includes/header_ele.php');
?>



<style type="text/css">
body{
	overflow-x:hidden;
	overflow-y:auto;
}
div#bodycontent{
	background-color:transparent;
	overflow:visible;
	margin-top:0px;
	height:505px;
	width:925px;
	margin:0 auto;
}


div.sloganbox{
    position:absolute;
	width:100%;
	height:200px;
    text-align: right;
	top: 128px;
}
div.sloganboxinner{
	position:relative;
	margin:0 120px;
}
.sloganboxinner img.theslogan{
	width:450px;
	margin-right:25px;
}
img.visuallinker{
	width:108px;
	margin-right:25px;
	border:none;
}
div#bgbox2{
	position:absolute;
	top:0;
	left:0;
	width:100%;
}
div#bgbox{
	z-index:-2;
}
div#bgbox2{
	z-index:-1;
}
div#bginner2{
	position:relative;
	margin:0 120px;
	height:500px;
	background-image:url(../images/site_elements/top.png);
	background-repeat:no-repeat;
	background-position:left bottom;
}
div.empart span, div.empart em{
	font-size:10px !important;
}












/* ---------------------------------------------- */
div.home_block{
	position:absolute;
	width:100%;
	background-color:#FFF;
	top:0;
	left:-120px;
	height:480px;
	text-align:center;
	display:none;
}
div#home_block0{
	display:block;
	z-index:-28;
}


div#slideshowbg{
	position:absolute;
	width:100%;
	height:535px;
	top:152px;
	left:0px;
	background-color:#FFF;
	z-index:-29;
}


a.ele_linker1, a.ele_linker2, a.ele_linker3{
	position:relative;
	text-align:center;
	display:inline-block;
	text-decoration:none;
	width:32%;
	height:480px;
	font-size:0;
}

.home_block span.imgbox{
	width:100%;
	background-color:#FFF;
	display:inline-block;
	margin:0;
	padding:0;
	text-align:center;
	border:none;
	height:380px;
}
span.imgbox img{
	width:100%;
	display:inline-block;
	border:none;
}
p.ele_words{
	display:inline-block;
	font-size:16px;
	color:#333;	
}




p#slidernavi{
	position:relative;
	top:418px;
	text-align:center;
	color:#999;
}
#slidernavi a{
	color:#999;
	text-decoration:none;
	font-size:32px;
	font-family:'Helvetica neue', sans-serif;
	font-weight:100;
	position:relative;
	display:inline-block;
	top:5px;
}

.footer {
	position:relative;
	margin-top:58px;
	top:0;
}
</style>
<script type="text/javascript">

</script>
<title>Lumiagem - homepage</title>
</head>

<body>



<?php
include_once('includes/header.php');
?>

<div id="slideshowbg">&nbsp;</div>



<div id="bodycontent">


<?php
include_once('content/home.php');
?>



</div>




<?php
include_once('includes/footer.php');
?>


<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/bottom3.jpg" />

</div>
</div>





</body>
</html>