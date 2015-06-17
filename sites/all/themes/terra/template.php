<?php
function terra_preprocess_page(&$vars, $hook) { 
  // Add js file in front page
  if ($vars['is_front']) {
    drupal_add_js(path_to_theme().'/nivo-slider/demo/scripts/jquery-1.11.1.min.js');    
    drupal_add_js(path_to_theme().'/nivo-slider/jquery.nivo.slider.js');
    drupal_add_js(path_to_theme().'/nivo-slider/script.js');
  }

  $vars['scripts'] = drupal_get_js();  
  
  // modify breadcrumbs if it is view page or node type belong to categories
  $figurines_node_ids = taxonomy_select_nodes(1);
  $figurines_types = array();
  foreach ($figurines_node_ids as $figurines_node_id) {
    $figurines_node = node_load($figurines_node_id);
    $figurines_types[] = str_replace(' ', '_', strtolower($figurines_node->title));
  }
  $views_page = views_get_page_view();
  if (is_object($views_page)) {    
    $view_name = $views_page->name; 
    if(in_array($view_name, $figurines_types)){
      myfunctionlib_set_breadcrumbs('', 'figurines');
    }    
  }

  $node_type = $vars['node']->type;  
  if($node_type){ 
    if($node_type == 'accessories') {
      myfunctionlib_set_breadcrumbs('', 'accessories');
    }
    elseif(in_array($node_type, $figurines_types)){      
        myfunctionlib_set_breadcrumbs($node_type, 'figurines');
    }    
  }
}

function terra_preprocess_image_style(&$vars) { 
  $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}


function terra_menu_tree($variables) {
  return '<ul>' . $variables ['tree'] . '</ul>';
}

function terra_menu_link(array $variables) {
  $element = $variables ['element'];
  $sub_menu = '';

  if ($element ['#below']) {
    $sub_menu = drupal_render($element ['#below']);
  }
  $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
  return '<li class="' . ($element ['#below'] ? ' has-sub':'') . '">' . $output . $sub_menu . "</li>\n";
}

function terra_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = drupal_get_title();
    
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}

?>