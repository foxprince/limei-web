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
<li <?php if((isset($_GET['c']) && $_GET['c']=='term') || !isset($_GET)){ echo 'class="crr"';} ?> style="border-top-style:dotted;">
<h2><a href="guide.php?p=service&c=term" class="link-id-0 active">Price</a></h2></li>
<!--
<li <?php if((isset($_GET['c']) && $_GET['c']=='glazing')){ echo 'class="crr"';} ?>>
<h2><a href="guide.php?p=service&c=glazing" class="link-id-0 active">何谓上光服务？</a></h2></li>
-->

<li <?php if(isset($_GET['c']) && $_GET['c']=='polishing'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=polishing" class="link-id-1">Polishing</a></h2></li>

<li <?php if(isset($_GET['c']) && $_GET['c']=='resize'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=resize" class="link-id-2">Re-sizing</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='repair'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=repair" class="link-id-3">Restoration</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='pairing'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=pairing">Reproduction/Pairing</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='graving'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=graving" class="link-id-5">Engraving</a></h2></li>
<li <?php if(isset($_GET['c']) && $_GET['c']=='facelift'){ echo 'class="crr"';} ?>><h2><a href="guide.php?p=service&c=facelift">Transformation</a></h2></li>
</ul>
</div>



<div id="content">
<?php
if(isset($_GET['c']) && $_GET['c']=='polishing'){
?>
<h1>The Polishing Service</h1>
<div class="field-item even">
<img src="../images/site_elements/dsc_0280.jpg" width="680" alt="何谓抛光服务？" />
</div>

<div class="field-item even"><p>The Polishing Service allows your piece of Lumia Diamond to rediscover its original shine and brilliance, without altering its shape. Nevertheless, given that the removal of a fine layer of metal is involved, We recommends you do not have this service carried out more than twice in the lifetime of a piece of jewellery made of white or yellow gold. Moreover, polishing cannot remove any scratches that are too deep. Please also note that it is technically impossible to polish white gold so as to give it a black finish.
</p>
<p>Performed by a our specialist polisher, the Polishing Service includes the following elements:</p>
<ul>
<li>The piece of jewellery is diagnosed;</li>
<li>The piece of jewellery is polished, using brushes saturated with three different abrasive pastes, until a dazzling surface is obtained;</li>
<li>The piece of jewellery is cleaned, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.</li>
<li>Rhodium plating: to reinforce the whiteness and brilliance of white gold, it is sometimes covered with a fine layer of rhodium, a rare precious metal of the platinum family.</li>
</ul>
<p>This operation consists of the following stages:</p>
<ul>
<li>Before polishing, the remaining layer of rhodium is removed so as to obtain a naked surface to which the new layer can be applied;</li>
<li>After polishing, the jewel is immersed in a rhodium bath to deposit a new fine layer of metal on the surface of the white gold.</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.</li>
</ul>
</div>

<?php
}else if(isset($_GET['c']) && $_GET['c']=='resize'){
?>
<h1>The Re-sizing Service</h1>

<div class="field-item even">
<img src="../images/site_elements/dsc_0129.jpg" width="680" alt="何谓尺寸修改服务？" />
</div>


<div class="field-item even">
<p>Performed on a bracelet, necklace or ring, this service consists of increasing or reducing the size of the item as much as possible. It involves a series of meticulous and delicate procedures.
</p>
<p>Performed by a our specialist jeweller, the service includes the following elements:</p>
<ul>
<li>The diagnosis;</li>
<li>Adjustment of the size:</li>
<li>For rings, the jeweller opens up the body of the ring using a miniature saw. He removes or adds a piece of metal, and then, using tweezers, reassembles the two separated parts.</li>
<li>In the case of a chain or a piece of jewellery with links, the adjustment is performed by removing or adding links before reassembling the piece.</li>
<li>Polishing, using brushes saturated with three different abrasive pastes, until a dazzling surface is obtained;</li>
<li>Cleaning the piece of jewellery, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.</li>
<li>Rhodium plating: to reinforce the whiteness and brilliance of white gold, it is sometimes covered with a fine layer of rhodium, a rare precious metal of the platinum family.</li>
</ul>
<p>This process consists of the following stages:</p>
<ul>
<li>Before polishing, the remaining layer of rhodium is removed so as to obtain a naked surface to which the new layer can be applied;</li>
<li>After polishing, the jewellery is immersed in a rhodium bath to deposit a new fine layer of metal on the surface of the white gold.</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.</li>
</ul>
<p>Please note that during the polishing process a fine layer of metal is removed. This is why we recommend you do not have this service carried out more than twice in the lifetime of a piece of jewellery made of white or yellow gold. It should also be noted that certain deep scratches cannot be removed. Please also note that it is technically impossible to polish white gold so as to give it a black finish.</p>
</div>



<?php
}else if(isset($_GET['c']) && $_GET['c']=='repair'){
?>

<h1>The Restoration Service</h1>



<div class="field-item even"><p>The Restoration Service allows an extremely damaged piece of Lumia Diamond to regain its aesthetic beauty and original appearance.</p>
<p>Performed by a our specialist jeweller, the Restoration Service includes the following elements:</p>
<ul>
<li>The diagnosis;</li>
<li>The preparation of an estimate.</li>
</ul>
<p>After the estimate has been accepted:</p>
<ul>
<li>The restoration process is carried out in a succession of stages:
<ul>
<li>Soldering: this involves fitting together two parts of a piece of jewellery with a piece of metal that has been heated to a very high temperature using a blowtorch; the jewel is then immersed in an acid bath so as to remove any trace of oxidation.</li>
<li>Reshaping: the piece of jewellery's original shape is restored using a boxwood mallet.</li>
</ul>
</li>
<li>Resetting the stones: this extremely delicate stage sometimes involves rebuilding the prongs and the mounting so as to create a secure setting.
<ul>
<li>Polishing, using brushes saturated with three different abrasive pastes, until a dazzling surface is obtained;</li>
<li>Cleaning of the piece of jewellery, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.</li>
<li>Rhodium plating: to reinforce the whiteness and brilliance of white gold, it is sometimes covered with a fine layer of rhodium, a rare precious metal of the platinum family.</li>
</ul>
</li>
</ul>
<p>This procedure consists of the following stages:</p>
<ul>
<li>Before polishing, the remaining layer of rhodium is removed so as to obtain a naked surface to which the new layer can be applied;</li>
<li>After polishing, the jewellery is immersed in a rhodium bath to deposit a new fine layer of metal on the surface of the white gold.</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.</li>
</ul>
<p>Please note that during the polishing process a fine layer of metal is removed. This is why we recommend you do not have this service carried out more than twice in the lifetime of a piece of jewellery made of white or yellow gold. It should also be noted that certain deep scratches cannot be removed. Please also note that it is technically impossible to polish white gold so as to give it a black finish.
</p>
</div>



<?php
}else if(isset($_GET['c']) && $_GET['c']=='pairing'){
?>


<h1>The Reproduction and Pairing Service</h1>
<div class="field-item even">
<img src="../images/site_elements/n8050600_dia_0.jpg" style="float:right; margin: 0 0 15px 15px;" height="300" alt="何谓重制/配对服务？" /></div>


<div class="field-item even">
<p>The Reproduction & Pairing Service is recommended when it is technically impossible to adjust the size of a piece of jewellery or to repair it, or if one of the elements of a pair has been lost.</p>
<p>Performed by a Lumia specialist jeweller, the Reproduction & Pairing Service includes the following:
</p>
<ul>
<li>The diagnosis;
</li>
<li>Reproduction: this varies according to the nature of the piece of jewellery and how it was originally made. In order to reproduce the model of your piece of jewellery as faithfully as possible, the Lumia jeweller will apply the following strict procedure:</li>
<li>The archives of the Lumia will be consulted to find the original design of the model and the corresponding mould;
<ul>
<li>The metal from the piece of jewellery will be cast in the mould;
</li>
<li>The different parts of the piece of jewellery will be assembled by soldering;
</li>
<li>The stones will be set;
</li>
<li>The individual number and Lumia signature, etc., will be engraved;
</li>
</ul>
</li>
<li>The piece of jewellery will be polished, using brushes saturated with three different abrasive pastes, until a dazzling surface is obtained;
</li>
<li>The piece of jewellery will be cleaned, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.
</li>
<li>Rhodium plating: to reinforce the whiteness and brilliance of white gold, it is sometimes covered with a fine layer of rhodium, a rare precious metal of the platinum family. This operation consists of the following stages:
</li>
<li>Before polishing, the remaining layer of rhodium is removed so as to obtain a naked surface to which the new layer can be applied;
</li>
<li>After polishing, the immersion of the piece of jewellery in a rhodium bath to deposit a new fine layer of metal on the surface of the white gold.
</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.
</li>
</ul>
<p>Please note that during the polishing process a fine layer of metal is removed. This is why we recommend you not to have this service carried out more than twice in the lifetime of a piece of jewellery made of white or yellow gold. It should also be noted that certain deep scratches cannot be removed. Please also note that it is technically impossible to polish white gold so as to give it a black finish.
</p>
</div>



<?php
}else if(isset($_GET['c']) && $_GET['c']=='graving'){
?>

<h1>The Engraving Service</h1>
<div class="field-item even"><img src="../images/site_elements/dsc_0051.jpg" width="680" alt="何谓刻字服务？" /></div>


<div class="field-item even">
<p>The Engraving Service enables you to personalise your Lumia creation by engraving (subject to technical constraints and the space available) either a name, phrase or date (in a range of different languages) or a symbol or design on your creation.
</p>
<p>Engraving is a complimentary service offered up to three months following purchase, on presentation of the Lumia certificate of authenticity.</p>
<p>Performed by a our jeweller and engraver, the service includes the following elements:</p>
<ul>
<li>The diagnosis; </li>
<li>The engraving process: the opportunities for engraving a permanent engraving options in the metal will depend on the available surface area on the jewel. Engraving is traditionally performed using a graver, a tool with which the engraver cuts into the metal. Most engravings are nowadays performed by laser since this technique offers a higher degree of accuracy.</li>
<li>The piece of jewellery is cleaned, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.</li>
</ul>
<p>Note, an engraving may be removed or replaced by another.</p>
</div>





<?php
}else if(isset($_GET['c']) && $_GET['c']=='facelift'){
?>


<h1>The Transformation Service</h1>

<div class="field-item even"><p>If you are the owner of a Lumia creation that you wish to adapt so as to better match your requirements or those of the person the jewel is intended for, Lumia jewellers are at your disposal in our boutiques to examine the feasibility of your request.
</p>
</div>


<?php
}else if(isset($_GET['c']) && $_GET['c']=='glazing'){
?>
<h1>The Shinning Service</h1>
<div class="field-item even"><img src="../images/site_elements/dsc_0287.jpg" width="680" alt="何谓上光服务？" /></div>



<div class="field-item even"><p>This service makes it possible to give a piece of Lumia Diamond back its sparkling appearance if it has become dull or has superficial scratches. </p>
<p>Performed in a Lumia Diamond by a our specialist, this service includes the following elements:</p>
<ul>
<li>The piece of jewellery is diagnosed;
</li>
<li>The metal's sparkle is enhanced using a felt disc and shining paste. If this process reveals slight scratches, these can only then be removed by polishing.
</li>
<li>The piece of jewellery is cleaned, particularly its less accessible parts, by immersion in an ultrasonic tank filled with lukewarm soapy water. All jewellery creations may be subjected to ultrasound treatment, except for those containing emeralds, pearls and certain other gems that are considered too delicate.
</li>
<li>A technical and aesthetic inspection is carried out in accordance with Lumia quality criteria.</li>
</ul>
</div>




<?php
}else{
?>
<h1>The after-sale services:</h1>
<div class="field-item even"><img src="../images/site_elements/dsc_0287.jpg" width="680" alt="何谓上光服务？" /></div>



<div class="field-item even">
<ol>
<li>Custom Jerwerlly, started from € 50 excluding the price of settings, which calculates by the exactly weight of the setting.
</li>
<li>Shinning Service, free of charge.</li>
<li>Polishing Service, free of charge.</li>
<li>Re-sizing Service, first time for free after purchasing.
</li>
<li>Reproduction and Pairing Service, calculates after diagnosis.
</li>
<li>Engraving service, € 50.
</li>
<li>Restoration Service, started from € 50 excluding the price of new settings. First, Lumia will calculate the price of the old setting. Deduct 10% off for the rate of depreciation. Then make up for the new setting, price calculates by the exactly weight.
</li>
</ol>
</div>
<?php
}
?>

</div>



</div>
<script type="text/javascript">
$('document').ready(function(){
	$('a#servicebtn').css({'border-bottom-style':'solid',
	'border-width':'2px'});
});
</script>