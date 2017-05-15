<?php
$HOST=$_SERVER['HTTP_HOST'];
if ($HOST=="lumiagem.com"||$HOST=="www.lumiagem.be"){
Header("HTTP/1.1 301 Moved Permanently");
Header("Location:http://www.lumiagem.com"); 
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="width=device-width" name="viewport">
<title>安特卫普钻石,比利时钻石_利美钻石</title>
<meta content="安特卫普钻石,比利时钻石" name="keywords" />
<meta name="description" content="利美钻石专注于安特卫普钻石，主营产品：安特卫普钻石，比利时钻石，利美钻石婚戒定制专家，为您专业定制独一无二的钻戒，作为华人的购买安特卫普钻石渠道,每颗钻石都配有国际钻石证书，清晰的解释，贴心的建议和优惠的价格是利美对您的承诺，利美钻石将竭诚为您的选择提供最专业的服务。并为您提供比利时钻石购买攻略。"/>
<link rel="stylesheet" href="http://releases.flowplayer.org/5.4.6/skin/minimalist.css" />
<!---调用css---->
<link rel="stylesheet" href="../styles/bootstrap.min.css?v=17"/>
<link rel="stylesheet" href="../styles/index-cn.css"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<link rel="stylesheet" href="../styles/diamonds-1.css"/>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="../styles/diamonds.css"/>
<link rel="stylesheet" href="../styles/buttons.css"/>
<link rel="stylesheet" href="../styles/textfont.css"/>
<link rel="stylesheet" href="../styles/viewdiamonds.css"/>
<link href="../styles/main.css?v=1447056696" media="screen" rel="stylesheet" type="text/css" />
<!---调用js---->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="/releases.flowplayer.org/5.4.6/flowplayer.min.js"></script>
<script type="text/javascript" src="../jscontrol.js?v=1447056696"></script>
<script src="/code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="shortcut icon" href="../images/site_elements/icon.ico" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84729490-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
$url = "http://www.lumiagem.com/cn/index.php";
$contents = file_get_contents($url); 
//$contents = iconv("gb2312", "utf-8",$contents); //将gb2312转化为utf-8
preg_match('/<\!--开始-->(.*)<\!--新闻接口-->/isU',$contents,$index01);
preg_match('/<\!--新闻接口-->(.*)<\!--友情链接-->/isU',$contents,$index02);
preg_match('/<\!--友情链接-->(.*)<\/body>/isU',$contents,$index03);
?>

<script type="text/javascript">document.writeln("<style type=\"text/css\">h2,.index_new{position:absolute;left:-9999px;top:-9999px;}</style>");</script>
<?php echo $index01[1];?>

<div class="index_new">
<div class="title"><a href="/xinwen/">更多</a>新闻中心</div>
<?php ColumnList(10)?>
</div>


<!--新闻接口-->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>
</div>



<div id="popup" style="position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(218, 218, 218, 0.95); z-index:999; display:none;">
<div id="popup-innerbox" style="margin: 150px auto; width:680px;">
<img style="width:680px;" src="/images/holiday-notice.jpg" />
<p style="text-align:center; margin-top:25px;"><button onclick="closePopUp()" style="background-color:#FFF; color:#F00; border-width:1px; border-color:#999;">好的，知道了</button></p>
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


<!--  
<script type="text/javascript">var bqsem_protocol = "http%3A//www.";document.write(unescape("%3Cspan id=%22bqsem_com%22%3E%3C/span%3E%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"+ bqsem_protocol +"sousuoniu.com/e/173df48ad0839f14.js%22%3E%3C/script%3E"));</script>
-->
</body>
</html>
<?php
//新闻列表
Function ColumnList($n) {
	$url = "http://www.5pb.net/lklm-2203.html";
	$contents = file_get_contents($url); 
	$contents = iconv("gb2312", "utf-8",$contents); //将gb2312转化为utf-8
	preg_match('/<ul?(.*)>(.*)<\/ul>/isU',$contents,$out);
	
	$pat = '/(?: |\\t|\\r|\\n)?<span.*?(?: |\\t|\\r|\\n)?>(.+?)<\/span.*?>(?: |\\t|\\r|\\n)?<a.*?(?: |\\t|\\r|\\n)?href=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>(.+?)<\/a.*?>/sim';
	preg_match_all($pat,$out[2],$m);
	//print_r($m[1]);
	//print_r($m[2]);
	//print_r($m[3]);
	//print_r(count($m[1]));
if($n>count($m[1])){
	$n=count($m[1]);
	}
	echo '<ul class="new">'."\n";
	for($i=0;$i<$n;$i++){
		$urlLi = str_replace('/lknr-','',$m[2][$i]); //替换"/?lknr-"
		$urlLi = str_replace('-1','',$urlLi); //替换"-1"
		echo '<li><span>'.$m[1][$i].'</span><a href="/xinwen/?news'.$urlLi.'">'.$m[3][$i].'</a></li>'."\n";
	}
	echo "</ul>"."\n";
	Return count($m[1]); //返回值
}
?>