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
           <li class='has-sub'><?php print l(t('Dinosaurs'), '/dinosaurs/pachyrhinosaurus', array('attributes' => array('class' => 'dinosaurs'))); ?></li>
           <li class='has-sub'><a href='#' class=""><span>Fantasy Sets</span></a>                
           </li>
           <li class='has-sub'><a href='#' class="american"><span>North American Animals</span></a>                
           </li>
           <li class='has-sub'><a href='#' class=""><span>Wild Animals</span></a>                
           </li>
           <li class='has-sub'><a href='#' class=""><span>Farm Animals</span></a>                
           </li>
           <li class='has-sub'><a href='#' class=""><span>Marine Animals</span></a>                
           </li>
        </ul>
      </li>
      <li><a href='#' class="accessories"><span>Accessories</span></a></li>
      <li class='last'><a href='#' class="buy"><span>Where to Buy</span></a></li>
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
