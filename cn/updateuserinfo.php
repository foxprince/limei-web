<?php

$name_ofuser=$_POST['nameofuser'];
$tel_ofuser=$_POST['usertel'];
$email_ofuser=$_POST['useremail'];

$sql_updateUser='UPDATE clients_list SET name = "'.$name_ofuser.'", tel = "'.$tel_ofuser.'", email = "'.$email_ofuser.'" WHERE id = '.$_SESSION['useraccount'];

$stmt_userupdate=$conn->query($sql_updateUser);

$updated=$stmt_userupdate->rowCount();

if($updated){
	$userinfo_updating_message='您的联系信息已经保存。谢谢！<br /><a class="viewinfobtn" href="manageaccount.php">查看我的信息</a><br /><br /><br /><br />';
}else{
	$userinfo_updating_message='系统繁忙，请联通过电话或电邮系我们<br /><br /><br /><br /><br />';
}
	
?>
