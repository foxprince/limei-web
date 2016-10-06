<?php

include_once(__DIR__.'/params.php');

$crr_page='diamonds';
include_once('includes/header_ele.php');
?>

<head>
<style>
.box{

    text-align:center;
    position:relative;
    overflow:hidden;
    display:table-cell;
    vertical-align:middle;
}
.box .mid{

    position:static;
      +position:absolute;
      top:50%;
    left:0;
    text-align:center;
}
.box .inner{
    position:static;
    +position:relative;
    top:-50%;
    vertical-align:middle;
}


</style>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../styles/bootstrap.min.css"/>

<!-- Optional theme -->
<link rel="stylesheet" href="../styles/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="../styles/index-cn.css"/>
<link rel="stylesheet" href="../styles/diamonds-1.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="../assets/css/style.css"/>
<link rel="stylesheet" href="../styles/diamonds.css"/>
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('div#wechatscanbox').click(function(){closeWechatbox();});
});
function openwechatimage(){
    $('div#wechatscanbox').fadeIn('fast');
}
function closeWechatbox(){
    $('div#wechatscanbox').fadeOut('fast');
}
</script>
<title>利美钻石 - 精品钻石</title>
</head>

<?php
include_once('includes/header.php');
?>

<div >
    <fieldset class="noborder">
        <legend style="display:none;font-weight: bold;">
            <a id="diamond-recommendation-trigger" href="#diamond-recommendation-form">推荐11</a>
        </legend>
        <div style="display:none;font-weight: bold;">
            <div id="diamond-recommendation-form">

                <div class="diamond-recommendation-form-title">
                    <div onclick="$.fancybox.close();">x</div>
                </div>

                <div class="diamond-recommendation-form-body">
                <p>
                    <b>请输入您的预算，我们自动推荐钻石给您！</b>
                </p>

                <form method="post" style="display:block;font-weight: bold;">

                    <div>
                    <table width="100%">
                        <tr>
                            <td width="50px"></td>
                            <td align="right">
                                <input type="text" name="budget"
                                    value="<?php if ($budget) {echo $budget;} ?>"
                                />
                                <select name="currency">
                                    <option value="EUR" <?php if ($currency == 'EUR') { ?>selected="selected"<?php } ?>>&#8364;</option>
                                    <option value="CNY" <?php if ($currency == 'CNY') { ?>selected="selected"<?php } ?>>&#165;</option>
                                    <option value="USD" <?php if ($currency == 'USD') { ?>selected="selected"<?php } ?>>&#36;</option>
                                    <option value="GBP" <?php if ($currency == 'GBP') { ?>selected="selected"<?php } ?>>&#163;</option>
                                </select>
                            </td>
                            <td width="30px"></td>
                        </tr>

                        <tr>
                            <td width="50px"></td>
                            <td style="text-align: right;">
                                <button type="submit" class="btn btn-danger">推荐</button>
                            </td>
                            <td width="30px"></td>
                        </tr>

                    </table>
                    </div>

                </form>


                </div>
            </div>
        </div>
        <script>
            $(window).ready(function() {
                var t = $('#diamond-recommendation-trigger').fancybox({
                    padding: 0,
                    openEffect: 'elastic',
                    closeEffect: 'elastic'
                });
                <?php
                if (!$budget) {
                    echo 't.click();';
                }
                ?>
            });
        </script>

</fieldset>
</div>



<?php
            $config = require_once(__DIR__.'/../src/Repositories/DiamondPdoConfig.php');
            require_once(__DIR__.'/../src/Repositories/DiamondPdoRepository.php');
            require_once(__DIR__.'/../src/Utils.php');

            $repo = new DiamondPdoRepository(new PDO(
                'mysql:host='.$config['host1'].';dbname='.$config['dbname1'],
                $config['username1'],
                $config['password1']
            ));

      $total = $repo->getringsnum();

       $page=ceil($total/4);

    ?>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2"></div>

<div class="col-xs-8 col-sm-8 col-md-8" style="height: 450px;">


<?php
$sql="SELECT * FROM jewelry where category='ring' ORDER BY id";

for($i=1;$i<=$page;$i++)
{
    $diam = $repo->getrings($i,$total,0);

?>
<div class="home_block imgsize" id="home_block<?php echo $i ?>">
<div id="div<?php echo $i*4 -3 ?>" class="col-xs-3 col-sm-3 col-md-3" >
<img src="../images/sitepictures/<?php echo $diam[1]['image1'] ?>"  onmouseover="this.src='../images/sitepictures/<?php echo $diam[1]['image2'] ?> '"  onmouseout="this.src='../images/sitepictures/<?php echo $diam[1]['image1'] ?>'"/>
<p style="text-align: center;">&nbsp;<a id="p1" style="display: none;"><?php echo $diam[1]['name_ch'] ?></a></p>
<p style="text-align: center;height:10px;">&nbsp;<a id="btn1" type="submit" class="btn btn-danger" style="display: none;" href="diamonds-select.php?id=<?php echo $diam[1]['id'] ?>&budget=<?php echo $budget ?>">选定</a></p>
<br />
</div>


<div  id="div2" class="col-xs-3 col-sm-3 col-md-3">
<img src="../images/sitepictures/<?php echo $diam[2]['image1'] ?>"   onmouseover="this.src='../images/sitepictures/<?php echo $diam[2]['image2'] ?> '" onmouseout="this.src='../images/sitepictures/<?php echo $diam[2]['image1'] ?>'"/>
<p style="text-align: center;">&nbsp;<a id="p2" style="display: none;"><?php echo $diam[2]['name_ch'] ?></a></p>
<p style="text-align: center;height:10px;">&nbsp;<a id="btn2" type="submit" class="btn btn-danger" style="display: none;" href="diamonds-select.php?id=<?php echo $diam[2]['id'] ?>&budget=<?php echo $budget ?>">选定</a></p>
<br />
</div>


<div  id="div3" class="col-xs-3 col-sm-3 col-md-3">
<img src="../images/sitepictures/<?php echo $diam[3]['image1'] ?>"   onmouseover="this.src='../images/sitepictures/<?php echo $diam[3]['image2'] ?> '" onmouseout="this.src='../images/sitepictures/<?php echo $diam[3]['image1'] ?>'"/>
<p style="text-align: center;">&nbsp;<a id="p3" style="display: none;"><?php echo $diam[3]['name_ch'] ?></a></p>
<p style="text-align: center;height:10px;" >&nbsp;<a  id="btn3" type="submit" class="btn btn-danger" style="display: none;" href="diamonds-select.php?id=<?php echo $diam[3]['id'] ?>&budget=<?php echo $budget ?>" >选定</a></p>
<br />
</div>

<div  id="div4" class="col-xs-3 col-sm-3 col-md-3" onmousemove="abb()" >
<img src="../images/sitepictures/<?php echo $diam[4]['image1'] ?>"   onmouseover="this.src='../images/sitepictures/<?php echo $diam[4]['image2'] ?> '" onmouseout="this.src='../images/sitepictures/<?php echo $diam[4]['image1'] ?>'"/>
<p  style="text-align: center;">&nbsp;<a id="p4" style="display: none;"><?php echo $diam[4]['name_ch'] ?></a></p>
<p style="text-align: center;height:10px;">&nbsp;<a  onmousemove="this.show()" id="btn4" type="submit" class="btn btn-danger" style="display: none;" href="diamonds-select.php?id=<?php echo $diam[4]['id'] ?>&budget=<?php echo $budget ?>">选定</a></p>
<br />
</div>

<div class="col-xs-12 col-sm-12 col-md-12" >
<p id=""><a onclick="prev()" href="#pre">&lt;&lt;</a> &nbsp; &nbsp; &nbsp; 点击查看详细信息 &nbsp; &nbsp; &nbsp; <a onclick="next()" href="#nex">&gt;&gt;</a></p>
</div>
</div>
<?php
}
?>



</div>

</div>
</div>


</body>




<?php
include_once('includes/footer.php');
?>

<script>

function abb() {
        i=0;
        for(i=1;i<=9;i++){
            $("#div"+i).mouseover(function () {
                if (<?php echo $diam[1]["id"]; ?>!=0)
                {
                $("#btn1").show("slow");
                }
                $("#p1").show("fast");
            });
        };
            $("#div1").mouseleave(function () {
                $("#btn1").hide("fast");
                $("#p1").hide("fast");
            });

            $("#div2").mouseover(function () {
                if (<?php echo $diam[2]["id"]; ?>!=0)
                {
                $("#btn2").show("slow");
                }
                $("#p2").show("fast");
            });

            $("#div2").mouseleave(function () {
                $("#btn2").hide("fast");
                $("#p2").hide("fast");
            });

            $("#div3").mouseover(function () {
                if (<?php echo $diam[3]["id"]; ?>!=0)
                {
                $("#btn3").show("slow");
                }
                 $("#p3").show("fast");
            });

            $("#div3").mouseleave(function () {
                $("#btn3").hide("fast");
                $("#p3").hide("fast");
            });

            $("#div4").mouseover(function () {
               if (<?php echo $diam[4]["id"]; ?>>=0)
                {
                    $("#btn4").show("slow");
                    }

                $("#p4").show("fast");
            });

            $("#div4").mouseleave(function () {
                $("#btn4").hide("fast");
                $("#p4").hide("fast");
            });

        }



</script>

<script type="text/javascript">
var crr_block=0;
var abcttt=0;
var page=0;
$(document).ready(function(){

		changinghomeBlock();


});

var tttt=0;

function changinghomeBlock(){
   page=<?php echo $page ?>;


	if(crr_block<page){

        crr_block++;
        	tttt++;

    $('div#home_block'+crr_block).css({'left':($(window).width()),'display':'block','opacity':0});

	$('div#home_block'+crr_block).animate({'left':0, 'opacity':1},1080);


    pre_block=crr_block - 1;

       $('div#home_block'+pre_block).animate({'left':-($('div#home_block'+pre_block).width()),'opacity':0},1080, function(){
		$('div#home_block'+pre_block).css({'display':'none','opacity':1});
	});

	};




}

function prev(){


	if(crr_block>1){
	   crr_block--;


	$('div#home_block'+crr_block).css({'left':-($(window).width()),'display':'block','opacity':0});
	$('div#home_block'+crr_block).stop(true).animate({'left':0, 'opacity':1},1080);


    nextblock=crr_block + 1;
	$('div#home_block'+nextblock).stop(true).animate({'left':($('div#home_block'+crr_block).width()),'opacity':0},1080, function(){
		$('div#home_block'+nextblock).css({'display':'none','opacity':1});
	});

	}



}


function next(){
	changinghomeBlock();
}


</script>

<div id="wechatscanbox">
<div id="wechatscanboxinner">
<span id="wechatscanboxclosebtn" onClick="closeWechatbox()">X</span>
<p>请加微信询问价格</p>
<p><img style="width:128px;" src="http://lumiagem.com/images/site_elements/wechat_scan.jpg"></p>
</div>
</div>
</html>
