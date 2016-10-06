<div class="themaincontent">
<div class="themaincontentinner">




<div id="filter_box">

<div class="filter-box-leftside">

<div class="filter_line" >
<span class="filter_title" id="filter_title_shape">形状</span>
<ul class="fileber_shape_outer" >
<li class="filter_shape" id="filter_shapeBR" onclick="filter_shape('BR')"><img src="../images/site_elements/icons/01.gif" /></li>
<li class="filter_shape" id="filter_shapePS" onclick="filter_shape('PS')"><img src="../images/site_elements/icons/02.gif" /></li>
<li class="filter_shape" id="filter_shapePR" onclick="filter_shape('PR')"><img src="../images/site_elements/icons/03.gif" /></li>
<li class="filter_shape" id="filter_shapeHS" onclick="filter_shape('HS')"><img src="../images/site_elements/icons/08.gif" /></li>
<li class="filter_shape" id="filter_shapeMQ" onclick="filter_shape('MQ')"><img src="../images/site_elements/icons/05.gif" /></li>
<li class="filter_shape" id="filter_shapeOV" onclick="filter_shape('OV')"><img src="../images/site_elements/icons/11.gif" /></li>
<li class="filter_shape" id="filter_shapeEM" onclick="filter_shape('EM')"><img src="../images/site_elements/icons/10.gif" /></li>
<li class="filter_shape" id="filter_shapeRAD" onclick="filter_shape('RAD')"><img src="../images/site_elements/icons/06.gif" /></li>
<li class="filter_shape" id="filter_shapeCU" onclick="filter_shape('CU')"><img src="../images/site_elements/icons/12.gif" /></li>
</ul>
</div>

<div class="filter_line">
<span class="filter_title">颜色</span>
<ul>
<li class="filter_color" id="filter_colorD" onclick="filter_color('D')">D</li>
<li class="filter_color" id="filter_colorE" onclick="filter_color('E')">E</li>
<li class="filter_color" id="filter_colorF" onclick="filter_color('F')">F</li>
<li class="filter_color" id="filter_colorG" onclick="filter_color('G')">G</li>
<li class="filter_color" id="filter_colorH" onclick="filter_color('H')">H</li>
<li class="filter_color" id="filter_colorI" onclick="filter_color('I')">I</li>
<li class="filter_color" id="filter_colorJ" onclick="filter_color('J')">J</li>
<li class="filter_color" id="filter_colorK" onclick="filter_color('K')">K</li>
<li class="filter_color" id="filter_colorL" onclick="filter_color('L')">L</li>
<li class="filter_color" id="filter_colorM" onclick="filter_color('M')">M</li>
</ul>
</div>

<div class="filter_line">
<span class="filter_title">钻重</span>
<div id="filter_line_weight">
<input type="text" id="weight_from" /> - <input type="text" id="weight_to" /> <button type="button" id="btn_weight">更新结果</button>
</div>
</div>

<div class="filter_line" id="filter_line_clarity">
<span class="filter_title">净度</span>
<ul>
<li class="filter_clarity" id="filter_clarityFL" onclick="filter_clarity('FL')">FL</li>
<li class="filter_clarity" id="filter_clarityIF" onclick="filter_clarity('IF')">IF</li>
<li class="filter_clarity" id="filter_clarityWS1" onclick="filter_clarity('WS1')">VVS1</li>
<li class="filter_clarity" id="filter_clarityWS2" onclick="filter_clarity('WS2')">VVS2</li>
<li class="filter_clarity" id="filter_clarityVS1" onclick="filter_clarity('VS1')">VS1</li>
<li class="filter_clarity" id="filter_clarityVS2" onclick="filter_clarity('VS2')">VS2</li>
<li class="filter_clarity" id="filter_claritySI1" onclick="filter_clarity('SI1')">SI1</li>
<li class="filter_clarity" id="filter_claritySI2" onclick="filter_clarity('SI2')">SI2</li>
</ul>
</div>





<div class="filter_line">
<span class="filter_title">价格</span>
<div id="filter_line_price">
<input type="text" id="price_from" /> - <input type="text" id="price_to" /> (美元) <button type="button" id="btn_price">更新结果</button>
</div>
</div>
</div><!-- end filterbox leftside -->

<div class="filter-box-rightside">

<div class="filter_line">
<span class="filter_title">切工</span>
<ul>
<li class="filter_cut" id="filter_cutEX" onclick="filter_cut('EX')">EX</li>
<li class="filter_cut" id="filter_cutVG" onclick="filter_cut('VG')">VG</li>
<li class="filter_cut" id="filter_cutG" onclick="filter_cut('G')">G</li>
<li class="filter_cut" id="filter_cutF" onclick="filter_cut('F')">F</li>
</ul>
</div>

<div class="filter_line">
<span class="filter_title">抛光</span>
<ul>
<li class="filter_polish" id="filter_polishEX" onclick="filter_polish('EX')">EX</li>
<li class="filter_polish" id="filter_polishVG" onclick="filter_polish('VG')">VG</li>
<li class="filter_polish" id="filter_polishG" onclick="filter_polish('G')">G</li>
<li class="filter_polish" id="filter_polishF" onclick="filter_polish('F')">F</li>
</ul>
</div>

<div class="filter_line">
<span class="filter_title">对称</span>
<ul>
<li class="filter_sym" id="filter_symEX" onclick="filter_sym('EX')">EX</li>
<li class="filter_sym" id="filter_symVG" onclick="filter_sym('VG')">VG</li>
<li class="filter_sym" id="filter_symG" onclick="filter_sym('G')">G</li>
<li class="filter_sym" id="filter_symF" onclick="filter_sym('F')">F</li>
</ul>
</div>

<div class="filter_line">
<span class="filter_title">证书</span>
<ul>
<li class="filter_certi" id="filter_certiIGI" onclick="filter_certi('IGI')">IGI</li>
<li class="filter_certi" id="filter_certiHRD" onclick="filter_certi('HRD')">HRD</li>
<li class="filter_certi" id="filter_certiGIA" onclick="filter_certi('GIA')">GIA</li>
</ul>
</div>


<div class="filter_line" id="filter_line_searchbycertinumber">
<span class="filter_title">查询</span>
<input type="text" id="numbersearch" placeholder="证书编号/库存编号" /> <button type="button" id="btn_certificatenumbersearch" onclick="searchbynumbers()">查询</button>
</div>

</div><!-- end filterbox rightside -->

<br style="clear:both;" />

</div><!-- end filter box -->



<div class="main_contentbox_dia_data" id="diamondscontentbox_data" >

<div id="tableheader">
<p id="listdescription">为您找到 <span id="resulthowmany">0</span> 条结果:    <span id="dia-page-selector">第 <span id="diapagenavi">1</span> 页</span> <!--<span id="more">更多》</span>--></p>

</div>


<div id="diamondsdata">


</div>

</div><!-- end diamondscontentbox -->


</div><!-- end themaincontentinner -->
</div><!-- end themaincontent -->


<div id="loading_indi" style="position:fixed; top:0; left:0; width:100%; height:100%; background-color:#FFF; background-color:rgba(255, 255, 255, 0.7); z-index:6; display:none;">
<p style="position:relative; top:50%; margin-top:-50px; width:128px; height:70px; margin-left:auto; margin-right:auto; text-align:center; background-color:#FFF; padding-top:20px; border-radius:8px;"><img width="25px" src="../images/site_elements/loadingGraphic.gif" /><br /><span style="position:relative; left:8px; display:inline-block; margin-top:12px;">载入中...</span></p>
</div>




<script type="text/javascript">
var $featured='NO';



var $shapeBR=false;
var $shapePS=false;
var $shapePR=false;
var $shapeHS=false;
var $shapeMQ=false;
var $shapeOV=false;
var $shapeEM=false;
var $shapeRAD=false;
var $shapeCU=false;

var $shape = '';


var $colorD = false;
var $colorE = false;
var $colorF = false;
var $colorG = false;
var $colorH = false;
var $colorI = false;
var $colorJ = false;
var $colorK = false;
var $colorL = false;
var $colorM = false;

var $color = '';



var $clarityFL = false;
var $clarityIF = false;
var $clarityWS1 = false;
var $clarityWS2 = false;
var $clarityVS1 = false;
var $clarityVS2 = false;
var $claritySI1 = false;
var $claritySI2 = false;

var $clarity = '';



//======================= cut ==========================
var $cutEX=false;
var $cutVG=false;
var $cutG=false;
var $cutF=false;

var $cut='';

//======================= sym ==========================
var $symEX=false;
var $symVG=false;
var $symG=false;
var $symF=false;

var $sym='';

//======================= polish ==========================
var $polishEX=false;
var $polishVG=false;
var $polishG=false;
var $polishF=false;

var $polish='';

//======================= certi ==========================
var $certiIGI=false;
var $certiHRD=false;
var $certiGIA=false;

var $certi='';

//======================= fluo ==========================
var $fluoVST=false;
var $fluoSTG=false;
var $fluoMED=false;
var $fluoFNT=false;
var $fluoNON=false;

var $fluo='';


var $weight_from = '';
var $weight_to = '';
var $price_from = '';
var $price_to = '';
var $sorting = 'price';
var $sorting_weight_direction = 'ASC';
var $sorting_color_direction = 'ASC';
var $sorting_clarity_direction = 'ASC';
var $sorting_cut_direction = 'ASC';
var $sorting_price_direction = 'ASC';
var $sorting_direction = 'ASC';

var $crr_page=1;


function filter_shape(theshape){
	var $theshape=theshape;
	var $or='';
	$shape='';

	if($theshape=='BR'){
		if($shapeBR){
			$shapeBR=false;
			$('#filter_shapeBR').removeClass('btn-active');
		}else{
			$shapeBR=true;
			$('#filter_shapeBR').addClass('btn-active');
		}
	}else if($theshape=='PS'){
		if($shapePS){
			$shapePS=false;
			$('#filter_shapePS').removeClass('btn-active');
		}else{
			$shapePS=true;
			$('#filter_shapePS').addClass('btn-active');
		}
	}else if($theshape=='PR'){
		if($shapePR){
			$shapePR=false;
			$('#filter_shapePR').removeClass('btn-active');
		}else{
			$shapePR=true;
			$('#filter_shapePR').addClass('btn-active');
		}
	}else if($theshape=='HS'){
		if($shapeHS){
			$shapeHS=false;
			$('#filter_shapeHS').removeClass('btn-active');
		}else{
			$shapeHS=true;
			$('#filter_shapeHS').addClass('btn-active');
		}
	}else if($theshape=='MQ'){
		if($shapeMQ){
			$shapeMQ=false;
			$('#filter_shapeMQ').removeClass('btn-active');
		}else{
			$shapeMQ=true;
			$('#filter_shapeMQ').addClass('btn-active');
		}
	}else if($theshape=='OV'){
		if($shapeOV){
			$shapeOV=false;
			$('#filter_shapeOV').removeClass('btn-active');
		}else{
			$shapeOV=true;
			$('#filter_shapeOV').addClass('btn-active');
		}
	}else if($theshape=='EM'){
		if($shapeEM){
			$shapeEM=false;
			$('#filter_shapeEM').removeClass('btn-active');
		}else{
			$shapeEM=true;
			$('#filter_shapeEM').addClass('btn-active');
		}
	}else if($theshape=='RAD'){
		if($shapeRAD){
			$shapeRAD=false;
			$('#filter_shapeRAD').removeClass('btn-active');
		}else{
			$shapeRAD=true;
			$('#filter_shapeRAD').addClass('btn-active');
		}
	}else if($theshape=='CU'){
		if($shapeCU){
			$shapeCU=false;
			$('#filter_shapeCU').removeClass('btn-active');
		}else{
			$shapeCU=true;
			$('#filter_shapeCU').addClass('btn-active');
		}
	}

	if($shapeBR){
		$shape+=' shape = "BR" ';
		$or = ' OR ';
	}
	if($shapePS){
		$shape+=$or+' shape = "PS" ';
		$or = ' OR ';
	}
	if($shapePR){
		$shape+=$or+' shape = "PR" ';
		$or = ' OR ';
	}
	if($shapeHS){
		$shape+=$or+' shape = "HS" ';
		$or = ' OR ';
	}
	if($shapeMQ){
		$shape+=$or+' shape = "MQ" ';
		$or = ' OR ';
	}
	if($shapeOV){
		$shape+=$or+' shape = "OV" ';
		$or = ' OR ';
	}
	if($shapeEM){
		$shape+=$or+' shape = "EM" ';
		$or = ' OR ';
	}
	if($shapeRAD){
		$shape+=$or+' shape = "RAD" ';
		$or = ' OR ';
	}
	if($shapeCU){
		$shape+=$or+' shape = "CU" ';
		$or = ' OR ';
	}

	update();
}
function filter_color(thecolor){
	var $thecolor=thecolor;
	var $or='';
	$color='';
if($thecolor=='D'){
		if($colorD){
			$colorD=false;
			$('#filter_colorD').removeClass('btn-active');
		}else{
			$colorD=true;
			$('#filter_colorD').addClass('btn-active');
		}
	}else if($thecolor=='E'){
		if($colorE){
			$colorE=false;
			$('#filter_colorE').removeClass('btn-active');
		}else{
			$colorE=true;
			$('#filter_colorE').addClass('btn-active');
		}
	}else if($thecolor=='F'){
		if($colorF){
			$colorF=false;
			$('#filter_colorF').removeClass('btn-active');
		}else{
			$colorF=true;
			$('#filter_colorF').addClass('btn-active');
		}
	}else if($thecolor=='G'){
		if($colorG){
			$colorG=false;
			$('#filter_colorG').removeClass('btn-active');
		}else{
			$colorG=true;
			$('#filter_colorG').addClass('btn-active');
		}
	}else if($thecolor=='H'){
		if($colorH){
			$colorH=false;
			$('#filter_colorH').removeClass('btn-active');
		}else{
			$colorH=true;
			$('#filter_colorH').addClass('btn-active');
		}
	}else if($thecolor=='I'){
		if($colorI){
			$colorI=false;
			$('#filter_colorI').removeClass('btn-active');
		}else{
			$colorI=true;
			$('#filter_colorI').addClass('btn-active');
		}
	}else if($thecolor=='J'){
		if($colorJ){
			$colorJ=false;
			$('#filter_colorJ').removeClass('btn-active');
		}else{
			$colorJ=true;
			$('#filter_colorJ').addClass('btn-active');
		}
	}else if($thecolor=='K'){
		if($colorK){
			$colorK=false;
			$('#filter_colorK').removeClass('btn-active');
		}else{
			$colorK=true;
			$('#filter_colorK').addClass('btn-active');
		}
	}else if($thecolor=='L'){
		if($colorL){
			$colorL=false;
			$('#filter_colorL').removeClass('btn-active');
		}else{
			$colorL=true;
			$('#filter_colorL').addClass('btn-active');
		}
	}else if($thecolor=='M'){
		if($colorM){
			$colorM=false;
			$('#filter_colorM').removeClass('btn-active');
		}else{
			$colorM=true;
			$('#filter_colorM').addClass('btn-active');
		}
	}
	if($colorD){
		$color+=' color = "D" ';
		$or=' OR ';
	}
	if($colorE){
		$color+=$or+' color = "E" ';
		$or=' OR ';
	}
	if($colorF){
		$color+=$or+' color = "F" ';
		$or=' OR ';
	}
	if($colorG){
		$color+=$or+' color = "G" ';
		$or=' OR ';
	}
	if($colorH){
		$color+=$or+' color = "H" ';
		$or=' OR ';
	}
	if($colorI){
		$color+=$or+' color = "I" ';
		$or=' OR ';
	}
	if($colorJ){
		$color+=$or+' color = "J" ';
		$or=' OR ';
	}
	if($colorK){
		$color+=$or+' color = "K" ';
		$or=' OR ';
	}
	if($colorL){
		$color+=$or+' color = "L" ';
		$or=' OR ';
	}
	if($colorM){
		$color+=$or+' color = "M" ';
	}

	update();
}



function filter_clarity(theclarity){
	var $theclarity=theclarity;
	var $or='';
	$clarity='';

	if($theclarity=='FL'){
		if($clarityFL){
			$clarityFL=false;
			$('#filter_clarityFL').removeClass('btn-active');
		}else{
			$clarityFL=true;
			$('#filter_clarityFL').addClass('btn-active');
		}
	}else if($theclarity=='IF'){
		if($clarityIF){
			$clarityIF=false;
			$('#filter_clarityIF').removeClass('btn-active');
		}else{
			$clarityIF=true;
			$('#filter_clarityIF').addClass('btn-active');
		}
	}else if($theclarity=='WS1'){
		if($clarityWS1){
			$clarityWS1=false;
			$('#filter_clarityWS1').removeClass('btn-active');
		}else{
			$clarityWS1=true;
			$('#filter_clarityWS1').addClass('btn-active');
		}
	}else if($theclarity=='WS2'){
		if($clarityWS2){
			$clarityWS2=false;
			$('#filter_clarityWS2').removeClass('btn-active');
		}else{
			$clarityWS2=true;
			$('#filter_clarityWS2').addClass('btn-active');
		}
	}else if($theclarity=='VS1'){
		if($clarityVS1){
			$clarityVS1=false;
			$('#filter_clarityVS1').removeClass('btn-active');
		}else{
			$clarityVS1=true;
			$('#filter_clarityVS1').addClass('btn-active');
		}
	}else if($theclarity=='VS2'){
		if($clarityVS2){
			$clarityVS2=false;
			$('#filter_clarityVS2').removeClass('btn-active');
		}else{
			$clarityVS2=true;
			$('#filter_clarityVS2').addClass('btn-active');
		}
	}else if($theclarity=='SI1'){
		if($claritySI1){
			$claritySI1=false;
			$('#filter_claritySI1').removeClass('btn-active');
		}else{
			$claritySI1=true;
			$('#filter_claritySI1').addClass('btn-active');
		}
	}else if($theclarity=='SI2'){
		if($claritySI2){
			$claritySI2=false;
			$('#filter_claritySI2').removeClass('btn-active');
		}else{
			$claritySI2=true;
			$('#filter_claritySI2').addClass('btn-active');
		}
	}
	if($clarityFL){
		$clarity+=' clarity = "FL" ';
		$or = ' OR ';
	}
	if($clarityIF){
		$clarity+=$or+' clarity = "IF" ';
		$or = ' OR ';
	}
	if($clarityWS1){
		$clarity+=$or+' clarity = "VVS1" ';
		$or = ' OR ';
	}
	if($clarityWS2){
		$clarity+=$or+' clarity = "VVS2" ';
		$or = ' OR ';
	}
	if($clarityVS1){
		$clarity+=$or+' clarity = "VS1" ';
		$or = ' OR ';
	}
	if($clarityVS2){
		$clarity+=$or+' clarity = "VS2" ';
		$or = ' OR ';
	}
	if($claritySI1){
		$clarity+=$or+' clarity = "SI1" ';
		$or = ' OR ';
	}
	if($claritySI2){
		$clarity+=$or+' clarity = "SI2" ';
		$or = ' OR ';
	}


	update();
}






function filter_cut(thegrade){
	var $thecutgrade=thegrade;
	var $or='';
	$cut='';
	
	if($thecutgrade=='EX'){
		if($cutEX){
			$cutEX=false;
			$('#filter_cutEX').removeClass('btn-active');
		}else{
			$cutEX=true;
			$('#filter_cutEX').addClass('btn-active');
		}
	}else if($thecutgrade=='VG'){
		if($cutVG){
			$cutVG=false;
			$('#filter_cutVG').removeClass('btn-active');
		}else{
			$cutVG=true;
			$('#filter_cutVG').addClass('btn-active');
		}
	}else if($thecutgrade=='G'){
		if($cutG){
			$cutG=false;
			$('#filter_cutG').removeClass('btn-active');
		}else{
			$cutG=true;
			$('#filter_cutG').addClass('btn-active');
		}
	}else if($thecutgrade=='F'){
		if($cutF){
			$cutF=false;
			$('#filter_cutF').removeClass('btn-active');
		}else{
			$cutF=true;
			$('#filter_cutF').addClass('btn-active');
		}
	}
	
	if($cutEX){
		$cut+=' cut_grade = "EX" ';
		$or= ' OR ';
	}
	if($cutVG){
		$cut+=$or+' cut_grade = "VG" ';
		$or= ' OR ';
	}
	if($cutG){
		$cut+=$or+' cut_grade = "G" ';
	    $or= ' OR ';
	}
	if($cutF){
		$cut+=$or+' cut_grade = "F" ';
		$or= ' OR ';
	}
	
	
	update();
}

//filter polish =============================
//filter polish =============================
//filter polish =============================
//filter polish =============================
function filter_polish(thegrade){
	var $thepolishgrade=thegrade;
	var $or='';
	$polish='';
	
	if($thepolishgrade=='EX'){
		if($polishEX){
			$polishEX=false;
			$('#filter_polishEX').removeClass('btn-active');
		}else{
			$polishEX=true;
			$('#filter_polishEX').addClass('btn-active');
		}
	}else if($thepolishgrade=='VG'){
		if($polishVG){
			$polishVG=false;
			$('#filter_polishVG').removeClass('btn-active');
		}else{
			$polishVG=true;
			$('#filter_polishVG').addClass('btn-active');
		}
	}else if($thepolishgrade=='G'){
		if($polishG){
			$polishG=false;
			$('#filter_polishG').removeClass('btn-active');
		}else{
			$polishG=true;
			$('#filter_polishG').addClass('btn-active');
		}
	}else if($thepolishgrade=='F'){
		if($polishF){
			$polishF=false;
			$('#filter_polishF').removeClass('btn-active');
		}else{
			$polishF=true;
			$('#filter_polishF').addClass('btn-active');
		}
	}
	
	if($polishEX){
	    $polish+=' polish = "EX" ';
		$or= ' OR ';
	}
	if($polishVG){
		$polish+=$or+' polish = "VG" ';
		$or= ' OR ';
	}
	if($polishG){
		$polish+=$or+' polish = "G" ';
		$or= ' OR ';
	}
	if($polishF){
		$polish+=$or+' polish = "F" ';
		$or= ' OR ';
	}
	update();
}

//filter symmetry =============================
//filter symmetry =============================
//filter symmetry =============================
//filter symmetry =============================
function filter_sym(thegrade){
	var $thesymgrade=thegrade;
	var $or='';
	$sym='';
	
	if($thesymgrade=='EX'){
		if($symEX){
			$symEX=false;
			$('#filter_symEX').removeClass('btn-active');
		}else{
			$symEX=true;
			$('#filter_symEX').addClass('btn-active');
		}
	}else if($thesymgrade=='VG'){
		if($symVG){
			$symVG=false;
			$('#filter_symVG').removeClass('btn-active');
		}else{
			$symVG=true;
			$('#filter_symVG').addClass('btn-active');
		}
	}else if($thesymgrade=='G'){
		if($symG){
			$symG=false;
			$('#filter_symG').removeClass('btn-active');
		}else{
			$symG=true;
			$('#filter_symG').addClass('btn-active');
		}
	}else if($thesymgrade=='F'){
		if($symF){
			$symF=false;
			$('#filter_symF').removeClass('btn-active');
		}else{
			$symF=true;
			$('#filter_symF').addClass('btn-active');
		}
	}
	
	if($symEX){
		$sym+=' symmetry = "EX" ';
		$or= ' OR ';
	}
	if($symVG){
		$sym+=$or+' symmetry = "VG" ';
		$or= ' OR ';
	}
	if($symG){
		$sym+=$or+' symmetry = "G" ';
		$or= ' OR ';
	}
	if($symF){
		$sym+=$or+' symmetry = "F" ';
		$or= ' OR ';
	}
	update();
}

//filter certificate =============================
//filter certificate =============================
//filter certificate =============================
//filter certificate =============================
function filter_certi(thelab){
	var $thecerti=thelab;
	var $or='';
	$certi='';
	
	if($thecerti=='IGI'){
		if($certiIGI){
			$certiIGI=false;
			$('#filter_certiIGI').removeClass('btn-active');
		}else{
			$certiIGI=true;
			$('#filter_certiIGI').addClass('btn-active');
		}
	}else if($thecerti=='GIA'){
		if($certiGIA){
			$certiGIA=false;
			$('#filter_certiGIA').removeClass('btn-active');
		}else{
			$certiGIA=true;
			$('#filter_certiGIA').addClass('btn-active');
		}
	}else if($thecerti=='HRD'){
		if($certiHRD){
			$certiHRD=false;
			$('#filter_certiHRD').removeClass('btn-active');
		}else{
			$certiHRD=true;
			$('#filter_certiHRD').addClass('btn-active');
		}
	}
	
	if($certiIGI){
		$certi+=' grading_lab = "IGI" ';
		$or= ' OR ';
	}
	if($certiGIA){
		$certi+=$or+' grading_lab = "GIA" ';
		$or= ' OR ';
	}
	if($certiHRD){
		$certi+=$or+' grading_lab = "HRD" ';
		$or= ' OR ';
	}
	
	update();
}






function sorting_weight(){
	$sorting='weight';
	if($sorting_weight_direction == 'ASC'){
		$sorting_weight_direction = 'DESC';
		$('#arrow_sorting_weight').attr('src','../images/site_elements/arrow-down.png');
	}else{
		$sorting_weight_direction = 'ASC';
		$('#arrow_sorting_weight').attr('src','../images/site_elements/arrow-up.png');
	}
	$sorting_direction=$sorting_weight_direction;
	update();
}
function sorting_color(){
	$sorting = 'color';
	if($sorting_color_direction == 'ASC'){
		$sorting_color_direction = 'DESC';
		$('#arrow_sorting_color').attr('src','../images/site_elements/arrow-down.png');
	}else{
		$sorting_color_direction = 'ASC';
		$('#arrow_sorting_color').attr('src','../images/site_elements/arrow-up.png');
	}
	$sorting_direction=$sorting_color_direction;
	update();
}
function sorting_clarity(){
	$sorting = 'clarity';
	if($sorting_clarity_direction == 'ASC'){
		$sorting_clarity_direction = 'DESC';
		$('#arrow_sorting_clarity').attr('src','../images/site_elements/arrow-down.png');
	}else{
		$sorting_clarity_direction = 'ASC';
		$('#arrow_sorting_clarity').attr('src','../images/site_elements/arrow-up.png');
	}
	$sorting_direction=$sorting_clarity_direction;
	update();
}
function sorting_cut(){
	$sorting = 'cut';
	if($sorting_cut_direction == 'ASC'){
		$sorting_cut_direction = 'DESC';
		$('#arrow_sorting_cut').attr('src','../images/site_elements/arrow-down.png');
	}else{
		$sorting_cut_direction = 'ASC';
		$('#arrow_sorting_cut').attr('src','../images/site_elements/arrow-up.png');
	}
	$sorting_direction=$sorting_cut_direction;
	update();
}
function sorting_price(){
	$sorting = 'price';
	if($sorting_price_direction == 'ASC'){
		$sorting_price_direction = 'DESC';
		$('#arrow_sorting_price').attr('src','../images/site_elements/arrow-down.png');
	}else{
		$sorting_price_direction = 'ASC';
		$('#arrow_sorting_price').attr('src','../images/site_elements/arrow-up.png');
	}
	$sorting_direction=$sorting_price_direction;
	update();
}



function update(){
	nowworkingonfilter=true;
	$('div#loading_indi').fadeIn('fast');
	$.post(
		"diamond-data.php",
		{shape:$shape, color:$color, clarity:$clarity, cut:$cut, polish:$polish, sym:$sym, fluo:$fluo, certi:$certi, weight_from:$weight_from, weight_to:$weight_to, price_from:$price_from, price_to:$price_to, featured: $featured, sorting:$sorting, sorting_direction:$sorting_direction, crr_page:$crr_page},
		function(data){
			var contentLoaded=data;
			//alert(data);
			//return;
			$('div#loading_indi').fadeOut('fast');
			$('div#diamondsdata').html(data);
			var howmanyrecords=$("div#howmanyrecords").html();
			$('span#resulthowmany').html(howmanyrecords);
			diamondlistpagenavi(howmanyrecords);
			addlisteners();
			
			$('button#btn_weight').removeClass('weight-btn-active');
		}
	);
}

function searchbynumbers(){
	$('div#loading_indi').fadeIn('fast');
	thenumbertosearch=$('input#numbersearch').val();
	if(thenumbertosearch==''){
		$('div#loading_indi').fadeOut('fast');
		return false;
	}
	$.post(
		"diamond-data-byref.php",
		{number:thenumbertosearch},
		function(data){
			var contentLoaded=data;
			//alert(data);
			//return;
			$('div#loading_indi').fadeOut('fast');
			$('div#diamondsdata').html(data);
			var howmanyrecords=$("div#howmanyrecords").html();;
			$('span#resulthowmany').html(howmanyrecords);
			diamondlistpagenavi(howmanyrecords);
			addlisteners();
			
			$('button#btn_weight').removeClass('weight-btn-active');
		}
	);
}


function choosethispage(page){
	$crr_page=page;
	update();
}

var crrlistnavipage=0;
var $intotalhowmanyrecords=0;


function diamondlistpagenavi(howmanyrecords){
	$intotalhowmanyrecords=howmanyrecords;
	$('span#diapagenavi').empty();
	var totalrecords=parseFloat(howmanyrecords);
	var totalpages=Math.ceil(totalrecords/35);
	for(var i=crrlistnavipage*10+1; i<=totalpages; i++){
		if(i<=crrlistnavipage*35+10){
			if(i==$crr_page){
				$('span#diapagenavi').append('<span class="dia-page-btn" id="crr_page">'+i+'</span>');
			}else{
				$('span#diapagenavi').append('<span class="dia-page-btn" onclick="choosethispage('+i+')">'+i+'</span>');
			}
		}
	}
}
</script>

<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function(){
	addlisteners();
<?php
if(isset($_GET['ref']) && $_GET['ref']=='round'){
?>
	$('#roundbtn').css({'border-bottom-style':'solid', 'border-width':'2px'});
	filter_shape("BR");
<?php
}else if(isset($_GET['ref']) && $_GET['ref']=='featured'){
?>
	$('#featuredbtn').css({'border-bottom-style':'solid','border-width':'2px'});
	$featured='YES';
	update();
<?php
}else if(isset($_GET['ref']) && $_GET['ref']=='special'){
?>
	$('#specialbtn').css({'border-bottom-style':'solid','border-width':'2px'});
	$shapePS=true;
	$shapePR=true;
	$shapeHS=true;
	$shapeMQ=true;
	$shapeOV=true;
	$shapeEM=true;
	$shapeRAD=true;
	//$shapeCU=true;
	$('#filter_shapePS').css('background-color','#E9E3CF');
	$('#filter_shapePR').css('background-color','#E9E3CF');
	$('#filter_shapeHS').css('background-color','#E9E3CF');
	$('#filter_shapeMQ').css('background-color','#E9E3CF');
	$('#filter_shapeOV').css('background-color','#E9E3CF');
	$('#filter_shapeEM').css('background-color','#E9E3CF');
	$('#filter_shapeRAD').css('background-color','#E9E3CF');
	//$('#filter_shapeCU').css('background-color','#E9E3CF');
	filter_shape("CU");
<?php
}else{
?>
	update();
<?php
}
?>
});

function addlisteners(){

	$('button#btn_weight').unbind().click(function(){
		$weight_from=parseFloat($("input#weight_from").val())+'';
		$weight_to=parseFloat($("input#weight_to").val())+'';

		if($weight_from=="NaN"){
			$weight_from="";
		}
		if($weight_to=="NaN"){
			$weight_to="";
		}
		update();
	});
	$('button#btn_price').unbind().click(function(){
		$price_from=parseFloat($("input#price_from").val())+'';
		$price_to=parseFloat($("input#price_to").val())+'';

		if($price_from=="NaN"){
			$price_from=5;
		}
		if($price_to=="NaN"){
			$price_to=99999999;
		}

		update();
	});
	
	$('span.detail-btn').unbind().click(function(){
		var clicked_main_obj=$(this).parent('.generalinfobox').parent('div.dia-piece-box');
		$('div.details').slideUp();
		clicked_main_obj.children('div.details').slideDown();
	});
	
}


</script>
