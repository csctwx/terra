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
<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container" style="padding-bottom:5%;">
	<div id="productTitleDetailPage">
		<h4>Figurines</h4>
		<h2><?php echo $title; ?></h2>
	</div>
	
	<div class="thumbPageContainer" style="background:ivory;"> 	   
	   <?php foreach ($rows as $id => $row): ?>
	      <div class="class=crossSellingThumb thumbnails ImageWrapper BackgroundS ContentWrapperH chrome-fix item <?php print $classes_array[$id]; ?>">
	        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	          <div class="col-xs-10 col-xs-offset-1 thumbnail"><?php print $row; ?></div>
	        </div>
	      </div>
	   <?php endforeach; ?>		
	</div>
</div>
<!-- InstanceEndEditable -->
