<?php

include_once(__DIR__.'/params.php');

$crr_page='diamonds';
include_once('includes/header_ele.php');
?>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="../assets/css/style.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!--<style type="text/css"></style>"0729注释"-->
<link rel="stylesheet" href="../styles/diamonds.css"/>
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



<?php
include_once('includes/header.php');
?>


<div id="bodycontent">

    <fieldset class="noborder">
        <legend style="display:none;font-weight: bold;">
            <a id="diamond-recommendation-trigger" href="#diamond-recommendation-form">推荐</a>
        </legend>
        <div style="display:none">
            <div id="diamond-recommendation-form">
                <div class="diamond-recommendation-form-title">
                    <div onClick="$.fancybox.close();">x</div>
                </div>
                <div class="diamond-recommendation-form-body">
                <p>
                    <b>请输入您的预算，我们自动推荐钻石给您！</b>
                </p>
                <form method="post">
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
        <?php
        if ($budget) {
            $config = require_once(__DIR__.'/../src/Repositories/DiamondPdoConfig.php');
            require_once(__DIR__.'/../src/Repositories/DiamondPdoRepository.php');
            require_once(__DIR__.'/../src/Utils.php');

            $repo = new DiamondPdoRepository(new PDO(
                'mysql:host='.$config['host'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password']
            ));
            $repo->setCurrency($currency)
                ->setBudget($budget)
                ->setBudgetLow($budgetLow)
                ->setWeightHigh($weightHigh)
                ->setWeightLow($weightLow);
            $excludes = array();
        ?>
        <div class="diamond-recommendation-wrapper main_contentbox">
            <table width="100%">
                <tr>
                    <td>
                        <div class="diamond-recommendation-title">
                          <span>完美精品</span>
                        </div>
                        <div>
                        <?php
                        if ($diam = $repo->getPerfect()) {
                            echo '<a href="viewdiamond.php?diamondid='.$diam['id'].'" target="_blank">';
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                  </div>';
                            echo $diam['carat'].' ct<br/>';
                            echo '<small>颜色'.$diam['color'].' 净度'.$diam['clarity'].' 切工'.$diam['cut_grade'].'</small><br/>';
                            echo Utils::getCurrencySymbol($currency).Utils::getPriceByCarat($diam['raw_price_retail'], $diam['carat'], $repo, $currency).'<br/>';
                            echo '</a>';
                            $excludes []= $diam['id'];
                        } else {
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                    </div>&#160;<br/>&#160;';
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <div class="diamond-recommendation-title">
                          <span>高性价比</span>
                        </div>
                        <div>
                        <?php
                        if ($diam = $repo->getPerformancePriceRatio()) {
                            echo '<a href="viewdiamond.php?diamondid='.$diam['id'].'" target="_blank">';
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                  </div>';
                            echo $diam['carat'].' ct<br/>';
                            echo '<small>颜色'.$diam['color'].' 净度'.$diam['clarity'].' 切工'.$diam['cut_grade'].'</small><br/>';
                            echo Utils::getCurrencySymbol($currency).Utils::getPriceByCarat($diam['raw_price_retail'], $diam['carat'], $repo, $currency);
                            echo '</a>';
                            $excludes []= $diam['id'];
                        } else {
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                    </div>&#160;<br/>&#160;';
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <div class="diamond-recommendation-title">
                          <span>无敌大钻</span>
                        </div>
                        <div>
                        <?php
                        if ($diam = $repo->getUnbeatableBig()) {
                            echo '<a href="viewdiamond.php?diamondid='.$diam['id'].'" target="_blank">';
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/dazuan.png"/>
                                  </div>';
                            echo $diam['carat'].' ct<br/>';
                            echo '<small>颜色'.$diam['color'].' 净度'.$diam['clarity'].' 切工'.$diam['cut_grade'].'</small>';
                            echo Utils::getCurrencySymbol($currency).Utils::getPriceByCarat($diam['raw_price_retail'], $diam['carat'], $repo, $currency);
                            echo '</a>';
                            $excludes []= $diam['id'];
                        } else {
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                    </div>&#160;<br/>&#160;';
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <div class="diamond-recommendation-title">
                          <span>实惠优选</span>
                        </div>
                        <div>
                        <?php
                        if ($diam = $repo->getCheap()) {
                            echo '<a href="viewdiamond.php?diamondid='.$diam['id'].'" target="_blank">';
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                  </div>';
                            echo $diam['carat'].' ct<br/>';
                            echo '<small>颜色'.$diam['color'].' 净度'.$diam['clarity'].' 切工'.$diam['cut_grade'].'</small>';
                            echo Utils::getCurrencySymbol($currency).Utils::getPriceByCarat($diam['raw_price_retail'], $diam['carat'], $repo, $currency);
                            echo '</a>';
                            $excludes []= $diam['id'];
                        } else {
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                    </div>&#160;<br/>&#160;';
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <div class="diamond-recommendation-title">
                          <span>随机惊喜</span>
                        </div>
                        <div>
                        <?php
                        if ($diam = $repo->getRandom($excludes)) {
                            echo '<a href="viewdiamond.php?diamondid='.$diam['id'].'" target="_blank">';
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                  </div>';
                            echo $diam['carat'].' ct<br/>';
                            echo '<small>颜色'.$diam['color'].' 净度'.$diam['clarity'].' 切工'.$diam['cut_grade'].'</small>';
                            echo Utils::getCurrencySymbol($currency).Utils::getPriceByCarat($diam['raw_price_retail'], $diam['carat'], $repo, $currency);
                            echo '</a>';
                        } else {
                            echo '<div class="diamond-recommendation-thumb">
                                    <img src="../images/recommendation/small.png"/>
                                    </div>&#160;<br/>&#160;';
                        }
                        ?>
                        </div>
                    </td>
                </tr>
            </table>

            <br />
            <hr />

            <form method="GET" id="recommendation_preferences">
                <table class="diamond-slider-container">
                    <tr>
                        <td width="50%">
                            <div class="slider-label">> &#160; 钻重</div>
                            <div id="slider_weight" class="slider"></div>
                            <div class="slider-input-container">
                                <input type="text" id="slider_weight_low" class="slider-value-low" name="weightLow" value="<?php echo $weightLow; ?>" />
                                <input type="text" id="slider_weight_high" class="slider-value-high" name="weightHigh" value="<?php echo $weightHigh; ?>" />
                            </div>
                        </td>
                        <td width="50%">
                            <div class="slider-label">> &#160; 价格 (<?php echo Utils::getCurrencySymbol($currency); ?>)</div>
                            <div id="slider_price" class="slider"></div>
                            <div class="slider-input-container">
                                <input type="text" id="slider_price_low" class="slider-value-low" name="budgetLow" value="<?php echo $budgetLow; ?>" />
                                <input type="text" id="slider_price_high" class="slider-value-high" name="budget" value="<?php echo $budget; ?>" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form>


            <div id="diamond-recommendation-form1" style="padding: 0 200px 0 200px">
                <form method="post">
                    <div>
                    <table width="100%">
                        <tr>
                            <td>
                                <input type="text" name="budget"
                                    value="<?php if ($budget) {echo $budget;} ?>"
                                />

                            </td>
                            <td>
                                <select name="currency" style="width:40px">
                                    <option value="EUR" <?php if ($currency == 'EUR') { ?>selected="selected"<?php } ?>>&#8364;</option>
                                    <option value="CNY" <?php if ($currency == 'CNY') { ?>selected="selected"<?php } ?>>&#165;</option>
                                    <option value="USD" <?php if ($currency == 'USD') { ?>selected="selected"<?php } ?>>&#36;</option>
                                    <option value="GBP" <?php if ($currency == 'GBP') { ?>selected="selected"<?php } ?>>&#163;</option>
                                </select>
                            </td>
                            <td style="text-align: right;">
                                <button type="submit" class="btn btn-danger" style="white-space:nowrap">重新推荐</button>
                            </td>
                            <td width="30px"></td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>

        </div>
        <?php
        }
        ?>
    </fieldset>

<fieldset class="noborder">
    <legend>高级搜索</legend>
</fieldset>



<div id="wechatscanbox">
<div id="wechatscanboxinner">
<span id="wechatscanboxclosebtn" onClick="closeWechatbox()">X</span>
<p>请加微信询问价格</p>
<p><img style="width:128px;" src="http://lumiagem.com/images/site_elements/wechat_scan.jpg"></p>
</div>
</div>


</div>




<?php
include_once('includes/footer.php');
?>


<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image9.jpg" />
</div>
</div>

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

</body>
</html>
