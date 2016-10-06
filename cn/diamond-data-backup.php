<?php
if(!isset($_POST['shape'])){
	exit('no data posted - shape');
}
if(!isset($_POST['color'])){
	exit('no data posted - color');
}
if(!isset($_POST['clarity'])){
	exit('no data posted - clarity');
}
if(!isset($_POST['weight_from'])){
	exit('no data posted - weightfrom');
}
if(!isset($_POST['weight_to'])){
	exit('no data posted -weightto');
}
if(!isset($_POST['price_from'])){
	exit('no data posted - pricefrom');
}
if(!isset($_POST['price_to'])){
	exit('no data posted - priceto');
}
if(!isset($_POST['featured'])){
	exit('no data posted - featured');
}
if(!isset($_POST['sorting'])){
	exit('no data posted - sorting');
}


if($_POST || $_GET){include('../includes/nuke_magic_quotes.php');}


$and='';

if($_POST['shape']==''){
	$query_shape='';
}else{
	$query_shape=' ('.$_POST['shape'].')';
	$and=' AND ';
}

if($_POST['color']==''){
	$query_color='';
}else{
	$query_color=$and.' ('.$_POST['color'].')';
	$and=' AND ';
}

if($_POST['clarity']==''){
	$query_clarity='';
}else{
	$query_clarity=$and.' ('.$_POST['clarity'].')';
	$and=' AND ';
}

if($_POST['weight_from']==''){
	$query_weight_from=0;
}else{
	$query_weight_from=str_replace(',','.',$_POST['weight_from']);
}

if($_POST['weight_to']==''){
	$query_weight_to='100';
}else{
	$query_weight_to = str_replace(',','.',$_POST['weight_to']);
}

if($_POST['price_from']==''){
	$query_price_from=0;
}else{
	$query_price_from=$_POST['price_from'];
}

if($_POST['price_to']==''){
	$query_price_to=9999999;
}else{
	$query_price_to=$_POST['price_to'];
}

$featured=$_POST['featured'];
if($featured=='YES'){
	$featured=' AND featured = "YES" ';
}else{
	$featured='';
}

if(isset($_POST['crr_page'])){
	$crr_page=$_POST['crr_page'];
}else{
	$crr_page=1;
}

$startfrom=($crr_page-1)*35;




$sorting_direction=$_POST['sorting_direction'];

$sorting=$_POST['sorting'];


switch ($sorting){
	
	case "weight":
	$query_sorting =' ORDER BY carat '.$sorting_direction;
	break;
	
	case "color":
	$query_sorting =' ORDER BY color '.$sorting_direction;
	break;
	
	case "clarity":
	$query_sorting =' ORDER BY clarity_number '.$sorting_direction;
	break;
	
	case "cut":
	$query_sorting =' ORDER BY cut_number '.$sorting_direction;
	break;
	
	case "price":
	$query_sorting =' ORDER BY price '.$sorting_direction;
	break;
	
	default:
	$query_sorting =' ORDER BY stock_ref '.$sorting_direction;
	break;
	
}



require_once('../includes/connection.php');
$conn=dbConnect('write','pdo');
$conn->query("SET NAMES 'utf8'");

$sql_count='SELECT COUNT(*) AS num FROM diamonds WHERE'.$query_shape.$query_color.$query_clarity.$and.'(carat BETWEEN '.$query_weight_from.' AND '.$query_weight_to.') AND (price BETWEEN '.$query_price_from.' AND '.$query_price_to.')'.$featured;

//exit($sql_count);

foreach($conn->query($sql_count) as $num){
	$result_number=$num['num'];
}
//exit($sql_count.' -- '.$result_number);

$sql='SELECT * FROM diamonds WHERE'.$query_shape.$query_color.$query_clarity.$and.'(carat BETWEEN '.$query_weight_from.' AND '.$query_weight_to.') AND (price BETWEEN '.$query_price_from.' AND '.$query_price_to.') '.$featured.' '.$query_sorting.' LIMIT '.$startfrom.', 35';


$stmt=$conn->query($sql);
$error=$conn->errorInfo();
if(isset($error[2])) exit($error[2]);
?>




<table cellpadding="2" cellspacing="0" border="0">

<?php
$r=0;
foreach($stmt as $row){
	$r++;
?>
<tr class="<?php echo $r; ?>">
<td align="center" class="ref_number">
<span class="valuetxt" style="width:102px;">
<?php echo $row['stock_ref']; ?>
</span>
</td>
<td align="center" style="width:32px;">
<?php
switch ($row['shape']){
	case "BR":
	$pic_where="01.gif";
	break;
	
	case "CU":
	$pic_where="12.gif";
	break;
	
	case "EM":
	$pic_where="10.gif";
	break;
	
	case "AS":
	$pic_where="10.gif";
	break;
	
	case "HS":
	$pic_where="08.gif";
	break;
	
	case "MQ":
	$pic_where="05.gif";
	break;
	
	
	case "OV":
	$pic_where="11.gif";
	break;
	
	
	case "PR":
	$pic_where="03.gif";
	break;
	
	case "PS":
	$pic_where="02.gif";
	break;
	
	case "RAD":
	$pic_where="06.gif";
	break;
	
	case "TRI":
	$pic_where="04.gif";
	break;
	
	default:
	$pic_where="01.gif";
}
?>
<img height="25" src="../images/site_elements/icons/<?php echo $pic_where; ?>" /></td>
<td align="center" class="value_carat">
<span class="valuetxt">
<?php echo number_format($row['carat'],2); ?>
</span>
</td>
<td align="center" class="value_color">
<span class="valuetxt">
<?php echo $row['color']; ?>
</span>
</td>
<td align="center" class="value_clarity"><span class="valuetxt"><?php echo $row['clarity']; ?></span></td>
<td align="center" class="value_certificate"><span class="valuetxt"><?php echo $row['grading_lab']; ?></span></td>
<td align="center" class="value_cut"><span class="valuetxt"><?php echo $row['cut_grade']; ?></span></td>
<td align="center" class="value_polish"><span class="valuetxt"><?php echo $row['polish']; ?></span></td>
<td align="center" class="value_symmetry"><span class="valuetxt"><?php echo $row['symmetry']; ?></span></td>
<td align="center"><span class="valuetxt" style="width:112px;">
<?php
if($row['price']==0 || $row['price']==NULL || $row['price']==''){
?>
<span class="price_wechat_icon_btn" onclick="openwechatimage()" style="cursor:pointer; font-weight:bold; color:#993300;">价格请点击</span>
<?php
}else{
	echo $row['price']; 
}
 
?>
 
 </span>
 
</td>
<td class="seedetail" align="center" title="open"><span style="display:inline-block;width:28px; text-align:center; white-space:nowrap;">详情</span></td>
</tr>

<tr id="d_<?php echo $r; ?>" class="details">
<td colspan="11" class="detail_1stcol">
<div class="detailouterbox">

<div class="detailboxtop">
<p class="details_txt">
荧光强度:
<?php 
echo $row["fluorescence_intensity"];
?> &nbsp; &nbsp; 
所在地: <?php echo $row['country']; ?>
 &nbsp; &nbsp; 
证书编号: <?php echo $row['certificate_number']; ?>
 &nbsp; &nbsp; 
<?php
if(trim($row["grading_lab"])=='HRD'){
?>
<a class="certi_linker" target="_blank" href="http://www.hrdantwerplink.be/index.php?record_number=<?php echo $row['certificate_number']; ?>&weight=<?php echo $row['carat']; ?>&L=">查看证书</a>
<?php
}else if(trim($row["grading_lab"])=='GIA'){
?>
<a class="certi_linker" target="_blank" href="http://www.gia.edu/cs/Satellite?pagename=GST%2FDispatcher&childpagename=GIA%2FPage%2FReportCheck&c=Page&cid=1355954554547&reportno=<?php echo $row['certificate_number']; ?>">查看证书</a>
<?php
}else if(trim($row["grading_lab"])=='IGI'){
?>
<a class="certi_linker" target="_blank" href="http://www.igiworldwide.com/igi/verify.php?r=<?php echo $row['certificate_number']; ?>">查看证书</a>
<?php
}
?>
</p>

<?php
if($row['recommend_words']!=NULL && $row['recommend_words']!=''){
?>
<p class="commentbox"><?php echo $row['recommend_words']; ?></p>
<?php
}
if($row['stars']>0){
?>
<p class="stars">推荐指数:

<?php 
$crr_rating=$row['stars'];
$i=1;
while($i<=5)
{
if($i<=$crr_rating){
	$crr_gif='rating_color.gif';
}else{
	$crr_gif='rating_gray.gif';
}
?>
<span class="ratingicon"><img src="../images/site_elements/<?php echo $crr_gif; ?>" /></span>
<?php
$i++;
}
?>

</p>
<?php
}
?>

</div>

<div class="detailboxleft">

<div class="imagescontainer">
		
<?php		
		$thumbs_dir='../images/contentimgs/'.$row['stock_ref'].'/thumbs/';
		
		$picsinfolder=array();	
		/* step one:  read directory, make array of files */
		if ($handle = opendir($thumbs_dir)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != '.' && $file != '..' && $file != '.DS_Store') 
				{					
			        $picsinfolder[] = $file;					
				}
			}
			closedir($handle);
		}
		
		/* step two: loop through, format gallery */
		if(count($picsinfolder)){
			?>
            <div class="thumbsbox">
            <p style="margin:0 0 0 10px; font-size:12px; position:relative; top:-3px;">点击看大图</p>
            <?php
			$c=0;		
			foreach($picsinfolder as $file){
				
				?>						
                
                <a class="thumbbox" rel="thumbbox<?php echo $row['stock_ref']; ?>" id="pic_<?php echo $row['stock_ref'].$c; ?>" href="../images/contentimgs/<?php echo $row['stock_ref']; ?>/<?php echo urldecode($file); ?>">
                <img src="<?php echo urldecode($thumbs_dir.$file); ?>" />
                </a>

                
                <?php
				$c++;
			}
			?>
            </div>
			<?php
		}
?>
			
</div>

</div><!-- end detail box left -->



<div class="detailboxright">

<?php
$sql_v='SELECT * FROM video_diamond WHERE ref_number = "'.$row["stock_ref"].'" ORDER BY id DESC LIMIT 1';
foreach($conn->query($sql_v) as $v){
	if($v['thelink_clean']!=NULL && $v['thelink_clean']!==''){
?>
<div class="videobox_clean" style="width:352px;" title="<?php echo $row["stock_ref"]; ?>">
<?php

?>
</div>
<?php
	}else if($v['thelink']!=NULL && $v['thelink']!=''){
?>
<div class="videobox" title="<?php echo $v['thelink']; ?>">

</div>	
<?php
	}
} 
?>





</div><!-- end of detail box right -->
<br style="clear:both;" />
</div>

</td>
</tr>
<?php
}
?>
</table>

<div id="howmanyrecords" style="display:none;"><?php echo $result_number; ?></div>

