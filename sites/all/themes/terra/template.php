<?php
function terra_preprocess_page(&$vars, $hook) { 
  if ($vars['is_front']) {
    drupal_add_js(path_to_theme().'/nivo-slider/demo/scripts/jquery-1.9.0.min.js');    
    drupal_add_js(path_to_theme().'/nivo-slider/jquery.nivo.slider.js');
    drupal_add_js(path_to_theme().'/nivo-slider/script.js');
  }

  $vars['scripts'] = drupal_get_js();
}

