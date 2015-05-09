<?php 
  //Create field variables 
  $fields = myfunctionlib_get_fields($content);  
  //extract($fields);  
  $animal_specifications = array('name_means', 
                            'period', 
                            'order', 
                            'suborder',
                            'diet',
                            'length',
                            'weight',
                            'discoverer',
                           ); 
  $product_informations = array('product_no', 
                            'age_grade', 
                            'measurements', 
                            'piece_count',                            
                          );                       
   // kpr($fields); die();
?>
<div id="productTitleDetailPageDino">
  <h4>Dinosaurs</h4>
  <h2>Pachyrhinosaurus</h2>
</div>
<!-- <div class="productTitleDetailPageThumbContainer">
  <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php print_theme_path('images/AN4000-pr-b-PACHY.png'); ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php print_theme_path('images/AN4000-pr-b-PACHY.png'); ?>',1)"/></a></div>
  <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php print_theme_path('images/AN4000-pkg-PACHY.png'); ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php print_theme_path('images/AN4000-pkg-PACHY.png'); ?>',1)"/></a></div>
</div> -->

<!--<div class="productTitleDetailPageThumbTwo"></div>-->
<div id="productPictureMapContainer" style="background:ivory url(<?php echo $fields['habitat_map']['url'][0]; ?>) no-repeat right; background-size:contain;">
  <div id="productPictureInnerContainer">
    <div id="magnifyingGlassIcon">
      <img src="<?php print_theme_path('images/magnifyingGlassIcon-TEMP.png'); ?>" />
    </div>
    <span>
      <img src="<?php echo $fields['product_picture']['url'][0]; ?>" name="stage" id="stage" />
    </span>
  </div>
</div>
<div class="productTitleDetailPageThumbContainerUnder">
  <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?>
  <?php //echo $product_picture_url; die(); ?>
    <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $product_picture_url; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $product_picture_url; ?>',1)"/></a></div>
  <?php endforeach; ?>
<!--   <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $fields['product_picture']['url']; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $fields['product_picture']['url']; ?>',1)"/></a></div>
  <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php print_theme_path('images/AN4000-pr-b-PACHY.png'); ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php print_theme_path('images/AN4000-pr-b-PACHY.png'); ?>',1)"/></a></div>
  <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php print_theme_path('images/AN4000-pkg-PACHY.png'); ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php print_theme_path('images/AN4000-pkg-PACHY.png'); ?>',1)"/></a></div>
 -->
</div>
<div id="productDescriptionContainer">
  <!--<div id="productSpecsFactsWrapper">-->
  <div class="productSpecsContainer">
    <ul>      
      <?php foreach ($animal_specifications as $value): ?>
       <li><span class="listSubTitleSpan"><?php echo $fields[$value]['label']; ?>:</span> <?php echo $fields[$value]['value']; ?></li>  
      <?php endforeach; ?>
      <li class="habitat"><span class="listSubTitleSpan"><?php echo $fields['natural_habitat']['label']; ?>--bitat:</span> <?php echo $fields['natural_habitat']['value']; ?></li>
    </ul>
    <div id="productRetailInfoContainer">
      <ul>        
        <?php foreach ($product_informations as $value): ?>
         <li><span><?php echo $fields[$value]['label']; ?>:</span> <?php echo $fields[$value]['value']; ?></li>  
        <?php endforeach; ?>
        <li><a href="#">Download the Instructions Sheet</a></li>
      </ul>
    </div>
  </div>
  <div id="productFactsContainer">
    <div class="productHabitatContainer"><span class="listSubTitleSpan">Natural Habitat</span>
      <ol>
        <li><span>North America</span></li>
      </ol>
    </div>
        <?php echo $fields['descriptive_text']['value']; ?>
    </div>
</div>
<div id="crossSellingContainer">
  <div class="crossSellTitleRuler"></div>
  <div class="crossSellTitle">ITEMS FROM THE SAME COLLECTION</div>
  <div class="crossSellTitleRuler"></div>
  <div class="crossSellingThumbContainer"> 
    <div class="crossSellingThumb ImageWrapper BackgroundS ContentWrapperH chrome-fix">
      <a href="http://www.battatco.com">
        <img class="img-responsive" src="<?php print_theme_path('images/AN4000-pr-b-PACHY.png'); ?>" alt="">
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
        <img class="img-responsive" src="<?php print_theme_path('images/AN4001-pr-CRYOLO.png'); ?>" alt="">
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
        <img class="img-responsive" src="<?php print_theme_path('images/AN4002-pr-b-DACENTRURUS.png'); ?>" alt="">
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
        <img class="img-responsive" src="<?php print_theme_path('images/AN4003-pr-NANSHIU.png'); ?>" alt="">
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