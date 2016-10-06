<?php
$crr_page='viewdiamond';
include_once('includes/header_ele.php');
?>
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

<body>
<div  class="container-fluid maxcontainer" >
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/header.php');
?>
</div>
</div>
<?php

if (isset($_GET['diamondid'])) {
    $diamondid = $_GET['diamondid'];
    $ringid = $_GET['ringid'];

    $config = require_once(__DIR__.'/../src/Repositories/DiamondPdoConfig.php');
    require_once(__DIR__.'/../src/Repositories/DiamondPdoRepository.php');
    require_once(__DIR__.'/../src/Utils.php');

    $currency = 'USD';
    if (isset($_COOKIE['currency'])) {
        $currency = $_COOKIE['currency'];
    }

    $repo = new DiamondPdoRepository(new PDO(
        'mysql:host='.$config['host'].';dbname='.$config['dbname'],
        $config['username'],
        $config['password']
    ));
    $d = $repo->getById($diamondid);
    if (!$d) {
        exit('Invalid diamond');
    }

     $repo1 = new DiamondPdoRepository(new PDO(
        'mysql:host='.$config['host1'].';dbname='.$config['dbname1'],
        $config['username1'],
        $config['password1']
    ));
    $r = $repo1->getringById($ringid);
    if (!$r) {
        exit('Invalid ring');
    }
    /*$r取所有图片*/

?>

    <div class="row">
    <div class="col-xs-1 col-sm-1 col-md-1" >&nbsp;</div>
    <div class="col-xs-10 col-sm-10 col-md-10">
    <div class="row ">
    <br />

        <div class="col-md-12" ><p style="text-emphasis-color: black;"><strong>您的选择：</strong></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5" >
            <div class="row">        
            <br />
            <br />
            <br />
            <div class="col-xs-3 col-sm-3 col-md-3">

            <?php
              for($i=1;$i<=3;$i++)
              {
            ?>
            <div  class="home_block imgsize" id="home_block<?php echo $i ?>">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-height: 10px;"><a class="text-a-1" onclick="prev()" href="#pre">&and;</a></div>
                
                <?php
                  if (!empty($r["image".(3*$i - 2)]))
                  {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/sitepictures/<?php echo $r["image".(3*$i - 2)] ?>" onclick="$('#diamond-zoomable').attr('src', this.src);" />
                </div>
                 <?php
                }else
                {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/white.png" />
                </div>
                
                 <?php
                }
                ?>
                
                
                <?php
                  if (!empty($r["image".(3*$i - 1)]))
                  {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/sitepictures/<?php echo $r["image".(3*$i - 1)] ?>" onclick="$('#diamond-zoomable').attr('src', this.src);"/>
                </div>
                 <?php
                }else
                {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/white.png" />
                </div>
                
                 <?php
                }
                ?>
                
                
                
                <?php
                  if ($i<3 &!empty($r["image".(3*$i)]) )
                  {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/sitepictures/<?php echo $r["image".(3*$i)] ?>" onclick="$('#diamond-zoomable').attr('src', this.src);"/>
                </div>
                <?php
                }else
                {
                ?>
                <div class="diamond-thumb col-md-12 col-sm-12 col-xs-12">
                    <img src="../images/white.png" />
                </div>
                <?php
                }
                ?>
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-height: 10px;"><a class="text-a-1" onclick="next()" href="#next">&or;</a></div>

            </div>
             <?php };?>

            </div>
            <!--主图片-->
            <div class="col-xs-9 col-sm-9 col-md-9" >
            <div class="row">
                <div class="col-md-12 diamond-detail-img">
                    <img id="diamond-zoomable" src="../images/sitepictures/<?php echo $r["image1"] ?>" class="magnifiable" width="100%" />
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-1 hidden-sm hidden-xs" >
            <div class="diamond-detail-separator"></div>
        </div>
         <!------------------------------------>
        <div class="col-xs-12 col-sm-12 col-md-6 diamond-detail-description">
        <br />
        <hr />
            <div class="row" >
                <div class="col-xs-3 col-sm-3 col-md-3 text-b">款式</div>
                <div class="col-xs-5 col-sm-5 col-md-5 text-b"><?php echo $r['name_ch']; ?> </div>
                <div class="col-xs-4 col-sm-4 col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3"></div>
                <div class="col-xs-5 col-sm-5 col-md-5">
                    价格
                    <strong style="color:red;">
                    <?php
                    echo Utils::getCurrencySymbol($currency).' '.Utils::getPriceByCarat($d['raw_price_retail'], $d['carat'], $repo, $currency);
                    ?>
                    </strong>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    商场价:
                    <?php
                    echo Utils::getCurrencySymbol($currency).' '.Utils::getMarketPriceByCarat($d['raw_price_retail'], $d['carat'], $repo, $currency);
                    ?>
                </div>
            </div>
            <br />
            <hr />

            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">克拉</div>
                <div class="col-xs-9 col-sm-9 col-md-9"><?php echo $d['carat']; ?> 克拉</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">颜色</div>
                <div class="col-xs-9 col-sm-9 col-md-9" style="text-decoration:underline;"><?php   echo $d['color']; ?> </div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">净度</div>
                <div class="col-xs-9 col-sm-9 col-md-9" style="text-decoration:underline;"><?php echo $d['clarity']; ?> </div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">切工</div>
                <div class="col-xs-9 col-sm-9 col-md-9"><?php  echo '切割 '.$d['cut_grade'].' | 抛光 '.$d['polish'].' | 对称 '.$d['symmetry']; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">出品地</div>
                <div class="col-xs-9 col-sm-9 col-md-9">欧洲 比利时 安特卫普</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">证书编号</div>
                <div class="col-xs-9 col-sm-9 col-md-9"><?php echo $d['certificate_number'];?></div>
            </div>
            <br />
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">证书查看</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <?php
                    echo '<a target="_blank" href="'.
                        Utils::getCertificateLinkByLab($d['grading_lab'], $d['certificate_number'], $d['carat']).
                        '"><div class="diamond-detail-lab-logo-wrapper"><div class="diamond-detail-lab-logo" style="background-image:url(\'../images/recommendation/'.
                        strtolower($d['grading_lab']).'-logo.png\')"></div></div></a>';
                    ?>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3" style="float: left;"><a  id="button" class="button-large btn-danger" onclick="window.close()" href="diamonds-rings.php">预&nbsp;约&nbsp;看&nbsp;钻</a></div>
            </div>

        </div>
         <!------------------------------------>
        <div class="col-xs-12 col-sm-12 col-md-12" ><p >&nbsp;</p>
    </div>
</div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1">&nbsp;</div>
</div>
<?php
}
?>

<script type="text/javascript">
    function initZoom() {
        $('.magnifiable').each(function(index) {
            $(this).imagezoomsl({
                innerzoom: true,
                magnifierborder: 'none'
            });
            // $(this).addClass('patched');
        });
    }
    initZoom();

    // after resizing, the zoomsl doesnt behave normally. zoomsl doesnt provide re-init, so reload
    $(window).resize(function(){
        document.location.reload();
    });
</script>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>
</div>
<script type="text/javascript">
var crr_block=0;
var abcttt=0;
var page=0;
$(document).ready(function(){
    changinghomeBlock();
});

var tttt=0;

function changinghomeBlock(){



	if(crr_block<3){

        crr_block++;
        	tttt++;
  $('div#home_block'+crr_block).css({'top':($(window).height()),'display':'block','opacity':0,'visibility':'visible'});

	$('div#home_block'+crr_block).animate({'top':0, 'opacity':1},1080);


    pre_block=crr_block - 1;

       $('div#home_block'+pre_block).animate({'top':-($('div#home_block'+pre_block).width()),'opacity':0},1080, function(){
		$('div#home_block'+pre_block).css({'visibility':'hidden','opacity':1});
	});
	};




}

function prev(){


	if(crr_block>1){
	   crr_block--;

	$('div#home_block'+crr_block).css({'top':-($(window).width()),'display':'block','opacity':0,'visibility':'visible'});
	$('div#home_block'+crr_block).stop(true).animate({'top':0, 'opacity':1},1080);


    nextblock=crr_block + 1;
	$('div#home_block'+nextblock).stop(true).animate({'top':($('div#home_block'+crr_block).width()),'opacity':0},1080, function(){
		$('div#home_block'+nextblock).css({'visibility':'hidden','opacity':1});
	});

	}
}


function next(){
	changinghomeBlock();
}


</script>

</body>
</html>
