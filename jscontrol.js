// JavaScript Document
var b_h=500;
$(document).ready(function(){
	setmaincontentheight();
	$(window).resize(function(){
		setmaincontentheight();
	});
	
	
	$( "img[alt='videopreview_hidden']" ).css("display",'none');
});


function setmaincontentheight(){
	/*
	b_h=$(window).height();
	var crreleID=$('div.main_contentbox').attr("id");
	//alert(crreleID);
	if(crreleID!="diamondscontentbox" &&  crreleID!="diamondscontentbox_color"){
		$('div.main_contentbox').css('height',(b_h-288));
	}else if(crreleID=="diamondscontentbox"){
		$('div#diamondsdata').css('height',(b_h-455));
	}else if(crreleID=="diamondscontentbox_color"){
		$('div#diamondsdata').css('height',(b_h-295));
	}
	if($('div#bgbox2').length>0){
		$('div#bginner2').css('height',(b_h-1));
	}
	if($('div.main_contentbox div#content').length>0){
		$('div.main_contentbox div#content').css('height',(b_h-238));
	}
	*/
}
