<?php

function fusion_solikon_tablesort_indicator($style) {
  if ($style == "asc") {
    return '<span class="desc">click to toggle sort</span>';
  }
  else {
    return '<span class="asc">click to toggle sort</span>';
  }
}

function fusion_solikon_grid_block($element, $name, $classes='') {
  $output = '';
  if ($element) {
    $output .= '<div id="' . $name . '" class="' . $name . ' '. $classes .' block">' . "\n";
    $output .= '<div id="' . $name . '-inner" class="' . $name . '-inner inner clearfix">' . "\n";
    $output .= $element;
    $output .= '</div><!-- /' . $name . '-inner -->' . "\n";
    $output .= '</div><!-- /' . $name . ' -->' . "\n";
  }
  return $output;
}


// own
//----------------------------------
// http://stackoverflow.com/questions/3530756/how-to-hide-edit-view-tabs

function fusion_solikon_menu_item_link($link) {
  // Local tasks for view and edit nodes shouldn't be displayed.
  if ($link['type'] & MENU_LOCAL_TASK && ($link['path'] === 'node/%/edit' || $link['path'] === 'node/%/view')) {
    return '';
  }
  else {
    if (empty($link['localized_options'])) {
      $link['localized_options'] = array();
    }

    return l($link['title'], $link['href'], $link['localized_options']);
  }
}

function fusion_solikon_menu_local_task($link, $active = FALSE) {
  // Don't return a <li> element if $link is empty
  if ($link === '') {
    return '';
  }
  else {
    return '<li '. ($active ? 'class="active" ' : '') .'>'. $link ."</li>\n"; 
  }
}

