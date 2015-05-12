<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="INDEX, FOLLOW" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title><?php print $head_title; ?></title>
  <!-- InstanceEndEditable -->
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <!--script src="js/script.js"></script-->
  <?php print $scripts; ?>
  <?php print $styles; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $page_top; ?>
  <div id="topNavContainer">
  <div id='cssmenu'>
    <ul>
      <li><?php print l(t('Home'), '/', array('attributes' => array('class' => 'home'))); ?></li>
      <li class='active has-sub'><a href='#' class="figurines"><span>Figurines</span></a>
        <ul>
           <li class='has-sub'><?php print l(t('Dinosaurs'), '/dinosaurs', array('attributes' => array('class' => 'dinosaurs'))); ?></li>
           <li class='has-sub'><?php print l(t('Fantasy Sets'), '/fantasy-sets', array('attributes' => array('class' => 'fantasy'))); ?></li>
           <li class='has-sub'><?php print l(t('North American Animals'), '/north-american-animals', array('attributes' => array('class' => 'american'))); ?></li>
           <li class='has-sub'><?php print l(t('Wild Animals'), '/wild-animals', array('attributes' => array('class' => 'wild'))); ?></li>
           <li class='has-sub'><?php print l(t('Farm Animals'), '/farm-animals', array('attributes' => array('class' => 'farm'))); ?></li>
           <li class='has-sub'><?php print l(t('Marine Animals'), '/marine-animals', array('attributes' => array('class' => 'marine'))); ?></li>
        </ul>
      </li>
      <li><?php print l(t('Accessories'), '/accessories', array('attributes' => array('class' => 'accessories'))); ?></li>
      <li class='last'><?php print l(t('Where To Buy'), '/buy', array('attributes' => array('class' => 'buy'))); ?></li>
    </ul>
  </div>     
</div>
  <?php print $page; ?>
  <?php print $page_bottom; ?> 
  <div id="bottomFooterContainer">    
    <h6>©<?php echo date('Y'); ?> TERRA by Battat™.<br> Maison Joseph Battat Ltd. All Rights Reserved.</h6>    
  </div>    
</body>
</html>
