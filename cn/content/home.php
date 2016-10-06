<?php
$sql_home='SELECT * FROM homepage';
foreach($conn->query($sql_home) as $row){}
?>
<div class="container-fluid" >
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="home_block imgsize" id="home_block1">
<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p1_link1']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p1_img1']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p1_txt1']; ?></p>
</a>
</div>


<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p1_link2']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p1_img2']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p1_txt2']; ?></p>
</a>
</div>


<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p1_link3']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p1_img3']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p1_txt3']; ?></p>
</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<p id=""><a onclick="prev()" href="#pre">&lt;&lt;</a> &nbsp; &nbsp; &nbsp; 点击查看详细信息 &nbsp; &nbsp; &nbsp; <a onclick="next()" href="#nex">&gt;&gt;</a></p>
</div>
</div>


<div class="home_block imgsize" id="home_block2">
<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p2_link1']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p2_img1']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p2_txt1']; ?></p>
</a>
</div>


<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p2_link2']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p2_img2']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p2_txt2']; ?></p>
</a>
</div>


<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p2_link3']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p2_img3']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p2_txt3']; ?></p>
</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" >
<p id=""><a onclick="prev()" href="#pre">&lt;&lt;</a> &nbsp; &nbsp; &nbsp; 点击查看详细信息 &nbsp; &nbsp; &nbsp; <a onclick="next()" href="#nex">&gt;&gt;</a></p>
</div>
</div>



<div class="home_block imgsize" id="home_block3">
<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p3_link1']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p3_img1']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p3_txt1']; ?></p>
</a>
</div>
<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p3_link2']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p3_img2']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p3_txt2']; ?></p>
</a>
</div>


<div class="col-xs-4 col-sm-4 col-md-4">
<a class="" href="<?php echo $row['p3_link3']; ?>">
<span class="">
<img src="../images/sitepictures/<?php echo $row['p3_img3']; ?>" />
</span>
<p class="ele_words"><?php echo $row['p3_txt3']; ?></p>
</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" >
<p id=""><a onclick="prev()" href="#pre">&lt;&lt;</a> &nbsp; &nbsp; &nbsp; 点击查看详细信息 &nbsp; &nbsp; &nbsp; <a onclick="next()" href="#nex">&gt;&gt;</a></p>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
var crr_block=0;
var abcttt=0;
$(document).ready(function(){
	
	
	changinghomeBlock();
	
	abcttt=setInterval("changinghomeBlock()", 6800);
});

var tttt=0;

function changinghomeBlock(){
	
	if(crr_block<3)
    {
        crr_block++;
        pre_block=crr_block - 1;
    }
     else
     {
        crr_block=1;
        pre_block=3;
     }        
	
	tttt++;
	
	$('div#home_block'+crr_block).css({'right':($(window).width()),'display':'block','opacity':0,'visibility':'visible'});

	$('div#home_block'+crr_block).animate({'left':0, 'opacity':1},1080);


    

       $('div#home_block'+pre_block).animate({'right':-($('div#home_block'+pre_block).width()),'opacity':0},1080, function(){
		$('div#home_block'+pre_block).css({'visibility':'hidden','opacity':1});
	});
	
	//$('#monitor').html(crr_block+' ****** '+nextblock);
	
	clearTimeout(abcttt);
	abcttt=setTimeout("changinghomeBlock()", 6800);
	
}

function prev(){
	
		if(crr_block>1)
        {
	      crr_block--;
          nextblock=crr_block + 1;
        }
        else
        {
          crr_block=3;
          nextblock=1;
        }

	
$('div#home_block'+crr_block).css({'right':($(window).width()),'display':'block','opacity':0,'visibility':'visible'});
	$('div#home_block'+crr_block).animate({'right':0, 'opacity':1},1080);


    
	$('div#home_block'+nextblock).animate({'right':-($('div#home_block'+nextblock).width()),'opacity':0},1080, function(){
		$('div#home_block'+nextblock).css({'visibility':'hidden','opacity':1});
	});

	
	clearTimeout(abcttt);
	abcttt=setTimeout("changinghomeBlock()", 6800);
}


function next(){
	changinghomeBlock();
}


</script>


