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



<div class="thumbPageContainer row"> 
   <?php foreach ($rows as $id => $row): ?>
      <div class="<?php print $classes_array[$id]; ?> item">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail"><?php print $row; ?></div>
        </div>
      </div>
  <?php endforeach; ?>
</div>



  