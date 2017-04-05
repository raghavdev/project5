<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 * 
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function mtadaptive_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function mtadaptive_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function mtadaptive_preprocess_page(&$vars) {
if (isset($vars['node']->type)) {
$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
}
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function mtadaptive_preprocess_node(&$vars) {
}
function mtadaptive_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function mtadaptive_preprocess_comment(&$vars) {
}
function mtadaptive_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function mtadaptive_preprocess_block(&$vars) {
}
function mtadaptive_process_block(&$vars) {
}
// */

/**
  * Load IE specific stylesheets
  * AT automates adding IE stylesheets, simply add to the array using
  * the conditional comment as the key and the stylesheet name as the value.
  *
  * For example to add a stylesheet for IE8 only use:
  *
  *  'IE 8' => 'ie-8.css',
  *
  * Your IE CSS file must be in the /css/ directory in your subtheme.
  */
  
  /**
  $ie_files = array(
    'IE 8' => 'ie8.css',
	'lte IE 9' => 'lte-ie-9.css',
	'IE 10' => 'ie10.css',
  );
  load_subtheme_ie_styles($ie_files, 'mtadaptive');
   */
   
   
    /**
   function mtadaptive_form_alter(&$form, &$form_state, $form_id) {
if ($form_id == 'google-appliance-block-form') {

// Add extra attributes to the text box
$form['google-appliance-block-form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
$form['google-appliance-block-form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
// Prevent user from searching the default text
$form['#attributes']['onsubmit'] = "if(this.google-appliance-block-form.value=='Search'){ alert('Please enter a search'); return false; }";
 
// Alternative (HTML5) placeholder attribute instead of using the javascript
$form['google-appliance-block-form']['#attributes']['placeholder'] = t('Search');
}
} 

 */