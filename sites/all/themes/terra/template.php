<?php
function terra_preprocess_page(&$vars, $hook) { 
  // Add js file in front page
  if ($vars['is_front']) {
    drupal_add_js(path_to_theme().'/nivo-slider/demo/scripts/jquery-1.11.1.min.js');    
    drupal_add_js(path_to_theme().'/nivo-slider/jquery.nivo.slider.js');
    drupal_add_js(path_to_theme().'/nivo-slider/script.js');
  }

  $vars['scripts'] = drupal_get_js();
  /*
  if (isset($vars['node']->field_category)) {
  	$category = $vars['node']->field_category;
  	
  	if ($category['und'][0]['tid'] == 1) { // if it is term of Figurines   		

  		$vars['theme_hook_suggestions'][] = 'page__figurines';
  		
  	}
  	elseif ($category['und'][0]['tid'] == 2) { // if it is term of Accessories   		

  		$vars['theme_hook_suggestions'][] = 'page__accessories';
  		
  	}
  }
  */
}

function terra_preprocess_image_style(&$vars) { 
  $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}

// function terra_preprocess_views_view(&$vars) { 
//   $vars['title'] = ucwords(str_replace('_', ' ', $vars['name']));
//   //kpr($vars); die();
// }

// function terra_menu_tree($variables) {
//   return '<ul class="menu">' . $variables ['tree'] . '</ul>';
// }

function terra_menu_tree($variables) {
  return '<ul>' . $variables ['tree'] . '</ul>';
}

// function terra_menu_link(array $variables) {
//   $element = $variables ['element'];
//   $sub_menu = '';

//   if ($element ['#below']) {
//     $sub_menu = drupal_render($element ['#below']);
//   }
//   $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
//   return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
// }

function terra_menu_link(array $variables) {
  $element = $variables ['element'];
  $sub_menu = '';

  if ($element ['#below']) {
    $sub_menu = drupal_render($element ['#below']);
  }
  $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
  return '<li class="' . ($element ['#below'] ? ' has-sub':'') . '">' . $output . $sub_menu . "</li>\n";
}
