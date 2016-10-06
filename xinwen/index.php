<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php
//获取url，判断新闻与栏目
IF ($_SERVER["QUERY_STRING"]<>"") {
	echo ContentTitle($_SERVER["QUERY_STRING"]);
}
Else{
	echo "新闻中心";
}
?></title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<div class="headerBox clearFix">
<div class="logo"><a href="/"><img src="images/logo.gif" alt="比利时钻石" /></a></div>
<div class="text">比利时钻石,安特卫普钻石 - 利美钻石</div>
</div>
<ul id="gNavi" class="clearFix">
<li><a href="/">首页</a></li>
<li><a href="http://www.lumiagem.com/cn/about.php">品牌文化</a></li>
<li><a href="http://www.lumiagem.com/cn/diamonds-rings.php">我的钻戒</a></li>
<li><a href="http://www.lumiagem.com/cn/jewelry.php">精品首饰</a></li>
<li><a href="http://www.lumiagem.com/cn/diamonds.php">精美裸钻</a></li>
</ul>
</div>
<div id="container">
<dl class="gation clearFix">
<dt>您的当前位置：<a href="/">首页</a>-&gt;<a href="/xinwen/">新闻中心</a></dt>
<dd><strong>新闻中心</strong></dd>
</dl>
<?php
//获取url，判断新闻与栏目
IF ($_SERVER["QUERY_STRING"]<>"") {
	Content($_SERVER["QUERY_STRING"]);
}
Else{
	ColumnList();
}
?>
</div>
<div id="footer">
比利时钻石  www.lumiagem.com
</div>
</body>
</html>
<?php
//新闻列表
Function ColumnList() {
	$url = "http://www.5pb.net/?lklm-2203.html";
	$contents = file_get_contents($url); 
	//$contents = iconv("gb2312", "utf-8",$contents); //将gb2312转化为utf-8
	preg_match('/<ul?(.*)>(.*)<\/ul>/isU',$contents,$out);
	
	$pat = '/(?: |\\t|\\r|\\n)?<span.*?(?: |\\t|\\r|\\n)?>(.+?)<\/span.*?>(?: |\\t|\\r|\\n)?<a.*?(?: |\\t|\\r|\\n)?href=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>(.+?)<\/a.*?>/sim';
	preg_match_all($pat,$out[2],$m);
	//print_r($m[1]);
	//print_r($m[2]);
	//print_r($m[3]);
	//print_r(count($m[1]));

	echo '<ul class="news">'."\n";
	for($i=0;$i<count($m[1]);$i++){
		$urlLi = str_replace('/?lknr-','',$m[2][$i]); //替换“/?lknr-”
		$urlLi = str_replace('/lknr-','',$m[2][$i]); //替换"/lknr-"
		$urlLi = str_replace('-1','',$urlLi); //替换“-1”
		echo '<li><span>'.$m[1][$i].'</span><a href="?news'.$urlLi.'">'.$m[3][$i].'</a></li>'."\n";
	}
	echo "</ul>"."\n";
	Return count($m[1]); //返回值
}

//新闻内容
Function Content($id) {
	//echo $id; //测试传值
	$urlid = strtolower($id);
	$urlid = str_replace('news','',$urlid);
	$urlid = str_replace('.html','',$urlid);
	$url = "http://www.5pb.net/?lknr-".$urlid."-1.html";
	$contents = file_get_contents($url); 
	preg_match('/<body?(.*)>(.*)<\/body>/isU',$contents,$out);
	preg_match('/<h1>(.*)<\/h1>/isU',$out[2],$ContentH1);
	preg_match('/<p class="Author">(.*)<\/p>/isU',$out[2],$AuthorP);
	$AuthorP[1] = str_replace('/item/','http://www.5pb.net/item/',$AuthorP[1]); //给统计点击次数添加绝对连接
	preg_match('/<div class="Content">(.*)<\/div>.(?: |\\t|\\r|\\n)?<p class=[\'"]Related[\'"]>/isU',$out[2],$ContentDiv);
	preg_match('/<p class="Related">(.*)<\/p>/isU',$out[2],$RelatedP);
	$RelatedP[1] = str_replace('/tags/','/xinwen/tags.php?',$RelatedP[1]); //转换tags连接
	//echo $ContentH1[1]."<br />\n"; //标题
	//echo $AuthorP[1]."<br />\n";  //作者
	//echo $ContentDiv[1]."<br />\n";  //内容
	//echo $RelatedP[1]."<br />\n";  //关键字tags（带连接）
	echo '<h1>'.$ContentH1[1].'</h1>'."\n";
	echo '<p class="Author">'.$AuthorP[1].'</p>'."\n";
	echo '<div class="Content">'.$ContentDiv[1].'</div>'."\n";
	echo '<p class="Related">'.$RelatedP[1].'</p>'."\n";
	
}

//新闻标题
Function ContentTitle($id) {
	//echo $id; //测试传值
	$urlid = strtolower($id);
	$urlid = str_replace('news','',$urlid);
	$urlid = str_replace('.html','',$urlid);
	$url = "http://www.5pb.net/?lknr-".$urlid."-1.html";
	$contents = file_get_contents($url); 
	preg_match('/<body?(.*)>(.*)<\/body>/isU',$contents,$out);
	preg_match('/<h1>(.*)<\/h1>/isU',$out[2],$ContentH1);
	Return  $ContentH1[1]; //标题
	
}
?>