<?php 
  //Create field variables 
  $fields = myfunctionlib_get_fields($content);  
  
  //extract($fields);  
  $animal_specifications = array('diet',
                            'size',
                            'weight', 
                            'species',                             
                            'average_life_span',
                            'group_name',
                            'protection_status',
                           ); 
  $product_informations = array('product_no', 
                            'age_grade', 
                            'measurements', 
                            'piece_count',                            
                          );  

 $other_products = myfunctionlib_get_other_products($type, $node->nid);                  
?>               
?>
<div id="productTitleDetailPageDino">
  <h4><?php echo str_replace('_', ' ', $type) ; ?></h4>
  <h2><?php echo $title; ?></h2>
</div>
<div class="productTitleDetailPageThumbContainer">
  <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?>
      <?php $picture_url = $product_picture_url['picture_url'];  $thumbnail_url = $product_picture_url['thumbnail_url']; ?>  
      <div class="productTitleDetailPageThumb"><a href="#"><img src="<?php echo $thumbnail_url; ?>" onClick="MM_swapImage('stage','','<?php echo $picture_url; ?>',1)"/></a></div>
  <?php endforeach; ?>
</div>

<div id="productPictureMapContainer" class="row">
   <div id="productPictureInnerContainer" class="col-xs-12 col-md-6 col-md-height  vcenter">  
      <img src="<?php echo $fields['product_picture']['url'][0]['picture_url']; ?>" name="stage" id="stage" />
  </div><!--
--><div id="productPictureDescContainer"  class="col-xs-12 col-md-6 col-md-height  vcenter">    
    <div id="card">
      <div id="card-inner">  
        <div class="productTitleDetailPageThumbContainerUnder row">
          <?php foreach ($fields['product_picture']['url'] as $product_picture_url): ?>
              <?php $picture_url = $product_picture_url['picture_url'];  $thumbnail_url = $product_picture_url['thumbnail_url']; ?>  
              <div class="productTitleDetailPageThumb col-xs-2">
                <a href="javascript:void(0)"><img src="<?php echo $thumbnail_url; ?>" width="100%" onClick="MM_swapImage('stage','','<?php echo $picture_url; ?>',1)"/></a>
              </div>
          <?php endforeach; ?>
        </div>      
        <div id="productRetailInfoContainer">
          <ul>        
            <?php foreach ($product_informations as $value): ?>
              <?php if(isset($fields[$value])): ?> 
                <li><span><?php echo $fields[$value]['label']; ?>:</span> <?php echo $fields[$value]['value']; ?></li>  
              <?php endif; ?>          
            <?php endforeach; ?>  
          </ul>
        </div> 
      </div>
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
        <?php if(isset($fields[$value]['value'])): ?>
        <tr>
          <td class="listTitle"><span class="listSubTitleSpan"><?php echo $fields[$value]['label']; ?></span> </td>
          <td class="listValue"><?php echo $fields[$value]['value']; ?></td>
        </tr>
        <?php endif; ?>       
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
<?php if(isset($fields['habitat_map'])): ?>
  <div id="productPictureMapContainer2">
    <img src="<?php echo $fields['habitat_map']['url'][0]['picture_url']; ?>" style="width:100%;">
  </div>
<?php endif; ?>
<div id="crossSellingContainer">
  <div class="crossSellTitleRuler"></div>
  <div class="crossSellTitle">ITEMS FROM THE SAME COLLECTION</div>
  <div class="crossSellTitleRuler"></div>

  <div class="crossSellingThumbContainer"> 
    <div class="thumbPageContainer row"> 
      <?php if(isset($other_products)): ?>
        <?php foreach ($other_products as $index => $product):?>  
          <div class="item">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="thumbnail" style="">  
                <div class="views-field views-field-field-product-picture">        
                  <div class="field-content"><a href="<?php echo $product['url']; ?>">
                    <img typeof="foaf:Image" src="<?php echo $product['thumbnail_url']; ?>" width="160" height="160" alt=""></a>
                  </div>  
                </div>  
                <div class="views-field views-field-title">        
                  <span class="field-content">
                    <a href="<?php echo $product['url']; ?>"><?php echo $product['title']; ?></a>
                  </span>  
                </div>
               </div>
            </div>
          </div>
        <?php endforeach; ?>      
      <?php endif; ?>         
    </div>
  </div>
</div>