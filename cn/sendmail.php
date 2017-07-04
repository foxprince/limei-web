<?php

	/**
	 * 注：本邮件类都是经过我测试成功了的，如果大家发送邮件的时候遇到了失败的问题，请从以下几点排查：
	 * 1. 用户名和密码是否正确；
	 * 2. 检查邮箱设置是否启用了smtp服务；
	 * 3. 是否是php环境的问题导致；
	 * 4. 将26行的$smtp->debug = false改为true，可以显示错误信息，然后可以复制报错信息到网上搜一下错误的原因；
	 * 5. 如果还是不能解决，可以访问：http://www.daixiaorui.com/read/16.html#viewpl 
	 *    下面的评论中，可能有你要找的答案。
	 */

	require 'PHPMailerAutoload.php';
	require("class.phpmailer.php");
	require("class.smtp.php");
	//******************** 配置信息 ********************************
	  date_default_timezone_set('Asia/Shanghai');//设定时区东八区
	$mail = new PHPMailer(); //建立邮件发送类

	$address = $_POST['toemail'];
	$mail->IsSMTP(); // 使用SMTP方式发送
	$mail->CharSet ="UTF-8";//设置编码，否则发送中文乱码
	$mail->Host = "www.lumiagem.com"; // 您的企业邮局域名
	$mail->SMTPAuth = true; // 启用SMTP验证功能
	$mail->Username = "service@lumiagem.com"; // 邮局用户名(请填写完整的email地址)
	$mail->Password = "123Abc"; // 邮局密码

	$mail->From = "service@lumiagem.com"; //邮件发送者email地址
	$mail->FromName = "lumiagem";
	$mail->AddAddress($address, "dwqs");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
	//$mail->AddReplyTo("", "");

	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
	//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式

	$mail->Subject = $_POST['title']; //邮件标题
	$mail->Body = $_POST['content']; //邮件内容
	$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
		
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
	//************************ 配置信息 ****************************
	
	
?>