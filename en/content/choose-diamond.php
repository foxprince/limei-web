<div class="subnavi_box">

<?php
if($crr_page=='guide'){
	include_once('content/sub_navi/guide.php');
}
?>

</div>


<div class="main_contentbox">
<?php 

?>





<div class="pagemenu" style="margin-top:15px;">
<ul>
<li <?php if((isset($_GET['c']) && $_GET['c']=='carat') || !isset($_GET)){ echo 'class="crr"';} ?> style="border-top-style:dotted;">
<h2><a href="guide.php?p=choose-diamond&c=carat" class="link-id-0 active">Carat</a></h2></li>


<li <?php if(isset($_GET['c']) && $_GET['c']=='color'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=choose-diamond&c=color" class="link-id-1">Color</a></h2></li>

<li <?php if(isset($_GET['c']) && $_GET['c']=='clarity'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=choose-diamond&c=clarity" class="link-id-2">Clarity</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='certificate'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=choose-diamond&c=certificate" class="link-id-3">Certificate</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='cut'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=choose-diamond&c=cut">Cut</a></h2></li>

<li <?php if(isset($_GET['c']) && $_GET['c']=='fluorescence'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=choose-diamond&c=fluorescence">Fluorescence</a></h2></li>
</ul>
</div>



<div id="content">
<?php
if(isset($_GET['c']) && $_GET['c']=='fluorescence'){
?>
<h1>Fluorescence</h1>
<div class="field-item even">


<img src="../images/site_elements/howtochoose/fluorescence.jpg" />


<p>Fluorescence refers to a diamond's tendency to emit a soft colored glow when subjected to ultraviolet light. Roughly 30% of diamonds fluoresce to some degree. <br />
Colorless (D-F) fluorescent diamonds sell at up to a 15% discount since the fluorescence is perceived as a defect. In fact, the visible effects of Faint to Medium fluorescence are perceptible only to a gemologist using a special UV light source. <br />
Because the fluorescent glow is usually blue (which is the complementary color to yellow) fluorescence can make diamonds of I-M color appear up to one grade whiter. By that, savings you might gain is to buy a Strong Blue Fluorescent diamond.</p>


</div>



<div class="field-item even">
</div>







<?php
}else if(isset($_GET['c']) && $_GET['c']=='color'){
?>
<h1>color</h1>

<div class="field-item even">
<img src="../images/site_elements/howtochoose/color.jpg" width="680" alt="何谓色级？" />
<p>The ideal diamond is clear to the point of being colorless. Each stone is color-graded to a precise scale from "D" (colorless) to "Z" (saturated).
</p>
<p>Many of these color distinctions are so subtle that they are invisible to the untrained eye; however, these distinctions make a very big difference in diamond quality and price.
</p>
<p>Fancy color diamonds have their own specially tailored standards of evaluation. 
</p>


<img src="../images/site_elements/howtochoose/color_2.jpg" width="680" alt="何谓色级？" />

</div>




<div class="field-item even">

</div>

<?php
}else if(isset($_GET['c']) && $_GET['c']=='clarity'){
?>

<h1>clarity</h1>



<div class="field-item even">
<img src="../images/site_elements/howtochoose/clarity.jpg" width="680" />

<p>Clarity measures the flawlessness of a diamond and correlates directly to its value. As this chart demonstrates, diamond clarity ratings range from flawless to heavily included.
<br />
Evaluating diamond clarity involves determining the number, size, relief, nature, and position of these characteristics, as well as how these affect the overall appearance of the stone. While no diamond is perfectly pure, the closer it comes, the higher its value.
<br />
The GIA Diamond Clarity Scale has 6 categories, some of which are divided, for a total of 11 specific grades.
</p>
<ul>
<li>Flawless (FL)<br />
No inclusions and no blemishes visible under 10x magnification
</li>
<li>Internally Flawless (IF)<br />
No inclusions visible under 10x magnification</li>
<li>Very, Very Slightly Included (VVS1 and VVS2)<br />
Inclusions so slight they are difficult for a skilled grader to see under 10x magnification
</li>
<li>Very Slightly Included (VS1 and VS2)<br />
Inclusions are observed with effort under 10x magnification, but can be characterized as minor
</li>
<li>Slightly Included<br />
Inclusions are noticeable under 10x magnification
</li>
<li>Included (I1, I2, and I3)<br />
Inclusions are obvious under 10x magnification, which may affect transparency and brilliance
</li>
</ul>
<p>Absolutely flawless diamonds are exceedingly rare. Many inclusions and blemishes are too tiny to be seen by anyone other than a trained diamond grader.</p>



</div>



<?php
}else if(isset($_GET['c']) && $_GET['c']=='certificate'){
?>


<h1>Certificate</h1>
<div class="field-item even">
<img src="../images/site_elements/howtochoose/HRD.jpg" alt="证书区别" /></div>

<p>A diamond certificate is issued following an unbiased and professional examination to authenticate a diamond's attributes. Among these, three certificates stand out the most: HRD (Hoge Raad Voor Diamant), GIA (Gemological Instutute of America), and IGI(International Gemological Institute).</p>

<p>For more than 500 years, the city of Antwerp has stood at the very centre of the diamond business, developing a level of skill, understanding and expertise that is without equal. The first diamond bourse in Antwerp, the 'Diamantclub van Antwerpen', was established in 1893. Nowadays, eighty percent of all rough diamonds in the world are handled in Antwerp, while fifty percent of all cut diamonds pass through Antwerp. It is no surprise that the highest international mark of approval for polished diamonds is the 'Cut in Antwerp' label.
</p>
<img src="../images/site_elements/howtochoose/HRD_1.jpg.jpg" alt="证书区别" />
<p>In 1976, the Diamond Lab of HRD Antwerp was founded to meet the growing demand for reliable diamond certificates or grading reports. It's the largest diamond lab in the Europe to conform to the rules for grading polished diamonds set by the International Diamond Council.
</p>
<img src="../images/site_elements/howtochoose/HRD_2.jpg" alt="证书区别" />
<p>You can check the HRD certificate from below website
 http://www.hrdantwerplink.be/ <br /></p>
<p>
In the USA, GIA is another large source of gemological knowledge. GIA transformed the way diamonds were bought and sold in the 1940s and 50's. GIA
creates a common language for diamonds, the diamond 4Cs, establishes the methods and best practices used to grade diamonds, and issues GIA Diamond Grading Report, as a way to consistently and accurately communicate grading results.
</p>
<p>You can check the GIA certificate from below website, http://www.gia.edu/report-check-landing</p>

<img src="../images/site_elements/howtochoose/GIA.png" alt="证书区别" />



<p>As HRD, IGI, International Gemological Institute, locates their laboratories in Antwerp and other branches in the world. Their history is related younger than HRD and GIA. IGI certificate still retains Europe's bespoke custom handmade laser lettering photos, fine jewelry photos. Today, high-end jewelry in many 
well-known brands such as Dior and Montblanc series can be to see IGI custom certificate, some stars like Paris Hilton also asked the IGI diamond for her pink table do certificate. 
</p>
<p>You can check the IGI certificate from below website, http://www.igiworldwide.com/search_report.aspx</p>




<p>No matter which certificate you choose, in fact, remember that the most critical of these is actually overall beauty of your diamond.</p>

<img src="../images/site_elements/howtochoose/igi_1.jpg" alt="证书区别" />

<div class="field-item even">

</div>



<?php
}else if(isset($_GET['c']) && $_GET['c']=='cut'){
?>

<h1>cut</h1>
<div class="field-item even"><img src="../images/site_elements/howtochoose/cut.png" width="680" alt="何谓切工？" />




</div>


<div class="field-item even">



<p>Cut, precise shape and positioning of a diamond's faces, could be the most important factor in determining the stone's beauty. 
</p>

<p>A diamond's cut is crucial to the stone's final beauty and value. And of all the diamond 4Cs, it is the most complex and technically difficult to analyze. Many diamond cutters choose to place the size of the diamond above its potential beauty, sacrificing the ideal balance of brilliance, dispersion and scintillation.<br />
How successfully a diamond interacts with light to create desirable visual effects such as:</p> 

<p><strong>Brightness:</strong> Internal and external white light reflected from a diamond</p>

<p><strong>Fire:</strong> The scattering of white light into all the colors of the rainbow</p>

<p><strong>Scintillation:</strong> The amount of sparkle a diamond produces, and the pattern of light and dark areas caused by reflections within the diamond</p>

<p>For standard round brilliant diamonds in the D-to-Z diamond color range contains 5 grades ranging from Excellent to Poor.</p>


</div>





<?php
}else if(isset($_GET['c']) && $_GET['c']=='polish'){
?>


<h1>何谓抛光？</h1>

<div class="field-item even"><p>如果您想把利美珠宝改造成您所期望的、或受赠人所期望的形状外观，可以联系我们，与我们的珠宝工艺师具体商讨改款的可能性。</p>
</div>


<?php
}else{
?>
<h1>Carat</h1>
<div class="field-item even"></div>



<div class="field-item even">

<img src="../images/site_elements/howtochoose/carat_1.gif" width="341" style="width:341px;" />




<p>"Carat" denotes the weight of a diamond. One carat equals 0.20 grams. However, carat weight does not determine a diamond's value. For example, two one-carat stones can vary widely in price when clarity, color, cut and presence are taken into consideration.
</p>

<img src="../images/site_elements/howtochoose/carat_3.png" style="width:400px;" />
</div>




<?php
}
?>



</div>
</div>
<script type="text/javascript">
$('document').ready(function(){
	$('a#choose-diamondbtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>