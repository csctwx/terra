<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container">
  <?php print render($page['content']); ?>
  
</div>
<!-- InstanceEndEditable -->
<?php if ($page['sidebar_first']): ?>
  <aside id="secondary" class="sidebar-container" role="complementary">
     <?php print render($page['sidebar_first']); ?>
  </aside> 
<?php endif; ?>  
