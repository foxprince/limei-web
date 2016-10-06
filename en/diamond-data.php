<?php
if(!isset($_POST['shapes'])){
	exit('NO_DATA');
}

$shapes=$_POST['shapes'];
$size_from=$_POST['size_from'];
$size_to=$_POST['size_to'];
$color_from=$_POST['color_from'];
if($color_from==''){
	$color_from='D';
}
$color_to=$_POST['color_to'];
if($color_to==''){
	$color_to='M';
}
$clarity_from=$_POST['clarity_from'];
if($clarity_from==''){
	$clarity_from='IF';
}
$clarity_to=$_POST['clarity_to'];
if($clarity_to==''){
	$clarity_to='SI3';
}
$cut_from=$_POST['cut_from'];
if($cut_from==''){
	$cut_from='Excellent';
}
$cut_to=$_POST['cut_to'];
if($cut_to==''){
	$cut_to='Fair';
}
$polish_from=$_POST['polish_from'];
if($polish_from==''){
	$polish_from='Excellent';
}
$polish_to=$_POST['polish_to'];
if($polish_to==''){
	$polish_to='Fair';
}
$symmetry_from=$_POST['symmetry_from'];
if($symmetry_from==''){
	$symmetry_from='Excellent';
}
$symmetry_to=$_POST['symmetry_to'];
if($symmetry_to==''){
	$symmetry_to='Fair';
}
$fluorescence_intensities=$_POST['fluorescence_intensities'];
if($fluorescence_intensities==''){
	$fluorescence_intensities_expr='';
}else{
	$fluorescence_intensities_expr='"fluorescence_intensities": '.$fluorescence_intensities.',';
}
$price_total_from=$_POST['price_total_from'];
$price_total_to=$_POST['price_total_to'];
$labs=$_POST['labs'];
if($labs==''){
	$labs='["GIA", "IGI", "AGS", "HRD", "EGL_USA", "NONE"]';
}

if(isset($_POST['page_number'])){
	$page_number=$_POST['page_number'];
}else{
	$page_number='1';
}



$urltopost='https://technet.rapaport.com/HTTP/JSON/RetailFeed/GetDiamonds.aspx';


$data = '{
"request": {
"header": {
"username": "90733", 
"password": "G4n8m4G9"

}, 
"body": {
"search_type": "White", 
"shapes": '.$shapes.',
"size_from": '.$size_from.', 
"size_to": '.$size_to.',  
"color_from": "'.$color_from.'", 
"color_to": "'.$color_to.'", 
"clarity_from": "'.$clarity_from.'", 
"clarity_to": "'.$clarity_to.'", 
"cut_from": "'.$cut_from.'", 
"cut_to": "'.$cut_to.'", 
"polish_from": "'.$polish_from.'", 
"polish_to": "'.$polish_to.'", 
"symmetry_from": "'.$symmetry_from.'", 
"symmetry_to": "'.$symmetry_to.'",
'.$fluorescence_intensities_expr.'
"price_total_from": '.$price_total_from.', 
"price_total_to": '.$price_total_to.', 
"labs": '.$labs.', 
"page_number": '.$page_number.', 
"page_size": 50, 
"sort_by": "price", 
"sort_direction": "Asc" 
}
}
}';

//exit($data);                                                                
 
$ch = curl_init($urltopost);     
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                                                                   
 
$result = curl_exec($ch);
//echo '<!-- '.$result.'-->';
$obj_reply = json_decode($result);
//$reply_feedback=$obj_reply->{'response'};

//echo $reply_feedback;
//print_r($obj_reply);


$feedback_message=$obj_reply->{'response'}->{'header'}->{'error_code'};
//echo $feedback_message;
if($feedback_message!=0){
	echo 'FEEDBACKERROR';
	exit($obj_reply->{'response'}->{'header'}->{'error_message'});
}
$diamonds_number=$obj_reply->{'response'}->{'body'}->{'search_results'}->{'total_diamonds_found'};
$diamonds_list=$obj_reply->{'response'}->{'body'}->{'diamonds'};
?>
<table cellpadding="2" cellspacing="0" border="0">

<?php
$r=0;
foreach($diamonds_list as $row){
$r++;


$certi_num=$row->{'cert_num'};
$thelab=$row->{'lab'};
if('GIA'==$thelab){
	$certi_link='http://www.gia.edu/cs/Satellite?pagename=GST%2FDispatcher&childpagename=GIA%2FPage%2FReportCheck&c=Page&cid=1355954554547&reportno='.$certi_num;
}else if('IGI'==$thelab){
	//$certi_link='http://www.igiworldwide.com/igi/verify.php?r='.$certi_num;
	$certi_link='http://www.igiworldwide.com/verify.php?r='.$certi_num;
}else if('HRD'==$thelab){
	$certi_link='http://www.hrdantwerplink.be/index.php?record_number='.$certi_num;
}else{
	$certi_link='#not-available';
}

?>


<tr class="<?php echo $r; ?>">
<td align="center" class="ref_number">
<span class="valuetxt" style="width:102px;">
<?php echo $row->{'diamond_id'}; ?>
</span>
</td>
<td align="center" style="width:32px;">
<?php
switch ($row->{'shape'}){
	case "Round":
	$pic_where="01.gif";
	break;
	
	case "Cushion":
	$pic_where="12.gif";
	break;
	
	case "Emerald":
	$pic_where="10.gif";
	break;
	
	case "Asscher":
	$pic_where="as.gif";
	break;
	
	case "Heart":
	$pic_where="08.gif";
	break;
	
	case "Marquise":
	$pic_where="05.gif";
	break;
	
	
	case "Oval":
	$pic_where="11.gif";
	break;
	
	
	case "Princess":
	$pic_where="03.gif";
	break;
	
	case "Pear":
	$pic_where="02.gif";
	break;
	
	case "Radiant":
	$pic_where="06.gif";
	break;
	
	
	
	default:
	$pic_where="01.gif";
}
?>
<img height="25" src="../images/site_elements/icons/<?php echo $pic_where; ?>" /></td>
<td align="center" class="value_carat">
<span class="valuetxt">
<?php
$thesizeofdiamond=$row->{'size'}; 
echo number_format($thesizeofdiamond,2); 
?>
</span>
</td>
<td align="center" class="value_color">
<span class="valuetxt">
<?php echo $row->{'color'}; ?>
</span>
</td>
<td align="center" class="value_clarity"><span class="valuetxt"><?php echo $row->{'clarity'}; ?></span></td>
<td align="center" class="value_certificate"><span class="valuetxt"><?php echo $thelab; ?></span></td>
<td align="center" class="value_cut"><span class="valuetxt"><?php echo translateCutGrade($row->{'cut'}); ?></span></td>
<td align="center" class="value_polish"><span class="valuetxt"><?php echo translateCutGrade($row->{'polish'}); ?></span></td>
<td align="center" class="value_symmetry"><span class="valuetxt"><?php echo translateCutGrade($row->{'symmetry'}); ?></span></td>
<td align="center">
<span class="valuetxt" style="width:112px;">
<span class="price_wechat_icon_btn" style="cursor:pointer; font-weight:bold; color:#993300;">on enquiry</span>
</span>
</td>
<td class="seedetail" align="center" title="open"><span style="display:inline-block;width:28px; text-align:center; white-space:nowrap;">detail</span></td>
</tr>

<tr id="d_<?php echo $r; ?>" class="details">
<td colspan="11" class="detail_1stcol">
<div class="detailouterbox">

<div class="detailboxtop">
<p class="details_txt">
Fluorescence Intensity:
<?php 
echo $row->{"fluor_intensity"};
?> &nbsp; &nbsp; 
Place: -
 &nbsp; &nbsp; 
Certificate NO.: <?php echo $certi_num; ?>
 &nbsp; &nbsp; 

<a class="certi_linker" target="_blank" href="<?php echo $certi_link; ?>">View Certificate</a>

</p>



</div>

<div class="detailboxleft">

<div class="imagescontainer">
		

			
</div>

</div><!-- end detail box left -->



<div class="detailboxright">



</div><!-- end of detail box right -->
<br style="clear:both;" />
</div>

</td>
</tr>
<?php
}

function translateCutGrade($theGrade){
	if($theGrade=='Excellent'){
		return 'EX';
	}else if($theGrade=='Very Good'){
		return 'VG';
	}else if($theGrade=='Good'){
		return 'G';
	}else if($theGrade=='Fair'){
		return 'F';
	}
}
?>
</table>

<div id="howmanyrecords" style="display:none;"><?php echo $diamonds_number; ?></div>

<div id="info-number" style="display:none;">
<?php
$howmanypages=ceil($diamonds_number/50);
if($howmanypages>1){
	if($howmanypages>10){
		$howmanypages=10;
	}
?>
<span id="resulthowmany"><?php echo $diamonds_number; ?></span> results are found:


<span id="dia-page-selector">page
<?php
	for($i=1; $i<=$howmanypages; $i++){
		if($page_number==$i){
			$crrPageClass='class="crr-page"';			
		}else{
			$crrPageClass='';
		}
?>
 <button <?php echo $crrPageClass; ?> onclick="updateList('<?php echo $i; ?>')"><?php echo $i; ?></button> 
<?php
	}
?>
</span>
<?php
}
?>
</div>