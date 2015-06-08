<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container"  style="padding-bottom:5%;">
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>    
  </div>
  <div id="productTitleDetailPage">
	<!-- <h4>Figurines</h4> -->
	<h2><?php echo $title; ?></h2>
  </div>
  <?php print render($page['content']); ?>  
</div>
<!-- InstanceEndEditable -->