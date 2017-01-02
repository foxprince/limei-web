<?php
include_once('includes/header_ele1.php');
?>
<!--开始-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<style type="text/css">
a.limei-reco {
    display: inline-block;
    width: 238px;
    margin: 8px;
    padding: 15px;
}
span.limei-reco-img-holder{
	display:inline-block;
	width:208px;
	height:208px;
	background-position:center center;
	background-size:auto 208px;
	background-repeat:no-repeat;
	-webkit-transition: background-size 0.3s ease-in-out;
	transition: background-size 0.5s ease-in-out;
}
span.limei-reco-img-holder:hover{
	background-size:auto 228px;
}
span.limei-reco0-title, span.limei-reco0-title-sub{
	display:inline-block;
	width:100%;
	text-align:center;
}
span.limei-reco0-title{
	margin-top:12px;
}
span.limei-reco0-title-sub{
	font-size:12px;
}
</style>
<!-- *************滚动展示栏**************** -->
<script type="text/javascript">
$(document).ready(function(){
  /*
  $('.visualbox-holder').hide();
  $('#home-visual-box').delay(3000).fadeOut(2000);
  $('.visualbox-holder').delay(5000).fadeIn(1000);
	*/
});
</script>

</head>


<body>

<!--div  home-visual-box-->
<div  class="container-fluidX container maxcontainer">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/header1.php');
?>
</div>
</div>


<!--div  bodycontent----------------------------------------------------------------------------------------->
<?php
if(isset($showthethingswedontknowwhataretheohwhatsthat)){
?>
<div class="row hidden-md hidden-sm hidden-lg visualbox-holder" style="height: 280px;top:0px;">
	<div class="col-xs-12 col-sm-12 col-md-12" >
	<?php
	include_once('content/home.php');
	?>
	</div>
</div>

<div  class="row hidden-xs hidden-lg visualbox-holder" style="height: 400px;top:0px;">
	<div class="col-xs-12 col-sm-12 col-md-12" >
	<?php
	include('content/home.php');
	?>
	</div>
</div>

<div  class="row hidden-xs hidden-md hidden-sm visualbox-holder" style="height: 500px;top:0px;">
	<div class="col-xs-12 col-sm-12 col-md-12" >
	<?php
	include('content/home.php');
	?>
	</div>
</div>
<?php
}
?>


<?php
if(!isset($doyouknowwhatitisifnotleaveitaway)){
?>
<!--第一副图片-->
<div class="row imgsize" >
	<div id="home-visual-box" class="col-xs-12 col-sm-12 col-md-12" styleX="top: -500px;height:0;">
		<!-- <img src="../images/site_elements/home-visual.jpg" style="height:500px;"/> -->
	</div>
</div>
<?php
}
?>


<!--第二副图片-->
<div  class="row imgsize homepage">
<h2 style="position:fixed; left:-8888px;">比利时钻石</h2>
<div  class="col-xs-12 col-sm-12 col-md-12 block2-box titlepicbox" style="background-image:url('/images/homepage/2-1.png'); background-size:978px auto; background-repeat:no-repeat; background-position:center center; height:235px;">
<!--
<img style="width:1096px;" src="../images/homepage/2-1.png"/>
-->
</div>

<!---->
<div  class=" col-lg-3 col-md-3 hidden-xs hidden-sm homepage-1" >
<div><p class="text-p-1">钻石源头</p></div>
<div ><img src="../images/homepage/2-2.png" alt="比利时钻石"/></div>
<div class="homepage-2"><a class="text-a-1">利美钻石诞生于安特卫普，这座城市自1447年起便成为了世界钻石交易中心，闻名于世。全球80%的钻石在这里切割，半数以上的钻石都在安特卫普交易。利美钻石品牌背后的是全球最出色的钻石供应商和钻石百年世家的传承的信念。</a>
</div>

</div>

<div  class="col-xs-12 col-sm-12  hidden-md hidden-lg">
<div><p class="text-p-1">钻石源头</p></div>
<div><a href="/cn/about.php?p=article&ref=publicmedia&id=51"><img src="../images/homepage/2-2.png" alt="安特卫普钻石"/></a></div>
<hr />
</div>
<!---->

 <div class="col-lg-1 col-md-1 hidden-sm hidden-xs homepage-3" >
            <div class="homepage-4"></div>
</div>


<div  class="col-lg-3 col-md-3 hidden-xs hidden-sm homepage-1" >
<div><p class="text-p-1">欧洲匠人</p></div>
<div><img src="../images/homepage/2-4.png" alt="比利时钻石"/></div>
<div class="homepage-2"><a class="text-a-1">Antwerp Cut 安特卫普切工，又被称为行业标准钻石切割。安特卫普钻石工匠的手艺被公认为是全世界最优秀的，在安特卫普，每天有上千名工人为获得著名品质标记Antwerp Cut而全力以赴。安特卫普能成为并保持世界钻石中心的地位，与欧洲匠人精湛的工艺是分不开的，至今欧洲匠人仍然垄断者大克拉钻的切割。</a>
</div>
<div style="text-align:center;"><a class="text-a-4 read-more-btn" href="/cn/about.php?p=article&ref=publicmedia&id=52">更多详情</a></div>
</div>

<div  class="col-xs-12 col-sm-12 hidden-md hidden-lg" >
<div><p class="text-p-1">欧洲匠人</p></div>
<div><a href="/cn/about.php?p=article&ref=publicmedia&id=52"><img src="../images/homepage/2-4.png" alt="安特卫普钻石"/></a></div>
<br />
</div>
<!---->

 <div class="col-lg-1 col-md-1 hidden-sm hidden-xs homepage-3">
            <div class="homepage-4"></div>
</div>


<div  class="col-lg-3 col-md-3 hidden-xs hidden-sm homepage-1">
<div><p class="text-p-1">裸钻精品</p></div>
<div ><img src="../images/homepage/2-3.png" alt="比利时钻石"/></div>
<div class="homepage-2"><a class="text-a-1">利美是比利时位于安 特卫普钻石交易所内，是Antwerp Diamond Club钻石交易所的注册会员，世界钻石交易所联合会的会员，同时也是上海钻交所的会员。从原石采购并自己进行组织加工，通过大宗采购来降低成本，这使得我们的销售价格甚至小于某些公司的成本价。 中国一些知名的珠宝品牌商也是我们的客户。</a>
</div>

</div>


<div  class="col-xs-12 col-sm-12  hidden-md hidden-lg" >
<div><p class="text-p-1">裸钻精品</p></div>
<div><a href="/cn/about.php?p=article&ref=publicmedia&id=53"><img src="../images/homepage/2-3.png" alt="安特卫普钻石"/></a></div>
<hr />
</div>

</div>


<!--第三副图片-->
<div  class="row imgsize">
<h2 style="position:fixed; left:-8888px;">安特卫普钻石</h2>
<div  class="col-xs-12 col-sm-12 col-md-12 titlepicbox"  style="background-image:url('/images/homepage/3-1-1.png'); background-size:1278px auto; background-repeat:no-repeat; background-position:center center; height:265px;">
<!--
<img style="width:1280px;" src="../images/homepage/3-1-1.png"/>
-->
</div>
<div  class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
<a class="text-a-3" >利美钻石为您打造第一无二的专属钻戒</a>
</div>
<div  class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
<a class="text-a-3" >在利美，您有超过千中的搭配选择</a>
</div>
<div  class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
<a class="text-a-3" >同时，结合利美多年的销售经验及大数据库，</a>
</div>
<div  class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
<a class="text-a-3" >我们也能够通过您的预算，为您推荐最为适合的搭配。</a>
</div>
<div  class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
<br />
<br />
<a class="text-a-4 read-more-btn" href="/cn/diamonds.php">更多详情</a>
</div>
<div  class="col-xs-12 col-sm-12 col-md-12 ring-pic-inmiddle-box" >
<img id="ring-pic-inmiddle" src="../images/homepage/3-1-2.png" alt="比利时钻石"/>
</div>
</div>


<!--第四副图片-->
<div  class="row imgsize homepage collectioncontainer" >

<div  class="col-xs-12 col-sm-12 col-md-12 collection-title-bloc titlepicbox" style="background-image:url('/images/homepage/4-1.png'); background-size:1094px auto; background-repeat:no-repeat; background-position:center center; height:235px;">
<!--
<img style="width:1096px;" src="../images/homepage/4-1.png"/>
-->
</div>

<?php
$sql_jew='SELECT * FROM jewelry WHERE online_retail = "YES" ORDER BY id LIMIT 8';
foreach($conn->query($sql_jew) as $rr){
	$pic=$rr['image1'];
	$jew_name=$rr['name_ch'];
	$jew_id=$rr['id'];
?>

<a class="limei-reco" href="/cn/jewelry.php?p=detail&id=<?php echo $jew_id; ?>">
<span class="limei-reco-img-holder" style="background-image:url('/images/sitepictures/<?php echo $pic; ?>');"></span>
<!--
<img class="limei-reco-img" src="/images/sitepictures/<?php echo $pic; ?>" />
-->
<span class="limei-reco0-title"><?php echo $jew_name; ?></span>
<span class="limei-reco0-title-sub">18k白金，0.5ct钻石</span>
</a>

<?php
}
?>


</div>

<!--第五副图片-->
<div  class="row imgsize">
<div  class="col-xs-12 col-sm-12 col-md-12 titlepicbox" style="background-image:url('/images/homepage/5-1-1.png'); background-size:988px auto; background-repeat:no-repeat; background-position:center center; height:265px;">
<!--
<img style="width:1280px;" src="../images/homepage/5-1-1.png"/>
-->
</div>
<div  class="col-xs-12 col-sm-12 col-md-12">
<a href="/cn/about.php?p=article&ref=publicmedia&id=54"><img src="../images/homepage/5-1-2.png" alt="安特卫普钻石"/></a>
</div>
</div>
<!--新闻接口-->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer1.php');
?>
</div>
</div>
</div>


<div id="popup" style="position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(218, 218, 218, 0.95); z-index:999; display:none;">
<div id="popup-innerbox" style="margin: 150px auto; width:680px;">
<img style="width:680px;" src="../images/holiday-notice.jpg" />
<p style="text-align:center; margin-top:25px;"><button onClick="closePopUp()" style="background-color:#FFF; color:#F00; border-width:1px; border-color:#999;">好的，知道了</button></p>
</div>
</div>
<script>
$(document).ready(function(){
	//$('#popup').delay(1000).fadeIn();
});
function closePopUp(){
	$('#popup').fadeOut();
}
</script>

<script type="text/javascript">var bqsem_protocol = "http%3A//www.";document.write(unescape("%3Cspan id=%22bqsem_com%22%3E%3C/span%3E%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"+ bqsem_protocol +"sousuoniu.com/e/173df48ad0839f14.js%22%3E%3C/script%3E"));</script>
</body>
