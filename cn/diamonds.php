<?php
$crr_page='diamonds';
include_once('includes/header_ele.php');
?>
<title>精品裸钻 - 利美钻石</title>

<style type="text/css">
#subnavi_box_diamondpage{
	width:120px;
}
#subnavi_box_diamondpage ul{
	margin:0;
	padding-left:0;
}
div.dia-piece-box{
	position:relative;
	padding:12px 5px;
	margin:8px 0;
	background-color:#f9f9f9;
	font-size:12px;
	max-width:918px;
}
div.details{
	background-color:#FFF;
	padding:8px;
	margin-top:8px;
	display:none;
}
p.details_txt{
	margin:0;
	padding-bottom:15px;
}

img.shapeicon{
	position:absolute;
	height:32px;
	top:5px;
	left:5px;
}
span.shape-txt{
	display:inline-block;
	padding:0 0 0 50px;
	font-size:12px;
	text-align:left;
	width:98px;
}
span.valuetxt{
	display:inline-block;
	padding:0;
	width:92px;
	position:relative;
	top:0;
	margin:0;
	overflow:visible;
	font-size:12px;
	color:#000;
	text-align:center;
	border-left-style:solid;
	border-width:1px;
	border-color:#ccc;
}
span.detail-btn{
	margin-left:20px;
	color:#C30;
	white-space:nowrap;
}
a.certi_linker{
	color:#C30;
	display:inline-block;
	padding:0 25px 0 0;
}
span.price{
	display:inline-block;
	position:relative;
	top:8px;
}
span.btnforprice{
	display:inline-block;
	padding:1px 8px;
	color:#FFF;
	background-color:#C30;
	margin-left:0;
}

div.filter-box-leftside, div.filter-box-rightside{
	position:relative;
	width:460px;
	float:left;
}
div.filter-box-leftside{
	margin-right:43px;
}

div.main_contentbox_dia_data{
	border-top-style:solid;
	border-width:3px;
	border-color:#eee;
	margin-right:40px;
}

button.weight-btn-active{
	background-color:#FCC !important;
}













/* ============================================ */
div#appointmentcontainer{
	display:block;
	position:fixed;
	width:100%;
	height:100%;
	top:0;
	left:0;
	background-color:rgba(255,255,255,0.88);
	z-index:88;
	display:none;
}
div#appointment-create{
	position:relative;
	width:381px;
	margin:95px auto 0 auto;
	background-color:#f9f9f9;
	border-style:solid;
	border-width:3px;
	border-color:#999;
	text-align:center;
	vertical-align:central;
}
div#register-box, div#login-box{
	display:inline-block;
}
div#register-box{
	margin-left:35px;
	display:none;
}
div.middle-separator{
	display:inline-block;
	width:2px;
	border-left-style:solid;
	border-color:#FFF;
	border-width:3px;
	padding-left:23px;
	margin-left:25px;
	overflow:visible;
	vertical-align:central;
	float:left;
	margin-top:55px;
}
span#the-or{
	display:inline-block;
	position:relative;
	padding:5px;
	background-color:#e0e0e0;
	left:-38px;
	margin:110px 0;
	color:#FFF;
	font-size:20px;
}
#register-box .title03, #login-box .title03{
	font-size:18px;
	margin:20px 0 15px 0;
}
#loginform input, #loginform-returnuser input{
	width:200px;
}
p.maketheappointmentbtnbox{
	padding:20px;
}

button#maketheappointmentbtn, input#submitthelogininfobtn{
	background-color:#C30;
	border-style:solid;
	border-width:1px;
	border-color:#930;
	padding:5px 18px;
	color:#FFF;
	font-size:16px;
	width:auto;
}
input.logininput, input.passwordinput{
	
}
#loginform>p>label{
	width:68px;
	text-align:left;
	white-space:nowrap;
}
p#submitthelogininfobtnbox{
	margin:20px;
}
input#submitthelogininfobtn{
}
div#wechatscanboxforlogin{
	padding:0 0 25px 0;
	margin-top:15px;
}
#wechatscanboxforlogin p{
	font-size:12px;
}
#linecarrier{
	width:158px;
	margin:10px auto 5px auto;
	border-top-style:solid;
	border-top-width:3px;
	border-color:#f9f9f9;
	height:15px;
}
#wechatscanboxforlogin p.empha{
	color:#C30;
	font-size:14px;
}
img#qrcode-wechat{
	width:129px;
}

p#forgetusernameandpasswordbox{
	font-size:12px;
	color:#666;
	margin-bottom:0;
	cursor:pointer;
}
div#getpassback{
	padding:5px 25px;
	font-size:12px;
	display:none;
}
span#close-login-box-btn{
	position:absolute;
	display:block;
	top:2px;
	right:8px;
	font-size:16px;
	color:#999;
	cursor:pointer;
}
.details_txt>span{
	white-space:nowrap;
}
p.details_txt span{
	margin-right:20px;
}



@media (max-width:1381px){
div#filter_box{
	margin-left:0;
}
div#diamondsdata{
	margin-left:20px;
}
div#tableheader{
	margin-left:0;
}
}
@media (max-width:1218px){
	li.filter_cut, li.filter_polish, li.filter_sym{
		width:92px;
	}
	li.filter_certi{
		width:124px;
	}
	span.valuetxt{
		width:92px;
		white-space:nowrap;
	}
}
@media (max-width:1028px){
	span.valuetxt{
		width:68px;
	}
	span.shape-txt{
		width:70px;
		padding-left:35px;
		white-space:nowrap;
	}
}
@media (max-width:800px){
	div.generalinfobox{
		padding-left:35px;
		line-height:35px;
	}
	span.shape-txt{
		padding-left:0;
		width:68px;
		text-align:center;
		display:none;
	}
	img.shapeicon{
		top:13px;
	}
}
@media (max-width:680px){
	span#dia-page-selector{
		display:block;
		position:relative;
		left:0;
	}
}

@media (max-width:560px){
div.bodycontent-1{
	padding-left:3px;
	padding-right:3px;
}
.noborder, .noborder>div{
	margin-left:0;
	padding-left:0;
}
div.filter-box-leftside, div.filter-box-rightside{
	width:320px;
	margin-right:0;
}
.filter_shape img{
	width:18px;
}
li.filter_shape{
	width:22px;
	height:28px;
}
li.filter_color{
	width:20px;
	padding-top:3px;
	padding-bottom:2px;
}
div#filter_line_price input, div#filter_line_weight input{
	width:55px;
}
li.filter_clarity{
	width:auto;
	padding:3px 4px 2px 4px;
	font-size:10px !important;
}
li.filter_cut, li.filter_polish, li.filter_sym{
	width:52px;
	padding-top:3px;
	padding-bottom:2px;
}
li.filter_certi{
	width:71px;
	padding-top:3px;
	padding-bottom:2px;
}
}

</style>

<script type="text/javascript">
$(document).ready(function(){
    $('div#wechatscanbox').click(function(){closeWechatbox();});
		weightBtnEffect();
});
function openthepriceinfo(){
	$('div#wechatscanbox').fadeIn('fast');
}
function openwechatimage(){
    $('div#wechatscanbox').fadeIn('fast');
}
function closeWechatbox(){
    $('div#wechatscanbox').fadeOut('fast');
}
function weightBtnEffect(){
	$('input#weight_from, input#weight_to').keypress(function( event ) {
		//alert('a');
		if($('input#weight_from').val()!=='' || $('input#weight_to').val()!=''){
			$('button#btn_weight').addClass('weight-btn-active');
		}
	});
}

function opentheappointmentbox(stock_ref){
	$('input#diamondstockref_new_nowechat').val(stock_ref);
	$('input#diamondstockref').val(stock_ref);
	//alert('abc');
<?php
if(!isset($_SESSION['useraccount'])){
?>
  $('div#appointmentcontainer').fadeIn();
<?php
}else{
?>
	$('form#loginform').submit();
<?php
}
?>
}

function maketheappointment(){
	if($('input#wechat-appointment').val()=="" && $('input#email-appointment').val()==''){
		alert('必须要填写其中的一项：微信ID或者电子邮箱');
		return;
	}
	if($('input#password-create').val() != $('input#password-create-again').val()){
		alert('两次输入的密码不一致！');
		return;
	}
	$('form#loginform').submit();
}

function showHowGetPassBack(){
	$('#getpassback').fadeIn();
}
function closeloginbox(){
	$('div#appointmentcontainer').fadeOut('normal');
}
</script>
</head>
<body>


<div  class="container-fluid maxcontainer" >
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<!-- ****************************加载header***************************** -->
<?php
include_once('includes/header.php');
?>
</div>
</div>
<!-- ****************************加载body***************************** -->

<div class="row bodycontent-1">
<?php

if (isset($_GET['p'])) {
    $p=$_GET['p'];
} else {
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
    break;
}
?>

<fieldset class="noborder">
    <!--<legend>高级搜索</legend>-->
    <div>
    <?php
    if (isset($the_page)) {
        include_once($the_page);
    }
    ?>
    </div>
</fieldset>



<div id="wechatscanbox">
<div id="wechatscanboxinner">
<span id="wechatscanboxclosebtn" onClick="closeWechatbox()">X</span>
<p>扫描关注利美公众号<br />
立即获得详细的价格信息</p>
<p><img id="qrcode-wechat" style="width:129px;" src="/cn/img-eles/qrcode_for_gh_f1bedb342697_344.jpg" /></p>
</div>
</div>
</div>













<?php
if(!isset($_SESSION['useraccount'])){
?>
<div id="appointmentcontainer">


<div id="appointment-create">

<div id="register-box">
<div class="title03">请填写您的信息：</div>
<form action="appointmentmade.php" method="post" id="loginform">
<input type="hidden" name="useraccount" value="new-dia-only" />
<input type="hidden" id="diamondstockref_new_nowechat" name="diamondstockref" value="" />

<p><input type="text" name="name" id="name-appointment" placeholder="姓名" /></p>

<p><input type="text" name="wechat-appointment" id="wechat-appointment" placeholder="微信ID" /></p>
<p><input type="text" name="email-appointment" id="email-appointment" placeholder="电子邮箱" /></p>

<p><input type="text" name="tel-appointment" id="tel-appointment" placeholder="电话" /></p>
<p><input type="password" name="password-create" id="password-create" placeholder="登录密码"/></p>
<p><input type="password" name="password-create-again" id="password-create-again" placeholder="登录密码确认"/></p>

<p><input type="text" name="other-appointment" id="other-appointment" placeholder="其他联系方式，请注明" /></p>
</form>

<p class="maketheappointmentbtnbox"><button id="maketheappointmentbtn" onClick="maketheappointment()">预约看钻</button></p>
</div>





<div id="login-box">
<div class="title03">登录“我的钻戒”</div>


<div id="wechatscanboxforlogin">
<p class="empha">扫描关注利美公众号,<br>立即获得您的用户名和密码</p>
<img id="qrcode-wechat" src="/cn/img-eles/qrcode_for_gh_f1bedb342697_344.jpg" />
</div>


<form action="appointmentmade.php" method="post" id="loginform-returnuser">
<input type="hidden" name="useraccount" value="login-dia-only" />
<input type="hidden" id="diamondstockref" name="diamondstockref" value="" />
<p><input name="username" class="logininput" id="username-input" placeholder="用户名" type="text" /></p>
<p><input name="password" class="passwordinput" id="passwordinput-input" placeholder="密码" type="password" /></p>
<p id="forgetusernameandpasswordbox" onClick="showHowGetPassBack()">忘记了?</p>
<div id="getpassback">
如果您已经关注了利美钻石的微信官方服务号，请打开我们的微信服务号，在下面的小菜单中选择 ‘欢迎预约’&rarr;‘登录网站’，您即会收到用来登录网站的用户名和密码
</div>
<p id="submitthelogininfobtnbox"><input type="submit" name="submitthelogininfo" id="submitthelogininfobtn" value="登录并预约" /></p>
</form>


<span id="close-login-box-btn" onClick="closeloginbox()">x</span>

</div><!-- end login-box -->

<br style="clear:both;" />

</div>

</div>
<?php
}else{
?>
<form action="appointmentmade.php" method="post" id="loginform">
<input type="hidden" name="useraccount" value="loggedin-dia-only" />
<input type="hidden" id="diamondstockref" name="diamondstockref" value="" />
</form>
<?php
}
?>










<!-- ****************************加载footer***************************** -->

<div class="row div-m">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>
<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image9.jpg" />
</div>
</div>
</div>


</body>
</html>
