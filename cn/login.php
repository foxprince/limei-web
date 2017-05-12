<?php
session_start();

if(isset($_SESSION['useraccount'])){
	header('Location: myaccount.php');
	exit('session set');
}

if(isset($_POST['username']) && isset($_POST['password'])){
	$username=addslashes($_POST['username']);
	$password=addslashes($_POST['password']);
	
	require_once('../includes/connection.php');
	$conn=dbConnect('write','pdo');
	$conn->query("SET NAMES 'utf8'");
	
	
	$sqlaccount='SELECT * FROM clients_list WHERE website_username = "'.$username.'" AND website_password = "'.	$password.'"';
	$stmt=$conn->query($sqlaccount);
	$found=$stmt->rowCount();
	if($found){
		foreach($stmt as $r){
			$userid=$r['id'];
		}
		$_SESSION['useraccount']=$userid;
		header('Location: myaccount.php');
		exit();
	}else{
		$errormessage='用户名或密码不正确，请重试';
	}
}



include_once('includes/header_ele.php');
?>
<title>用户登录 - 利美钻石</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />

<style type="text/css">
div#loginbox{
	width:288px;
	padding:20px;
	margin:58px auto;
	background-color:#FFF;
	border-style:solid;
	border-width:1px;
	border-color:#999;
	text-align:center;
}
div#forminputbox{
	padding:20px 0 12px 0;
}
#forminputbox input{
	width:180px;
	padding:3px 8px;
}
input#submitthelogininfobtn{
	background-color:#C30;
	border-style:solid;
	border-width:1px;
	border-color:#930;
	color:#FFF;
	padding:3px 25px;
	font-size:16px;
}

div#wechatscanboxforlogin{
	padding:20px 0 25px 0;
	width:220px;
	background-color:#f0f0f0;
	margin:20px auto 0 auto;
	border-style:solid;
	border-width:1px;
	border-color:#f9f9f9;
}
#wechatscanboxforlogin p{
	font-size:12px;
}
</style>
</head>



<body>

<!--div  home-visual-box-->
<div  class="container-fluidX container maxcontainer">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/header.php');
?>
</div>
</div>


<!--div  bodycontent----------------------------------------------------------------------------------------->



<div id="bodycontent">
<div id="loginbox">

<h3>用户登录</h3>

<?php
if(isset($errormessage)){
?>
<p id="error-message"><?php echo $errormessage; ?></p>
<?php
}
?>

<form action="" method="post" id="loginform">
<input type="hidden" name="useraccount" value="login" />
<div id="forminputbox">
<p><input name="username" class="logininput" id="username-input" type="text" placeholder="用户名" /></p>
<p><input name="password" class="passwordinput" id="passwordinput-input" type="password" placeholder="密码" /></p>
</div>
<p><input type="submit" name="submitthelogininfo" value="登录" id="submitthelogininfobtn" /></p>
</form>

<div id="wechatscanboxforlogin">
<p>扫描关注利美公众号,<br />立即获得您的用户名和密码</p>
<img id="qrcode-wechat" src="/cn/img-eles/qrcode_for_gh_f1bedb342697_344.jpg" />
</div>
<p id="forgetusernameandpasswordbox" onClick="showHowGetPassBack()">忘记了?</p>
<div id="getpassback">
如果您已经关注了利美钻石的微信官方服务号，请打开我们的微信服务号，在下面的小菜单中选择 ‘欢迎预约’&rarr;‘登录网站’，您即会收到用来登录网站的用户名和密码
</div>

</div>
</div>



<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>




</div>
</body>
