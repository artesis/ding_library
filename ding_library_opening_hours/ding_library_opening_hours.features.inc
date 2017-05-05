<?php
/**
 * @file
 * ding_library_opening_hours.features.inc
 */

/**
 * Implements hook_fe_nodequeue_export_fields().
 */
function ding_library_opening_hours_fe_nodequeue_export_fields() {
  $nodequeues = array();

  // Exported nodequeues: opening_hours
  $nodequeues['opening_hours'] = array(
    'name' => 'opening_hours',
    'title' => 'Opening Hours',
    'subqueue_title' => '',
    'size' => 0,
    'link' => '',
    'link_remove' => '',
    'owner' => 'nodequeue',
    'show_in_ui' => 1,
    'show_in_tab' => 1,
    'show_in_links' => 0,
    'reference' => 0,
    'reverse' => 0,
    'insert_at_front' => 1,
    'i18n' => 0,
    'subqueues' => 1,
    'types' => array(
      0 => 'ding_library',
    ),
    'roles' => array(),
    'count' => 0,
  );

  return $nodequeues;
}
