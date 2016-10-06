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
</script>
<title>利美钻石 - 精品钻石</title>
</head>
<body>


<div  class="container-fluid maxcontainer" >
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<!-- ****************************加载header***************************** -->
<?php
include_once('includes/header.php');
?>
</div>
</div>
<!-- ****************************加载body***************************** -->

<div class="row bodycontent-1">
<?php

if (isset($_GET['p'])) {
    $p=$_GET['p'];
} else {
    $p='';
}

switch($p){
    case 'all':
    $the_page='content/diamonds-all.php';
    break;

    case 'color':
    $the_page='content/diamonds-color.php';
    break;

    case 'steps':
    $the_page='content/steps.php';
    break;

    case 'contact':
    $the_page='content/contact.php';
    break;

    case 'buyeasy':
    $the_page='content/buyeasy.php';
    break;

    default:
        if ($budget) {
            $the_page='content/diamonds-all.php';
        }
        break;
}
?>

<fieldset class="noborder">
    <!--<legend>高级搜索</legend>-->
    <div>
    <?php
    if (isset($the_page)) {
        include_once($the_page);
    }
    ?>
    </div>
</fieldset>



<div id="wechatscanbox">
<div id="wechatscanboxinner">
<span id="wechatscanboxclosebtn" onClick="closeWechatbox()">X</span>
<p>请加微信询问价格</p>
<p><img style="width:128px;" src="http://lumiagem.com/images/site_elements/wechat_scan.jpg"></p>
</div>
</div>
</div>

<!-- ****************************加载footer***************************** -->

<div class="row div-m">
<div class="col-xs-12 col-sm-12 col-md-12">
<?php
include_once('includes/footer.php');
?>
</div>
</div>
<div id="bgbox">
<div id="bginner">
<img style="width:100%;" src="../images/background_image9.jpg" />
</div>
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
