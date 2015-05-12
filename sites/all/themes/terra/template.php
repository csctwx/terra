<?php
function terra_preprocess_page(&$vars, $hook) { 
  // Add js file in front page
  if ($vars['is_front']) {
    drupal_add_js(path_to_theme().'/nivo-slider/demo/scripts/jquery-1.9.0.min.js');    
    drupal_add_js(path_to_theme().'/nivo-slider/jquery.nivo.slider.js');
    drupal_add_js(path_to_theme().'/nivo-slider/script.js');
  }

  $vars['scripts'] = drupal_get_js();

  if (isset($vars['node']->field_category)) {
  	$category = $vars['node']->field_category;
  	
  	if ($category['und'][0]['tid'] == 1) { // if it is term of Figurines   		

  		$vars['theme_hook_suggestions'][] = 'page__figurines';
  		
  	}
  	elseif ($category['und'][0]['tid'] == 2) { // if it is term of Accessories   		

  		$vars['theme_hook_suggestions'][] = 'page__accessories';
  		
  	}
  }
}

