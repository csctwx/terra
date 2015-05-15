<?php 
  //Create field variables 
  $fields = myfunctionlib_get_fields($content);  

  $product_informations = array('product_no', 
                            'age_grade', 
                            'measurements', 
                            'piece_count',                            
                          );                          
?>
<!-- InstanceBeginEditable name="mainContainer" -->
  
 <div id="productTitleDetailPage">
     <h4><?php echo str_replace('_', ' ', $type) ; ?></h4>
     <h2><?php echo $title; ?></h2>
 </div>
 <div class="productTitleDetailPageThumbContainer">
   <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?> 
    <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $product_picture_url; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $product_picture_url; ?>',1)"/></a></div>
   <?php endforeach; ?>
</div>        
<div id="productPictureFantasyMapContainer" style="background:ivory url(<?php echo $fields['habitat_map']['url'][0]; ?>) no-repeat right; background-size:contain;">
   <div id="productPictureInnerContainer">
     <div id="magnifyingGlassIcon">
          <img src="<?php echo myfunctionlib_theme_path('images/magnifyingGlassIcon-TEMP.png'); ?>" />
     </div>
     <span>
        <img src="<?php echo $fields['product_picture']['url'][0]; ?>" name="stage" id="stage" />
    </span>
</div>
</div>
<div class="productTitleDetailPageThumbContainerUnder">
    <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?> 
        <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $product_picture_url; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $product_picture_url; ?>',1)"/></a></div>
    <?php endforeach; ?>
</div>
<div id="productDescriptionContainer">
   <!--<div id="productSpecsFactsWrapper">-->
   <div class="productFantasySpecsContainer"  style="display:none;">
       <ul>
         <li><span>Species:</span> Mammal</li>
         <li><span>Avg Life Span:</span> 20 years</li>
         <li><span>Size:</span> 4-5 ft (1.2-1.5m)</li>
         <li><span>Weight:</span> 300 lbs (136kg)</li>
         <li><span>Diet:</span> Omnivore</li>
         <li><span>Group Name:</span> Solitary</li>
         <li><span>Protection Status:</span> Endangered</li>
         <li class="habitat"><span>Natural Habitat:</span> North America, Africa</li>
     </ul>
     <div id="productRetailInfoContainer" style="border:none; padding:0; margin:0;">
        <ul>
            <li>Product #: AN6001</li>
            <li>Measurements: 3" x 4"</li>
        </ul>
    </div>

</div>
<div id="productStoryContainer">
    <div class="productHabitatContainer"><span class="listSubTitleSpan">Antuu's Story</span>
     <ol style="display:none;">
         <li><span>North America</span></li>
         <li><span>Africa</span></li>
     </ol>
 </div>
<?php echo $fields['descriptive_text']['value']; ?>
 <div id="productFantasyRetailInfoContainer">
    <ul>
        <?php foreach ($product_informations as $value): ?>
         <li><span><?php echo $fields[$value]['label']; ?>:</span> <?php echo $fields[$value]['value']; ?></li>  
        <?php endforeach; ?>
        <li><a href="#">Download the Instructions Sheet</a></li>
    </ul>
</div>
</div> 
<!--</div>closing of Wrapper-->
</div>
<div id="crossSellingContainer">
  <div class="crossSellTitleRuler"></div>
  <div class="crossSellTitle">ITEMS FROM THE SAME COLLECTION</div>
  <div class="crossSellTitleRuler"></div>
  <div class="crossSellingThumbContainer"> 
    <div class="crossSellingThumb ImageWrapper BackgroundS ContentWrapperH chrome-fix">
      <a href="http://www.battatco.com">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/AN4000-pr-b-PACHY.png'); ?>" alt="">
        <div class="PStyleH ContentH TOrange">
          <div class="Content thumbName">
            <h2>
              Pachyrhinosaurus
            </h2>
            <p>
              AN4000
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="crossSellingThumb ImageWrapper BackgroundS ContentWrapperH chrome-fix">
      <a href="http://www.battatco.com">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/AN4001-pr-CRYOLO.png'); ?>" alt="">
        <div class="PStyleH ContentH TOrange">
          <div class="Content thumbName">
            <h2>
              Cryolophosaurus
            </h2>
            <p>
              AN4001
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="crossSellingThumb ImageWrapper BackgroundS ContentWrapperH chrome-fix">
      <a href="http://www.battatco.com">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/AN4002-pr-b-DACENTRURUS.png'); ?>" alt="">
        <div class="PStyleH ContentH TOrange">
          <div class="Content thumbName">
            <h2>
              Dacentrurus
            </h2>
            <p>
              AN4002
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="crossSellingThumb ImageWrapper BackgroundS ContentWrapperH chrome-fix">
      <a href="http://www.battatco.com">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/AN4003-pr-NANSHIU.png'); ?>" alt="">
        <div class="PStyleH ContentH TOrange">
          <div class="Content thumbName">
            <h2>
              Nanshiungosaurusus
            </h2>
            <p>
              AN4003
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- InstanceEndEditable -->