<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo urldecode($_SERVER["QUERY_STRING"]); ?></title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<div class="headerBox clearFix">
<div class="logo"><a href="/"><img src="images/logo.gif" alt="����ʱ��ʯ" /></a></div>
<div class="text">����ʱ��ʯ,����������ʯ - ������ʯ</div>
</div>
<ul id="gNavi" class="clearFix">
<li><a href="/">��ҳ</a></li>
<li><a href="http://www.lumiagem.com/cn/about.php">Ʒ���Ļ�</a></li>
<li><a href="http://www.lumiagem.com/cn/diamonds-rings.php">�ҵ����</a></li>
<li><a href="http://www.lumiagem.com/cn/jewelry.php">��Ʒ����</a></li>
<li><a href="http://www.lumiagem.com/cn/diamonds.php">��������</a></li>
</ul>
</div>
<div id="container">
<dl class="gation clearFix">
<dt>���ĵ�ǰλ�ã�<a href="/">��ҳ</a>-&gt;<a href="/xinwen/">��������</a></dt>
<dd>�ؼ��֣�<strong><?php echo urldecode($_SERVER["QUERY_STRING"]); ?></strong></dd>
</dl>
<?php
IF ($_SERVER["QUERY_STRING"]<>"") {
	ColumnList($_SERVER["QUERY_STRING"]);
}
?>
</div>
<div id="footer">
����ʱ��ʯ  www.lumiagem.com
</div>
</body>
</html>
<?php
 //echo  $_SERVER['PHP_SELF'].'?'.$_SERVER["QUERY_STRING"];

//tags�б�
Function ColumnList($tags) {
	$tags=urldecode($tags);
	$url = "http://www.5pb.net/?lklm-2203.html";
	$contents = file_get_contents($url); 
	//$contents = iconv("gb2312", "utf-8",$contents); //��gb2312ת��Ϊutf-8
	preg_match('/<ul?(.*)>(.*)<\/ul>/isU',$contents,$out);
	
	$pat = '/(?: |\\t|\\r|\\n)?<span.*?(?: |\\t|\\r|\\n)?>(.+?)<\/span.*?>(?: |\\t|\\r|\\n)?<a.*?(?: |\\t|\\r|\\n)?href=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>(.+?)<\/a.*?>/sim';
	preg_match_all($pat,$out[2],$m);
	//print_r($m[1]);
	//print_r($m[2]);
	//print_r($m[3]);
	//print_r(count($m[1]));

	//echo "�ؼ��֣�".$tags."\n";
	echo '<ul class="news">'."\n";
	for($i=0;$i<count($m[1]);$i++){
		$urlLi = str_replace('/?lknr-','',$m[2][$i]); //�滻"/?lknr-"
		$urlLi = str_replace('/lknr-','',$m[2][$i]); //�滻"/lknr-"
		$urlLi = str_replace('-1','',$urlLi); //�滻"-1"
		IF(strlen($m[3][$i])>strlen(str_replace($tags,"",$m[3][$i]))){
			echo '<li><span>'.$m[1][$i].'</span><a href="/xinwen/?news'.$urlLi.'">'.$m[3][$i].'</a></li>'."\n";
			}
	}
	echo "</ul>"."\n";
	
}
?>