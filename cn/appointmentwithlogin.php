<?php
$username=$_POST['username'];
$password=$_POST['password'];


$sql_user='SELECT * FROM clients_list WHERE website_username = "'.$username.'" AND website_password = "'.$password.'"';
$stmt_usersearch=$conn->query($sql_user);
$userfound=$stmt_usersearch->rowCount();

if($userfound){
	foreach($stmt_usersearch as $u){
		$userid=$u['id'];
		$wechat_open_id=$u['wechat_open_id'];
		$wechat_id=$u['wechat_id'];
		$wechat_name=$u['wechat_name'];
		$nameofuser=$u['name'];
		$useremail=$u['email'];
		$usertel=$u['tel'];
	}
	
	$_SESSION['useraccount']=$userid;
	
if($ring_id!=0){
	$sql_ring='SELECT name_ch, image1 FROM jewelry WHERE id='.$ring_id;
	foreach($conn->query($sql_ring) as $r_r){
		$ringname=$r_r['name_ch'];
		$ringpic=$r_r['image1'];
	}
}else{
	$ringname='无戒托';
	$ringpic='Diamond.jpg';
}


$sql_dia='SELECT * FROM diamonds WHERE id = '.$dia_id;
foreach($conn_dia->query($sql_dia) as $r_d){
	
	$stock_ref=$r_d['stock_ref'];
	$stock_num_rapnet=$r_d['stock_num_rapnet'];
	$shape=$r_d['shape'];
	$carat=$r_d['carat'];
	$color=$r_d['color'];
	$fancy_color=$r_d['fancy_color'];
	$clarity=$r_d['clarity'];
	$grading_lab=$r_d['grading_lab'];
	$certificate_number=$r_d['certificate_number'];
	$cut_grade=$r_d['cut_grade'];
	$polish=$r_d['polish'];
	$symmetry=$r_d['symmetry'];
	$fluorescence_intensity=$r_d['fluorescence_intensity'];
	$country=$r_d['country'];
	$raw_price=$r_d['raw_price'];
	$raw_price_retail=$r_d['raw_price_retail'];
	$price=$r_d['price'];
	$retail_price=$r_d['retail_price'];
	$from_company=$r_d['from_company'];
	$contact_tel=$r_d['contact_tel'];
	$certificatelink=$r_d['certificatelink'];
	$from_company=$r_d['from_company'];
	$contact_tel=$r_d['contact_tel'];
	$certificatelink=$r_d['certificatelink'];
}

$jewellery_price='-';
$chosenby='USER';




$sql_view='INSERT INTO viewing_record (diamond, diamond_shape, diamond_color, diamond_clarity, diamond_carat, diamond_cut, diamond_symmetry, diamond_polish, diamond_fluo, diamond_price, jewellery_price, totalprice_in_currency, jewellery_id, viewer, view_time, chosenby) VALUES (:diamond, :diamond_shape, :diamond_color, :diamond_clarity, :diamond_carat, :diamond_cut, :diamond_symmetry, :diamond_polish, :diamond_fluo, :diamond_price, :jewellery_price, :totalprice_in_currency, :jewellery_id, :viewer, NOW(), :chosenby)';


$stmt=$conn->prepare($sql_view);	  
			
$stmt->bindParam(':diamond', $dia_id, PDO::PARAM_INT);
$stmt->bindParam(':diamond_shape', $shape, PDO::PARAM_STR);
$stmt->bindParam(':diamond_carat', $carat, PDO::PARAM_STR);
$stmt->bindParam(':diamond_color', $color, PDO::PARAM_STR);
$stmt->bindParam(':diamond_clarity', $clarity, PDO::PARAM_STR);
$stmt->bindParam(':diamond_cut', $cut_grade, PDO::PARAM_STR);
$stmt->bindParam(':diamond_polish', $polish, PDO::PARAM_STR);
$stmt->bindParam(':diamond_symmetry', $symmetry, PDO::PARAM_STR);
$stmt->bindParam(':diamond_fluo', $fluorescence_intensity, PDO::PARAM_STR);
$stmt->bindParam(':diamond_price', $retail_price, PDO::PARAM_STR);
$stmt->bindParam(':jewellery_price', $jewellery_price, PDO::PARAM_STR);
$stmt->bindParam(':totalprice_in_currency', $thetotalprice, PDO::PARAM_STR);
$stmt->bindParam(':jewellery_id', $ring_id, PDO::PARAM_STR);
$stmt->bindParam(':viewer', $userid, PDO::PARAM_INT);
$stmt->bindParam(':chosenby', $chosenby, PDO::PARAM_INT);




$stmt->execute();
$OK=$stmt->rowCount();

if($OK){
	$feedbackwords='非常感谢您的预订。您的预约已经保存，我们会尽快联系您。';
	$examine_contactinfo=true;
}else{
	$feedbackwords='非常抱歉，系统繁忙，请电话联系我们或发送电子邮件。谢谢！';
}

$name='';


$emailmessage="新的看钻预约, 姓名：$nameofuser  微信：$wechat_id  微信名：$wechat_name  联系电话：$usertel 电子邮件：$useremail 钻石：$stock_ref ";
	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\n";
	$headers .= 'From: no-reply@lumiagem.com' . "\n";
	require_once("../log.php");
	//if(!mail('info@lumiagem.com','新的预约',$emailmessage,$headers)){
		//echo 'mail error';
		//logger(error_get_last());
	//}	
	
	require_once('../../belgem/getaccesstoken.php');
	$urltopost='https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$theaccesstoken;
	$data = '{
			"touser":"oLx9ZwJUFSb2w5cVadU4VWnj07kE",
			"msgtype":"text",
			"text":
			{
				 "content":"'.$emailmessage.'"
			}
		}';
																	  
	$ch = curl_init($urltopost);     
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                                                                   
	$result = curl_exec($ch);
	logger($result);
	$obj_reply = json_decode($result);
	$reply_feedback=$obj_reply->{'errmsg'};
	logger($reply_feedback);
	
	
	
	
	
	
	
	
	
}else{
	$feedbackwords='用户名或密码错误，请重试';
}
?>
