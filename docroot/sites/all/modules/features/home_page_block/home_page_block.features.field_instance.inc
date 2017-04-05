<?php
/**
 * @file
 * home_page_block.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function home_page_block_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-homepage_block-body'
  $field_instances['node-homepage_block-body'] = array(
    'bundle' => 'homepage_block',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'trim_length' => 600,
        ),
        'type' => 'text_summary_or_trimmed',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'body',
    'label' => 'Body',
    'required' => FALSE,
    'settings' => array(
      'display_summary' => TRUE,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 5,
    ),
  );

  // Exported field_instance: 'node-homepage_block-field_category'
  $field_instances['node-homepage_block-field_category'] = array(
    'bundle' => 'homepage_block',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'taxonomy',
        'settings' => array(),
        'type' => 'taxonomy_term_reference_link',
        'weight' => 4,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_category',
    'label' => 'Category',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(
        'content_taxonomy_opt_groups' => FALSE,
        'maxlength_js_label' => 'Content limited to @limit characters, remaining: <strong>@remaining</strong>',
      ),
      'type' => 'options_select',
      'weight' => 7,
    ),
  );

  // Exported field_instance: 'node-homepage_block-field_homepage_block_image'
  $field_instances['node-homepage_block-field_homepage_block_image'] = array(
    'bundle' => 'homepage_block',
    'deleted' => 0,
    'description' => 'Attach an image to be used',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => '',
        ),
        'type' => 'image',
        'weight' => 2,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_homepage_block_image',
    'label' => 'Homepage Block Image',
    'required' => 1,
    'settings' => array(
      'alt_field' => 1,
      'alt_field_default' => '',
      'alt_field_hide' => 0,
      'alt_field_sync_title' => 1,
      'alt_field_update_on_edit' => 0,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'title_field' => 1,
      'title_field_default' => '[node:title]',
      'title_field_hide' => 0,
      'title_field_update_on_edit' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'manualcrop_crop_info' => 1,
        'manualcrop_default_crop_area' => 1,
        'manualcrop_enable' => 0,
        'manualcrop_inline_crop' => 0,
        'manualcrop_instant_crop' => 0,
        'manualcrop_instant_preview' => 1,
        'manualcrop_require_cropping' => array(
          'horizontal_image' => 0,
          'news_horizontal' => 0,
          'news_vertical' => 0,
          'portrait' => 0,
          'press_release_multi' => 0,
          'press_release_single' => 0,
          'rotator_horizontal' => 0,
          'rotator_vertical' => 0,
          'small_rotator' => 0,
          'vertical_image' => 0,
          'wide_rotator' => 0,
        ),
        'manualcrop_styles_list' => array(
          'horizontal_image' => 0,
          'news_horizontal' => 0,
          'news_vertical' => 0,
          'portrait' => 0,
          'press_release_multi' => 0,
          'press_release_single' => 0,
          'rotator_horizontal' => 0,
          'rotator_vertical' => 0,
          'small_rotator' => 0,
          'vertical_image' => 0,
          'wide_rotator' => 0,
        ),
        'manualcrop_styles_mode' => 'exclude',
        'manualcrop_thumblist' => 0,
        'maxlength_js_label' => 'Content limited to @limit characters, remaining: <strong>@remaining</strong>',
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 1,
    ),
  );

  // Exported field_instance: 'node-homepage_block-field_link'
  $field_instances['node-homepage_block-field_link'] = array(
    'bundle' => 'homepage_block',
    'default_value' => array(
      0 => array(
        'value' => 'http://',
      ),
    ),
    'deleted' => 0,
    'description' => 'What URL does this block link to? Enter the full URL here',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 3,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_link',
    'label' => 'Link',
    'required' => 1,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'maxlength_js' => 0,
        'maxlength_js_label' => 'Content limited to @limit characters, remaining: <strong>@remaining</strong>',
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 6,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Attach an image to be used');
  t('Body');
  t('Category');
  t('Homepage Block Image');
  t('Link');
  t('What URL does this block link to? Enter the full URL here');

  return $field_instances;
}
