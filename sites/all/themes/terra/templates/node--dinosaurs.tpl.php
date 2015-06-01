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
  <h4><?php echo str_replace('_', ' ', $type) ; ?></h4>
  <h2><?php echo $title; ?></h2>
</div>
<div class="productTitleDetailPageThumbContainer">
  <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?>
      <?php $picture_url = $product_picture_url['picture_url'];  $thumbnail_url = $product_picture_url['thumbnail_url']; ?>  
      <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $thumbnail_url; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $picture_url; ?>',1)"/></a></div>
  <?php endforeach; ?>
</div>

<div id="productPictureMapContainer" class="row">
  <div id="productPictureInnerContainer" class="col-xs-12 col-lg-6">  
      <img src="<?php echo $fields['product_picture']['url'][0]['picture_url']; ?>" name="stage" id="stage" />
  </div>
  <div class="col-xs-12 col-lg-6">
    <div class="productTitleDetailPageThumbContainerUnder">
      <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?>
          <?php $picture_url = $product_picture_url['picture_url'];  $thumbnail_url = $product_picture_url['thumbnail_url']; ?>  
          <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $thumbnail_url; ?>" width="80" height="80" onClick="MM_swapImage('stage','','<?php echo $picture_url; ?>',1)"/></a></div>
      <?php endforeach; ?>
    </div> 
    
    <p>1 Wooden Barn, 1 Ladder, 2 Food Troughs, 4 Bales of Hay, 1 Hayloft Pulley Tray, 1 Removable Loft, 10 Fence
    </p>    
    
    <div id="productRetailInfoContainer">
      <ul>        
        <?php foreach ($product_informations as $value): ?>
         <li><span><?php echo $fields[$value]['label']; ?>:</span> <?php echo $fields[$value]['value']; ?></li>  
        <?php endforeach; ?>
        <li><a href="#">Download the Instructions Sheet</a></li>
      </ul>
    </div>
      
    </div>
</div>
<div id="productDescriptionContainer">
  <h3>DESCRIPTION</h3>  
  <div id="description" class="drop-cap">
    <?php echo $fields['descriptive_text']['value']; ?>
  </div> 
  <h3>CHARACTERISTICS</h3>
  <div class="productSpecsContainer">
    <table class="table">      
      <?php foreach ($animal_specifications as $value): ?>
        <tr>
          <td class="listTitle"><span class="listSubTitleSpan"><?php echo $fields[$value]['label']; ?></span> </td>
          <td class="listValue"><?php echo $fields[$value]['value']; ?></td>
        </tr>       
      <?php endforeach; ?>      
    </table>    
  </div>
  <div id="productFactsContainer">
    <div class="productHabitatContainer">
    <span class="listSubTitleSpan"><?php echo $fields['natural_habitat']['label']; ?></span>
      <ol>
        <?php foreach($fields['natural_habitat']['value'] as $natural_habitat_value): ?>
          <li><span><?php echo $natural_habitat_value['value']; ?></span></li>
        <?php endforeach; ?>
      </ol>
    </div>       
  </div>
</div>
<div id="productPictureMapContainer2">
  <img src="<?php echo $fields['habitat_map']['url'][0]['picture_url']; ?>" style="width:100%;">
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