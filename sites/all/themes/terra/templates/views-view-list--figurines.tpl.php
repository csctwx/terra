<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>

<!-- <div class="container"> -->
    <!-- <div class="col-md-12 text-center"><h3>Product Carousel</h3></div> -->
    <div class="row">
      <!-- <div class="col-md-6 col-md-offset-3"> -->
	      <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
	        <div class="carousel-inner">
	          
	          <?php foreach ($rows as $id => $row): ?>
			      <div class="<?php print $classes_array[$id]; echo ($id==0)?' active':''; ?> item">
			        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			          <div class="thumbnail"><?php print $row; ?></div>
			        </div>
			      </div>
			  <?php endforeach; ?>
	        </div>
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php echo myfunctionlib_theme_path('images/arrow-left.png'); ?>"></a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="<?php echo myfunctionlib_theme_path('images/arrow-right.png'); ?>"></a>
	      <!-- </div> -->
	  </div>
    </div>
<!-- </div>  -->



  