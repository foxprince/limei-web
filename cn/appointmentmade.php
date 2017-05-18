<?php
session_start();

if(!isset($_POST['useraccount']) && !isset($_POST['savethechangeofcountactinfo'])){
	header('Location: diamonds-rings.php');
	exit();
}

if(!isset($_POST['savethechangeofcountactinfo'])){
	if($_POST['useraccount']!='login-dia-only' && $_POST['useraccount']!='loggedin-dia-only' && $_POST['useraccount']!='new-dia-only'){
		if(!isset($_SESSION['dia_id']) || !isset($_SESSION['ringChoice'])){
			header('Location: diamonds-rings.php');
			exit();
		}
	}
}

$thetotalprice='-';
if(isset($_POST['thetotalprice'])){
	$thetotalprice=$_POST['thetotalprice'];
}

###########################################################

include_once('../includes/connection.php');
$conn_dia=dbConnect_dia('write','pdo');
$conn_dia->query("SET NAMES 'utf8'");



$crr_page='appointmentfeedback';
include_once('includes/header_ele.php');



if(isset($_POST['useraccount'])){
	if($_POST['useraccount']=='login-dia-only' || $_POST['useraccount']=='loggedin-dia-only' || $_POST['useraccount']=='new-dia-only'){
		$dia_id=$_POST['diamondstockref'];
		$ring_id=0;
	}else{
		$dia_id=$_SESSION['dia_id'];
		$ring_id=$_SESSION['ringChoice'];
	}
	
	
	
	if($_POST['useraccount']=='new' || $_POST['useraccount']=='new-dia-only'){
		include('appointmentfromnewuser.php');
	}else if($_POST['useraccount']=='login' || $_POST['useraccount']=='login-dia-only'){
		include('appointmentwithlogin.php');
	}else if($_POST['useraccount']=='loggedin' || $_POST['useraccount']=='loggedin-dia-only'){
		include('appointmentwithloggedin.php');
	}
}else if(isset($_POST['savethechangeofcountactinfo'])){
	if(isset($_SESSION['useraccount'])){
		
		include('updateuserinfo.php');
		
	}else{
		$userinfo_updating_message='系统等待超时，请重新登录';
	}
}




?>

<style type="text/css">
p#feedbackwords{
	margin:25px 0;
	font-size:18px;
}
input#savethechangeofcountactinfobtn{
	background-color:#C30;
	color:#FFF;
	font-size:18px;
	padding:5px 12px;
	border-style:solid;
	border-width:1px;
	border-color:#930;
	margin-top:25px;
	margin-bottom:35px;
}
a.myaccountbtn, a.viewinfobtn{
	background-color:#C30;
	color:#FFF;
	font-size:18px;
	padding:5px 12px;
	border-style:solid;
	border-width:1px;
	border-color:#930;
	margin-top:25px;
	margin-bottom:35px;
	margin-left:15px;
}
a.viewinfobtn{
	display:inline-block;
	margin-top:15px;
	margin-left:0;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
    
});
</script>
<title>利美钻石 - 预约看钻：我的钻戒</title>
</head>


<body>
<div class="container-fluidX container maxcontainer">

<?php
include_once('includes/header.php');
?>


<div id="content">

<h2>预约看钻</h2>

<div class="content-box">

<?php
if(isset($_POST['useraccount'])){
?>
<p id="feedbackwords"><?php echo $feedbackwords; ?></p>
<?php
if(isset($examine_contactinfo) && $examine_contactinfo==true){
	
	if($nameofuser=='' || $nameofuser==NULL){
		$nameofuser='未知';
	}
	if($usertel=='' || $usertel==NULL){
		$usertel='未知';
	}
	if($useremail=='' || $useremail==NULL){
		$useremail='未知';
	}
	
?>


<div>
<p>请核对您的联系信息是否正确，以确保我们能顺利联系到您。</p>
<?php
if(($usertel=='' || $usertel==NULL) || ($useremail=='' || $useremail==NULL)){
?>
<p><strong style="color:#C30;">!!!重要提示：</strong>请务必留下您的电话号码或邮箱地址，否则我们可能无法和您取得联系</p>
<?php
}
?>


<form action="" method="post">
<p><label>微信昵称</label><input type="text" name="nameofuserwechat" disabled="disabled" value="<?php echo $wechat_name; ?>" /></p>
<p><label>姓名</label><input type="text" name="nameofuser" value="<?php echo $nameofuser; ?>" /></p>
<p><label>电话</label><input type="text" name="usertel" value="<?php echo $usertel; ?>" /></p>
<p><label>邮箱</label><input type="text" name="useremail" value="<?php echo $useremail; ?>" /></p>

<input id="savethechangeofcountactinfobtn" type="submit" name="savethechangeofcountactinfo" value="保存修改" />
<a class="myaccountbtn" href="myaccount.php">查看历史纪录</a>
</form>

</div>

<?php
}

}

if(isset($userinfo_updating_message)){
?>
<p id="feedbackwords"><?php echo $userinfo_updating_message; ?></p>
<?php
}
?>



</div>



</div><!-- end content -->





<?php
include_once('includes/footer.php');
?>
</div>
</body>



</html>
