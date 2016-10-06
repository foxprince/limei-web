<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['lang']='cn';
if(!isset($conn)){
require_once('../includes/connection.php');
$conn=dbConnect('write','pdo');
$conn->query("SET NAMES 'utf8'");
}
?>
<?php
$HOST=$_SERVER['HTTP_HOST'];
if ($HOST=="lumiagem.com"){
Header("HTTP/1.1 301 Moved Permanently");
Header("Location:http://www.lumiagem.com"); 
exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="width=device-width" name="viewport">
<link rel="stylesheet" href="//releases.flowplayer.org/5.4.6/skin/minimalist.css" />
<!---调用css---->
<link rel="stylesheet" href="../styles/bootstrap.min.css?v=17"/>
<link rel="stylesheet" href="../styles/index-cn.css"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<link rel="stylesheet" href="../styles/diamonds-1.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="../styles/diamonds.css"/>
<link rel="stylesheet" href="../styles/buttons.css"/>
<link rel="stylesheet" href="../styles/textfont.css"/>
<link rel="stylesheet" href="../styles/viewdiamonds.css"/>
<link href="../styles/main.css?v=<?php echo strtotime('now'); ?>" media="screen" rel="stylesheet" type="text/css" />
<!---调用js---->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="//releases.flowplayer.org/5.4.6/flowplayer.min.js"></script>
<script type="text/javascript" src="../jscontrol.js?v=<?php echo strtotime('now'); ?>"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="shortcut icon" href="../images/site_elements/icon.ico" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51323913-1', 'lumiagem.com');
  ga('send', 'pageview');

</script>