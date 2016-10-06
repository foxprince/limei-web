<div class="subnavi_box" id="subnavi_box_diamondpage">

<?php
if($crr_page=='diamonds'){
	include_once('content/sub_navi/diamonds.php');
}
?>

</div>













<div id="filter_box">



<div id="filter_box_inner">
<div class="filter_line">
<span class="filter_title" id="filter_title_shape">shape</span>
<ul class="filter_shape_outer">
<li class="filter_shape chosen" id="filter_shape_Round" title="Round" onclick="filter_shape('Round')"><img src="../images/site_elements/icons/01.gif" /></li>
<li class="filter_shape" id="filter_shape_Pear" title="Pear" onclick="filter_shape('Pear')"><img src="../images/site_elements/icons/02.gif" /></li>
<li class="filter_shape" id="filter_shape_Princess" title="Princess" onclick="filter_shape('Princess')"><img src="../images/site_elements/icons/03.gif" /></li>
<li class="filter_shape" id="filter_shape_Heart" title="Heart" onclick="filter_shape('Heart')"><img src="../images/site_elements/icons/08.gif" /></li>
<li class="filter_shape" id="filter_shape_Marquise" title="Marquise" onclick="filter_shape('Marquise')"><img src="../images/site_elements/icons/05.gif" /></li>
<li class="filter_shape" id="filter_shape_Oval" title="Oval" onclick="filter_shape('Oval')"><img src="../images/site_elements/icons/11.gif" /></li>
<li class="filter_shape" id="filter_shape_Emerald" title="Emerald" onclick="filter_shape('Emerald')"><img src="../images/site_elements/icons/10.gif" /></li>
<li class="filter_shape" id="filter_shape_Radiant" title="Radiant" onclick="filter_shape('Radiant')"><img src="../images/site_elements/icons/06.gif" /></li>
<li class="filter_shape" id="filter_shape_Cushion" title="Cushion" onclick="filter_shape('Cushion')"><img src="../images/site_elements/icons/12.gif" /></li>
</ul>
</div>

<div class="filter_line">
<div class="filter_line_inner" id="filter_line_color" style="border-width:1px;">
<span class="filter_title">color</span>
<ul class="filter_color_container">
<li class="filter_color" id="filter_color_D" title="D" onclick="filter_color('D')">D</li>
<li class="filter_color" id="filter_color_E" title="E" onclick="filter_color('E')">E</li>
<li class="filter_color" id="filter_color_F" title="F" onclick="filter_color('F')">F</li>
<li class="filter_color" id="filter_color_G" title="G" onclick="filter_color('G')">G</li>
<li class="filter_color" id="filter_color_H" title="H" onclick="filter_color('H')">H</li>
<li class="filter_color" id="filter_color_I" title="I" onclick="filter_color('I')">I</li>
<li class="filter_color" id="filter_color_J" title="J" onclick="filter_color('J')">J</li>
<li class="filter_color" id="filter_color_K" title="K" onclick="filter_color('K')">K</li>
<li class="filter_color" id="filter_color_L" title="L" onclick="filter_color('L')">L</li>
<li class="filter_color" id="filter_color_M" title="M" onclick="filter_color('M')">M</li>
</ul>
</div>


<div class="filter_line_inner">
<span class="filter_title" style="top:5px;">carat</span>
<div id="filter_line_weight">
<input type="text" id="weight_from" value="0" /> - <input type="text" id="weight_to" value="100" />
</div>
</div>
</div>

<div class="filter_line">
<div class="filter_line_inner" id="filter_line_clarity" style="border-width:1px;">
<span class="filter_title">clarity</span>
<ul class="filter_clarity_container">
<!--
<li class="filter_clarity" id="filter_clarityFL" onclick="filter_clarity('FL')">FL</li>
-->
<li class="filter_clarity" id="filter_clarity_IF" title="IF" onclick="filter_clarity('IF')">IF</li>
<li class="filter_clarity" id="filter_clarity_VVS1" title="VVS1" onclick="filter_clarity('VVS1')">VVS1</li>
<li class="filter_clarity" id="filter_clarity_VVS2" title="VVS2" onclick="filter_clarity('VVS2')">VVS2</li>
<li class="filter_clarity" id="filter_clarity_VS1" title="VS1" onclick="filter_clarity('VS1')">VS1</li>
<li class="filter_clarity" id="filter_clarity_VS2" title="VS2" onclick="filter_clarity('VS2')">VS2</li>
<li class="filter_clarity" id="filter_clarity_SI1" title="SI1" onclick="filter_clarity('SI1')">SI1</li>
<li class="filter_clarity" id="filter_clarity_SI2" title="SI2" onclick="filter_clarity('SI2')">SI2</li>
<li class="filter_clarity" id="filter_clarity_SI3" title="SI3" onclick="filter_clarity('SI3')">SI3</li>
</ul>
</div>

<div class="filter_line_inner">
<!--
<span class="filter_title" style="top:5px;">price(€)</span>
-->
<div id="filter_line_price" style="display:none;">
<input type="text" id="price_from" value="0" /> - <input type="text" id="price_to" value="9999999" />
</div>
</div>
</div>


</div>
<p id="filtertab">diamonds filter</p><button id="updateBTN" onclick="updateList('1')">update list</button>
</div>





<div class="main_contentbox" id="diamondscontentbox">






<div id="tableheader">
<p id="listdescription"></p>
<table cellpadding="2" cellspacing="0" border="0">
<tr class="t_h">
<td align="center" class="1st_col" style="width:102px;">Reference number</td>
<td align="center" style="width:32px;">Shape</td>
<td align="center">Carat</td>
<td align="center">Color</td>
<td align="center">Clarity</td>
<td align="center">Certificate</td>
<td align="center">Cut</td>
<td align="center">Polish</td>
<td align="center" style="white-space:nowrap;">Symmetry</td>
<td align="center" style="width:112px;">Price(€)</td>
<td align="center" style="width:30px;">&nbsp;</td>
</tr>

<tr>
<td colspan="11" align="center">
<p style="padding:50px 0;">Please contact us for more info</p>
</td>
</tr>
</table>
</div>


<div id="diamondsdata" style="height:200px; overflow:auto;">


</div>





</div>





<div id="loading_indi" style="position:fixed; top:0; left:0; width:100%; height:100%; background-color:#FFF; background-color:rgba(255, 255, 255, 0.7); z-index:6; display:none;">
<p style="position:relative; top:50%; margin-top:-50px; width:128px; height:70px; margin-left:auto; margin-right:auto; text-align:center; background-color:#FFF; padding-top:20px; border-radius:8px;"><img width="25px" src="../images/site_elements/loadingGraphic.gif" /><br /><span style="position:relative; left:8px; display:inline-block; margin-top:12px;">loading diamonds info...</span></p>
</div>

<script type="text/javascript">
//============================
function filter_shape(theshape){
	//alert();
		return;
		
	var crr_id='li#filter_shape_'+theshape;	
	if($(crr_id).hasClass( "chosen" )){
		$(crr_id).removeClass( "chosen" );
	}else{
		$(crr_id).addClass( "chosen" );
	}
}


function filter_color(thecolor){
	
	return;
	
	var crr_id='li#filter_color_'+thecolor;
	var clicked_index=$(crr_id).index();
	
	var howManyColorChosen=$('.filter_color_container>li.chosen').length;
	if(howManyColorChosen==0){
		$(crr_id).addClass( "chosen" );
	}else if(howManyColorChosen==1){
		var pre_index=$('.filter_color_container>li.chosen').index();
				
		if(pre_index<clicked_index){
			var startNum=pre_index;
			var finiNum=clicked_index;
		}else{
			var startNum=clicked_index;
			var finiNum=pre_index;
		}
		
		for(i=startNum; i <= finiNum; i++){
			$("li.filter_color").eq(i).addClass( "chosen" );
		}
		
	}else if(howManyColorChosen>1){
		$('.filter_color_container>li.chosen').removeClass( "chosen" );
		$(crr_id).addClass( "chosen" );
	}
}

function filter_clarity(theclarity){
	
	return;
	
	var crr_id='li#filter_clarity_'+theclarity;
	var clicked_index=$(crr_id).index();
	
	var howManyClarityChosen=$('.filter_clarity_container>li.chosen').length;
	if(howManyClarityChosen==0){
		$(crr_id).addClass( "chosen" );
	}else if(howManyClarityChosen==1){
		var pre_index=$('.filter_clarity_container>li.chosen').index();
				
		if(pre_index<clicked_index){
			var startNum=pre_index;
			var finiNum=clicked_index;
		}else{
			var startNum=clicked_index;
			var finiNum=pre_index;
		}
		
		for(i=startNum; i <= finiNum; i++){
			$("li.filter_clarity").eq(i).addClass( "chosen" );
		}		
	}else if(howManyClarityChosen>1){
		$('.filter_clarity_container>li.chosen').removeClass( "chosen" );
		$(crr_id).addClass( "chosen" );
	}
}

function filter_cuttinggrade(cate,thegrade){
	
	return;
	
	var crr_id='li#filter_'+cate+'_'+thegrade;
	var clicked_index=$(crr_id).index();
	
	var howManyGradeChosen=$('.filter_'+cate+'_container>li.chosen').length;
	if(howManyGradeChosen==0){
		$(crr_id).addClass( "chosen" );
	}else if(howManyGradeChosen==1){
		var pre_index=$('.filter_'+cate+'_container>li.chosen').index();
				
		if(pre_index<clicked_index){
			var startNum=pre_index;
			var finiNum=clicked_index;
		}else{
			var startNum=clicked_index;
			var finiNum=pre_index;
		}
		
		for(i=startNum; i <= finiNum; i++){
			$("li.filter_"+cate).eq(i).addClass( "chosen" );
		}		
	}else if(howManyGradeChosen>1){
		$('.filter_'+cate+'_container>li.chosen').removeClass( "chosen" );
		$(crr_id).addClass( "chosen" );
	}
}


//filter certificate =====================
function filter_certi(thelab){
	
	return;
	
	
	var crr_id='li#filter_certi_'+thelab;	
	if($(crr_id).hasClass( "chosen" )){
		$(crr_id).removeClass( "chosen" );
	}else{
		$(crr_id).addClass( "chosen" );
	}
}

//filter FLUO =============================
function filter_fluo(thegrade){
	var crr_id='li#filter_fluo_'+thegrade;	
	if($(crr_id).hasClass( "chosen" )){
		$(crr_id).removeClass( "chosen" );
	}else{
		$(crr_id).addClass( "chosen" );
	}
}


function filter_weight(){
	if($.trim($('input#weight_from').val())!=''){
		$weight_from = $.trim($('input#weight_from').val());
	}
	if($.trim($('input#weight_to').val())!=''){
		$weight_to = $.trim($('input#weight_to').val());
	}
	update();
}

function filter_price(){
	
	return;
	
	
	if($.trim($('input#price_from').val())!=''){
		$price_from = $.trim($('input#price_from').val());
	}
	if($.trim($('input#price_to').val())!=''){
		$price_to = $.trim($('input#price_to').val());
	}
	update();
}


function updateList(crr_page){
	
	return;
	
	var $crr_page=crr_page;
	
	var $shapes='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var howmanyshapes=$('.filter_shape_outer li.chosen').length;
	
	if(howmanyshapes>=1){
		$shapes='[';
		$comma_counter=0;
		$('.filter_shape_outer li.chosen').each(function(){
			if($comma_counter>0){
				$shapes+=', "'+$(this).attr('title')+'"';
			}else{
				$shapes+='"'+$(this).attr('title')+'"';
			}
			$comma_counter++;
		});
		$shapes+=']';
	}
	
	var $size_from=$('input#weight_from').val();
	var $size_to=$('input#weight_to').val();
	
	var $color_from="";//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $color_to="";//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	
	var $colorCounter=0;
	$('.filter_color_container li.chosen').each(function(){
		$colorCounter++;
		if($colorCounter==1){
			$color_from=$(this).attr('title');
		}
		$color_to=$(this).attr('title');
	});
	
	var $clarity_from='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $clarity_to='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	
	var $clarityCounter=0;
	$('.filter_clarity_container li.chosen').each(function(){
		$clarityCounter++;
		if($clarityCounter==1){
			$clarity_from=$(this).attr('title');
		}
		$clarity_to=$(this).attr('title');
	});
	
	var $cut_from='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $cut_to='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	
	var $cutCounter=0;
	$('.filter_cut_container li.chosen').each(function(){
		$cutCounter++;
		if($cutCounter==1){
			$cut_from=$(this).attr('title');
		}
		$cut_to=$(this).attr('title');
	});
	
	var $polish_from='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $polish_to='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	
	var $polishCounter=0;
	$('.filter_polish_container li.chosen').each(function(){
		$polishCounter++;
		if($polishCounter==1){
			$polish_from=$(this).attr('title');
		}
		$polish_to=$(this).attr('title');
	});
	
	
	
	var $symmetry_from='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $symmetry_to='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	var $symCounter=0;
	$('.filter_sym_container li.chosen').each(function(){
		$symCounter++;
		if($symCounter==1){
			$symmetry_from=$(this).attr('title');
		}
		$symmetry_to=$(this).attr('title');
	});
	
	$price_total_from=$('input#price_from').val();//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	$price_total_to=$('input#price_to').val();//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	
	$fluorescence_intensities='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	if($('.filter_fluo_container li.chosen').length>=1){
		$fluorescence_intensities='[';
		$fluoCounter=0;
		$('.filter_fluo_container li.chosen').each(function(){
			$fluoCounter++;
			if($fluoCounter==1){
				$fluorescence_intensities+='"'+$(this).attr('title')+'"';
			}else if($fluoCounter>1){
				$fluorescence_intensities+=', "'+$(this).attr('title')+'"';
			}
		});
		$fluorescence_intensities+=']';
	}
	
	
	$labs='';//±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
	if($('.filter_certi_container li.chosen').length>=1){
		$labs='[';
		$labsCounter=0;
		$('.filter_certi_container li.chosen').each(function(){
			$labsCounter++;
			if($labsCounter==1){
				$labs+='"'+$(this).attr('title')+'"';
			}else if($labsCounter>1){
				$labs+=', "'+$(this).attr('title')+'"';
			}
		});
		$labs+=']';
	}
	
	$('div#loading_indi').fadeIn('fast');
	
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! now post !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! now post !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! now post !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	
	
	$.post(
		"diamond-data.php", 
		{shapes:$shapes, color_from: $color_from, size_from: $size_from, size_to:$size_to, color_to: $color_to, clarity_from: $clarity_from, clarity_to: $clarity_to, cut_from: $cut_from, cut_to: $cut_to, polish_from: $polish_from, polish_to: $polish_to, symmetry_from:$symmetry_from, symmetry_to:$symmetry_to, fluorescence_intensities: $fluorescence_intensities, price_total_from:$price_total_from, price_total_to:$price_total_to, labs:$labs, page_number: $crr_page}, 
		function(data){
			/**/
			$('div#loading_indi').fadeOut('fast');
			
			$('#diamondsdata').html(data);
			//var howmanyrecords=$("div#howmanyrecords").html();
			//$('span#resulthowmany').html(howmanyrecords);
			$('p#listdescription').html($('div#info-number').html());
			addlisteners();
			//console.log(data);
		}
	);
}

</script>

<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function(){
	//updateList('1');
	//addlisteners();
});

function addlisteners(){
	return;
	
	$('tr').off();	
	$('tr').click(function(){
		console.log('tr clicked');		
		var crr_obj=$(this);
		var theid='#d_'+crr_obj.attr('class');
		if(crr_obj.children('td.seedetail').attr('title')=='open'){
			//alert(theid);	
		    $(theid).show(10);
			//
			$(theid).find('div.detailouterbox').slideDown(300, function(){
				crr_obj.children('td.seedetail').attr('title','close');
				if($(theid).find('div.videobox_clean').length>0){
					var thevbox=$(theid).find('div.videobox_clean');
					var theref=thevbox.attr('title');
					thevbox.html('<iframe height="262" width="352" src="content/video.php?ref='+theref+'" frameborder="0" ></iframe><a target="_blank" class="openupvideo" href="content/video.php?ref='+theref+'"><img src="../images/site_elements/openupicon.png" style="border:none; width:25px;" /></a>');
				}
				if($(theid).find('div.videobox').length>0){
					var thelink=$(theid).find('div.videobox').attr('title');
					$(theid).find('div.videobox').css({'background-image':'URL(../images/site_elements/loading.gif)','background-repeat':'no-repeat'});
					$(theid).find('div.videobox').html('<iframe height=268 width=352 src="" frameborder=0 allowfullscreen></iframe>');
					$(theid).find('div.videobox iframe').attr('src',thelink);
					$(theid).find('div.thumbbox').eq(0).click();
				}
			});
		}else{
			$(theid).find('div.detailouterbox').slideUp("fast", function(){
				crr_obj.children('td.seedetail').attr('title','open');
				$(theid).hide();
			});
		}
	});
	
	$("a.thumbbox").fancybox({
		beforeLoad: function(){
						$('iframe').css('visibility',"hidden");
					},
		afterClose: function(){
						$('iframe').css('visibility',"visible");
					}
	});
}


</script>
