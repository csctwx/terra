<!-- InstanceBeginEditable name="mainContainer" -->
<?php $views_page = views_get_page_view(); ?>
<div id="container">
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>    
  </div>
  
  <?php if (is_object($views_page)): ?>
	  <div id="productTitleDetailPage">
		<h4>Figurines</h4>
		<h2><?php echo ($title=='Figurines')?'Categories':$title; ?></h2>
	  </div>
  <?php endif; ?>
  <?php print render($page['content']); ?>
  
</div>
<!-- InstanceEndEditable -->
<?php if ($page['sidebar_first']): ?>
  <aside id="secondary" class="sidebar-container" role="complementary">
     <?php print render($page['sidebar_first']); ?>
  </aside> 
<?php endif; ?>  
