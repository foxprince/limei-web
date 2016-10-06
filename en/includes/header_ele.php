<?php
$theRequestedURL="$_SERVER[HTTP_HOST]";
if(trim($theRequestedURL)=='edecenter.com' || trim($theRequestedURL)=='www.edecenter.com'){
	$location='http://lumiagem.com/en/';
	header("HTTP/1.1 301 Moved Permanently"); 
	header("location:$location");
	exit();
}

session_start();
$_SESSION['lang']='en';


require_once('../includes/connection.php');
$conn=dbConnect('write','pdo');
$conn->query("SET NAMES 'utf8'");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="The only one company owned by Chinese in Antwerp Diamond Club, Belgium. Expert of custom wedding rings. Help to build up your ideal and unique diamond rings. Every diamond goes with GIA, HRD or IGI certificate. Professional service in Europe, China and Hong Kong." name="description">
<link href="../styles/main_en.css?v=<?php echo strtotime('now'); ?>" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//releases.flowplayer.org/5.4.6/skin/minimalist.css" >
<script src="http://edecenter.com/lab/jquery-1.11.2.min.js"></script>
<script src="//releases.flowplayer.org/5.4.6/flowplayer.min.js"></script>
<script type="text/javascript" src="../jscontrol.js?v=<?php echo strtotime('now'); ?>"></script>
<link rel="shortcut icon" href="../images/site_elements/icon.ico" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51323913-1', 'lumiagem.com');
  ga('send', 'pageview');

</script>