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
if(!isset($_POST['sorting'])){
	exit('no data posted - sorting');
}


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
	$query_weight_from=$_POST['weight_from'];
}

if($_POST['weight_to']==''){
	$query_weight_to='100';
}else{
	$query_weight_to = $_POST['weight_to'];
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



require_once('../../includes/connection.php');
$conn=dbConnect('write','pdo');
$conn->query("SET NAMES 'utf8'");

$sql_count='SELECT COUNT(*) AS num FROM diamonds WHERE visiable=1 AND '.$query_shape.$query_color.$query_clarity.$and.'(carat BETWEEN '.$query_weight_from.' AND '.$query_weight_to.') AND (price BETWEEN '.$query_price_from.' AND '.$query_price_to.')';

//exit($sql_count);

foreach($conn->query($sql_count) as $num){
	$result_number=$num['num'];
}
//exit($sql_count.' -- '.$result_number);

$sql='SELECT * FROM diamonds WHERE visiable=1 AND '.$query_shape.$query_color.$query_clarity.$and.'(carat BETWEEN '.$query_weight_from.' AND '.$query_weight_to.') AND (price BETWEEN '.$query_price_from.' AND '.$query_price_to.') '.$query_sorting;
require_once('../../log.php');
logger($sql);

$stmt=$conn->query($sql);
$error=$conn->errorInfo();
if(isset($error[2])) exit($error[2]);
?>



<p style="margin-top:35px; margin-bottom:12px;">共有<?php echo $result_number; ?>条结果符合您的要求:</p>


<table cellpadding="2" cellspacing="0" border="0">
<tr class="t_h">
<td style="width:84px;" align="center" class="1st_col">库存编号</td>
<td style="width:119px;" align="center">形状</td>
<td style="width:76px;" align="center"><img id="arrow_sorting_weight" width="12" src="../images/site_elements/arrow-down.png" /><button type="button" class="sortbtn" title="点击排序" onclick="sorting_weight()">重量</button></td>
<td style="width:80px;" align="center"><img id="arrow_sorting_color" width="12" src="../images/site_elements/arrow-down.png" /><button type="button" class="sortbtn" title="点击排序" onclick="sorting_color()">色级</button></td>
<td style="width:80px;" align="center"><img id="arrow_sorting_clarity" width="12" src="../images/site_elements/arrow-down.png" /><button type="button" class="sortbtn" title="点击排序" onclick="sorting_clarity()">净度</button></td>
<td style="width:76px;" align="center">证书</td>
<td style="width:80px;" align="center"><img id="arrow_sorting_cut" width="12" src="../images/site_elements/arrow-down.png" /><button type="button" class="sortbtn" title="点击排序" onclick="sorting_cut()">切工</button></td>
<td style="width:80px;" align="center">抛光</td>
<td style="width:80px;" align="center">对称性</td>
<td style="width:80px;" align="center">所在国家</td>
<td style="width:80px;" align="center"><img id="arrow_sorting_price" width="12" src="../images/site_elements/arrow-down.png" /><button type="button" class="sortbtn" title="点击排序" onclick="sorting_price()">价格</button></td>
<td style="width:80px;" align="center">&nbsp;</td>
</tr>
<?php
$r=0;
foreach($stmt as $row){
	$r++;
?>
<tr class="<?php echo $r; ?>">
<td align="center" class="ref_number"><?php echo $row['stock_ref']; ?></td>
<td align="center">
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
<td align="center"><?php echo $row['carat']; ?></td>
<td align="center"><?php echo $row['color']; ?></td>
<td align="center"><?php echo $row['clarity']; ?></td>
<td align="center"><?php echo $row['grading_lab']; ?></td>
<td align="center"><?php echo $row['cut_grade']; ?></td>
<td align="center"><?php echo $row['polish']; ?></td>
<td align="center"><?php echo $row['symmetry']; ?></td>
<td align="center"><?php echo $row['country']; ?></td>
<td align="center"><?php echo $row['price']; ?></td>
<td class="seedetail" align="center" title="open">查看详情</td>
</tr>

<tr id="d_<?php echo $r; ?>" class="details">
<td colspan="6" class="detail_1stcol">
<p class="details_txt">
证书编号: 
<?php 
echo $row["certificate_number"];
?>
&nbsp; &nbsp; &nbsp; 
荧光强度:
<?php 
echo $row["fluorescence_intensity"];
?>

<?php
if($row["certificatelink"]!=NULL || $row["certificatelink"]!=''){
?>
&nbsp; &nbsp; &nbsp; 
<a class="certi_linker" target="_blank" href="<?php echo $row['certificatelink']; ?>">查看证书</a>
<?php
}
?>
</p>






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
			$c=0;		
			foreach($picsinfolder as $file){
				if($c==0){
					$pic1=$file;
					?>
                    
                    
            <div class="thumbsbox">
                    <?php
				
				}
				?>						
                
                <a class="thumbbox" rel="thumbbox<?php echo $row['stock_ref']; ?>" id="pic_<?php echo $row['stock_ref'].$c; ?>" href="../images/contentimgs/<?php echo $row['stock_ref']; ?>/<?php echo urldecode($file); ?>">
                <img src="<?php echo urldecode($thumbs_dir.$file); ?>" />
                </a>

                
                <?php
				$c++;
			}
		}
?>
			</div>
</div>




</td>
<td colspan="6" class="detail_2ndcol">
<p class="details_txt">&nbsp;</p>
<?php
$sql_v='SELECT * FROM video_diamond WHERE ref_number = "'.$row["stock_ref"].'"';
foreach($conn->query($sql_v) as $v){
?>
<div class="videobox" title="<?php echo $v['thelink']; ?>">

</div>
<?php
} 
?>

</td>
</tr>
<?php
}
?>
</table>

