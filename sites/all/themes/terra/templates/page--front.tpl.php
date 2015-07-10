<!-- InstanceBeginEditable name="mainContainer" -->
<div id="wrapper" >
    <div class="slider-wrapper theme-default slideshowWide">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'terra') . '/images/slide-image-1.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'terra') . '/images/slide-image-2.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'terra') . '/images/slide-image-3.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
        </div>
    </div>
    <div class="slider-wrapper theme-default slideshowNarrow">
        <div id="sliderTwo" class="nivoSlider">
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-african.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-fantasy.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-north-american.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
        </div>
    </div>
</div>

<div id="containerHomepage">
  <div style="width:70%; height:auto; margin:0 auto 2% auto; background:lime; padding:2%; display:none;">
    <div class="homepageMissionStatement">
        <p>TERRA BY BATTAT&trade; collectibles feature exquisite detail and captivating design. Hand painted original characters are available in all your favorite categories: horses, sea life, farm animals, wild animals, dinosaurs, goblins, dragons, and warriors with legends to share.
        </p>
    </div>
    <div class="homepageRandomNews">
      <img src="<?php echo myfunctionlib_theme_path('images/homepage-dinosaur-burst.png'); ?>" width="100%" />
  </div>
</div>
<div class="homepageMissionStatementContainer">
    <div class="homepageMissionStatementTwo">
        <p><span>TERRA BY BATTAT&trade;</span> collectibles feature exquisite detail and captivating design. Hand painted original characters are available in all your favorite categories: <a href="#">horses</a>, <a href="#">sea life</a>, <a href="#">farm animals</a>, <a href="#">wild animals</a>, <a href="#">goblins</a>, <a href="#">dragons</a>, and <a href="#">warriors</a> with legends to share. We also feature detailed dinosaur models from the <a href="#" class="danLorussoLink">Dan LoRusso Collection&trade;</a>
        </p>
        <p style="display:none;">We also feature detailed dinosaur models from the Dan LoRusso Collection&trade;
        </p>
    </div>
    <div class="homepageRandomNewsTwo">
      <img src="<?php echo myfunctionlib_theme_path('images/homepage-dinosaur-burst-reversed-closeup.png'); ?>" width="90%" />
  </div>
</div>
<div id="crossSellingContainer">
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellTitle">TERRA BY BATTAT&trade; THEMES</div>
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellingThumbContainer homepageCrossSellingThumbContainer"> 
      <?php if ($page['footer']): ?>         
          <?php print render($page['footer']); ?>          
      <?php endif; ?>
   </div>
</div>
</div>




 