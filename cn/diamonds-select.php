<?php
include_once(__DIR__.'/params.php');
$crr_page='diamonds';
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

$(function(){ window.location.hash = "#div-1"; })
</script>
<title>利美钻石 - 精品钻石</title>

<div  class="container-fluid maxcontainer" >
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/header.php');
?>
</div>
</div>
<?php
    
     if (isset($_GET['ringid'])) {
     	$ringid=$_GET['ringid'];
     } else {
        // $ringid=3333;
     }

    $config = require_once(__DIR__.'/../src/Repositories/DiamondPdoConfig.php');
    require_once(__DIR__.'/../src/Repositories/DiamondPdoRepository.php');
    require_once(__DIR__.'/../src/Utils.php');

   /***********************/
   $repo1 = new DiamondPdoRepository(new PDO(
                'mysql:host='.$config['host1'].';dbname='.$config['dbname1'],
                $config['username1'],
                $config['password1']
            ));


      $diam1 = $repo1->getRings(0, 0, $ringid);
   /***********************************************/
   $repo = new DiamondPdoRepository(new PDO(
                'mysql:host='.$config['host'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password']
            ));

            $repo->setCurrency($currency)
                ->setBudget($budget)
                ->setBudgetLow($budgetLow)
                ->setWeightHigh($weightHigh)
                ->setWeightLow($weightLow)
                ->setringid($ringid);
            $excludes = array();

           if (!$diam2 = $repo->getPerfect())
           {
            $diam2= $repo->getnodiamonds();
           }
           if (!$diam3 = $repo->getPerformancePriceRatio())
           {
            $diam3= $repo->getnodiamonds();
           }
           if (!$diam4 = $repo->getUnbeatableBig())
           {
            $diam4= $repo->getnodiamonds();
           }
           if (!$diam5 = $repo->getCheap())
           {
            $diam5= $repo->getnodiamonds();
           }

    ?>

<!--div**********************************************************-->


<div class="row" >

<div class="col-xs-1 col-sm-1 col-md-1 imgsize"></div>

<div class="col-xs-10 col-sm-10 col-md-10">
<div class="container-fluid">
<div class="row ">
<div class="col-xs-12 col-sm-12 col-md-12" ><p style="text-align:center">&nbsp;</p></div>
<div class="col-xs-12 col-sm-12 col-md-12" ><p><strong>step2：选钻石</strong></p></div>
</div>

<div class="row imgsize" id="div-1">
    <div class="col-xs-4 col-sm-4 col-md-4 "></div>
    <div class="col-xs-4 col-sm-4 col-md-4 ">
        <img src="../images/sitepictures/<?php echo $diam1[1]['image1'] ?>" onmouseover="this.src='../images/sitepictures/<?php echo $diam1[1]['image2'] ?> '"  onmouseout="this.src='../images/sitepictures/<?php echo $diam1[1]['image1'] ?>'"/>
        <p style="text-align: center;">&nbsp;<a id="p1" style="visibility: hidden;"><?php echo $diam1[1]['name_ch'] ?></a></p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 "  ></div>
</div>

<hr />
<div class="row imgsize">
    <div class="col-xs-6 col-sm-6 col-md-3 imgsize-img-container1" id="div1">
        <p style="text-align: center;">----------完美精品----------</p>
        <a href="diamonds-view.php?diamondid=<?php echo $diam2["id"] ?>&ringid=<?php echo $ringid ?>"><img src="../images/recommendation/small.png" /></a>
        <p style="text-align: center;"><a id="a1-1" style="visibility: hidden;"><?php echo $diam2['carat'] ?>&nbsp;CT</a></p>
        <p style="text-align: center;"><a id="a1-2" style="visibility: hidden;">颜色：<?php echo $diam2['color'] ?>&nbsp;/&nbsp;净度：<?php echo $diam2['clarity'] ?>&nbsp;/&nbsp;切工：<?php echo $diam2['cut_grade'] ?></a></p>
        <p style="text-align: center;height:10px;"><a id="btn1" type="submit" class="button-large  btn-danger" style="visibility: hidden;" href="diamonds-view.php?diamondid=<?php echo $diam2["id"] ?>&ringid=<?php echo $ringid ?>">选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</a></p>
        <br />
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 imgsize-img-container1" id="div2">
        <p style="text-align: center;">----------高性价比----------</p>
        <a href="diamonds-view.php?diamondid=<?php echo $diam3["id"] ?>&ringid=<?php echo $ringid ?>"><img src="../images/recommendation/small.png" /></a>
        <p style="text-align: center;"><a id="a2-1" style="visibility: hidden;"><?php echo $diam3['carat'] ?>&nbsp;CT</a></p>
        <p style="text-align: center;"><a id="a2-2" style="visibility: hidden;">颜色：<?php echo $diam3['color'] ?>&nbsp;/&nbsp;净度：<?php echo $diam3['clarity'] ?>&nbsp;/&nbsp;切工：<?php echo $diam3['cut_grade'] ?></a></p>
        <p style="text-align: center;height:10px;"><a id="btn2" type="submit" class="button-large  btn-danger" style="visibility: hidden;" href="diamonds-view.php?diamondid=<?php echo $diam3["id"] ?>&ringid=<?php echo $ringid ?>">选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</a></p>
        <br />
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 imgsize-img-container1" id="div3">
        <p style="text-align: center;">----------无敌大钻----------</p>
        <a href="diamonds-view.php?diamondid=<?php echo $diam4["id"] ?>&ringid=<?php echo $ringid ?>"><img src="../images/recommendation/dazuan.png" /></a>
        <p style="text-align: center;"><a id="a3-1" style="visibility: hidden;"><?php echo $diam4['carat'] ?>&nbsp;CT</a></p>
        <p style="text-align: center;"><a id="a3-2" style="visibility: hidden;">颜色：<?php echo $diam4['color'] ?>&nbsp;/&nbsp;净度：<?php echo $diam4['clarity'] ?>&nbsp;/&nbsp;切工：<?php echo $diam4['cut_grade'] ?></a></p>
        <p style="text-align: center;height:10px;"><a id="btn3" type="submit" class="button-large  btn-danger" style="visibility: hidden;" href="diamonds-view.php?diamondid=<?php echo $diam4["id"] ?>&ringid=<?php echo $ringid ?>">选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</a></p>
        <br />
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 imgsize-img-container1" id="div4">
        <p style="text-align: center;">----------实惠优选----------</p>
        <a href="diamonds-view.php?diamondid=<?php echo $diam5["id"] ?>&ringid=<?php echo $ringid ?>"><img src="../images/recommendation/small.png" /></a>
        <p style="text-align: center;"><a id="a4-1" style="visibility: hidden;"><?php echo $diam5['carat'] ?>&nbsp;CT</a></p>
        <p style="text-align: center;"><a id="a4-2" style="visibility: hidden;">颜色：<?php echo $diam5['color'] ?>&nbsp;/&nbsp;净度：<?php echo $diam5['clarity'] ?>&nbsp;/&nbsp;切工：<?php echo $diam5['cut_grade'] ?></a></p>
        <p style="text-align: center;height:10px;"><a id="btn4" type="submit" class="button-large  btn-danger" style="visibility: hidden;" href="diamonds-view.php?diamondid=<?php echo $diam5["id"] ?>&ringid=<?php echo $ringid ?>">选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</a></p>
        <br />
    </div>
</div>


</div>
<div class="col-xs-1 col-sm-1 col-md-1"><p></p></div> 

</div>
</div>




<!------------------------------------------------->


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>
</div>
<script>

$(function ()
       {
            $("#div1").mouseover(function () {
                if (<?php echo $diam2["id"]; ?>!=0)
                {
                   //btn1.style.visibility="visible";//此条语句好用
                document.getElementById("btn1").style.visibility="visible";
                }
                //a1-1.style.visibility="visible";                
                document.getElementById("a1-1").style.visibility="visible";
                document.getElementById("a1-2").style.visibility="visible";
                //$("#a1-2").show("fast");
            });

            $("#div1").mouseleave(function () {
                document.getElementById("btn1").style.visibility="hidden";
                document.getElementById("a1-1").style.visibility="hidden";
                document.getElementById("a1-2").style.visibility="hidden";
            });

            $("#div2").mouseover(function () {
                if (<?php echo $diam3["id"]; ?>!=0)
                {
                document.getElementById("btn2").style.visibility="visible";
                }
                document.getElementById("a2-1").style.visibility="visible";
                document.getElementById("a2-2").style.visibility="visible";
            });

            $("#div2").mouseleave(function () {
                document.getElementById("btn2").style.visibility="hidden";
                document.getElementById("a2-1").style.visibility="hidden";
                document.getElementById("a2-2").style.visibility="hidden";
            });

            $("#div3").mouseover(function () {
                if (<?php echo $diam4["id"]; ?>!=0)
                {
                document.getElementById("btn3").style.visibility="visible";
                }
                document.getElementById("a3-1").style.visibility="visible";
                document.getElementById("a3-2").style.visibility="visible";
            });

            $("#div3").mouseleave(function () {
                document.getElementById("btn3").style.visibility="hidden";
                document.getElementById("a3-1").style.visibility="hidden";
                document.getElementById("a3-2").style.visibility="hidden";
            });

            $("#div4").mouseover(function () {
                if (<?php echo $diam5["id"]; ?>!=0)
                {
                document.getElementById("btn4").style.visibility="visible";
                }
                document.getElementById("a4-1").style.visibility="visible";
                document.getElementById("a4-2").style.visibility="visible";
            });

            $("#div4").mouseleave(function () {
                document.getElementById("btn4").style.visibility="hidden";
                document.getElementById("a4-1").style.visibility="hidden";
                document.getElementById("a4-2").style.visibility="hidden";
            });

        }
);
</script>

<script type="text/javascript">
    var ticking = null;
    function syncSliderValue(event, ui, idPrefix, div) {
        $('#'+idPrefix+'_low').val(ui.values[0]/div);
        $('#'+idPrefix+'_high').val(ui.values[1]/div);

        if (ticking) {
            clearTimeout(ticking);
        }
        ticking = setTimeout(submitRecoPreferences, 1000);
    }
    function submitRecoPreferences()
    {
        $('#recommendation_preferences').submit();
    }

    $("#slider_weight").slider({
      orientation: "horizontal",
      range: true,
      animate: true,
      values: [<?php echo $weightLow * 10; ?>, <?php echo $weightHigh * 10; ?>],
      min: 3,
      max: 50,
      slide: function( event, ui ) {
          syncSliderValue(event, ui, 'slider_weight', 10);
      }
    });
    $("#slider_price").slider({
      orientation: "horizontal",
      range: true,
      animate: true,
      values: [ <?php echo $budgetLow; ?>, <?php echo $budget; ?> ],
      max: 50000,
      min: 500,
      slide: function( event, ui ) {
          syncSliderValue(event, ui, 'slider_price', 1);
      }
    });
</script>
