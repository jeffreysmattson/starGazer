<?php

/**
 * Override or insert variables into the page template.
 */
function starGazer_preprocess_page(&$variables) {
    if (!empty($variables['site_name'])) {
        $variables['site_title'] = $variables['site_name'];
    }
    $variables['site_html'] = '<span>' . $variables['site_title'] . '</span>';

    if (isset($variables['main_menu'])) {
      
    $variables['primary_nav'] = theme('links__system_main_menu', array(
        'links' => $variables['main_menu'],
        'attributes' => array(
        'class' => array('nav', 'navbar-nav'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));

  }
  else {
    $variables['primary_nav'] = FALSE;
  }
  if (isset($variables['secondary_menu'])) {
    $variables['secondary_nav'] = theme('links__system_secondary_menu', array(
      'links' => $variables['secondary_menu'],
      'attributes' => array(
        'class' => array('nav', ' navbar-nav', 'navbar-right'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
}

/**
 * Add css as js
 */
drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array('group' => CSS_THEME, 'type' => 'external'));
drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', array('group' => CSS_THEME, 'type' => 'external'));

drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('type' => 'external', 'scope' => 'footer'));