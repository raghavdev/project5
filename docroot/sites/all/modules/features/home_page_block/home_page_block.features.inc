<?php
/**
 * @file
 * home_page_block.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function home_page_block_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function home_page_block_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function home_page_block_node_info() {
  $items = array(
    'homepage_block' => array(
      'name' => t('Homepage Block'),
      'base' => 'node_content',
      'description' => t('Adds a block of highlighted content to the homepage'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
