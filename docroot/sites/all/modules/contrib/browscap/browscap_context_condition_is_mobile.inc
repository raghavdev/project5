<?php

/**
 * Provide an "is this a mobile device?" value as a context condition.
 */
class browscap_context_condition_is_mobile extends context_condition {
  function condition_values() {
    return array('mobile' => 'Mobile device', 'not_mobile' => 'Not a mobile device');
  }

  function execute() {
    if(function_exists('browscap_get_browser')) {

      $browser = browscap_get_browser();

      if ($browser['ismobiledevice'] == 'true') {
        $type = 'mobile';
      }
      else {
        $type = 'not_mobile';
      }

      foreach ($this->get_contexts($type) as $context) {
        $this->condition_met($context, $type);
      }
    }
  }
}
