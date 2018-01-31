<?php

/**
 * Override or insert variables into the page template.
 */
function starGazer_preprocess_page(&$variables) {
  global $user;
  
  if(isset($user->uid) && $user->uid > 0){
    $variables['loggedIn'] = $user->uid;
    $variables['userName'] = $user->name;
    $variables['mail']     = $user->mail;
  }

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
 *Customize the search form
 */
function starGazer_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibility
    $form['search_block_form']['#attributes']['class'][] = 'form-control search-block-input';
    $form['search_block_form']['#default_value'] = t('Search Site'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit']['#attributes']['alt'] = "Search Button"; //add alt tag
    $form['actions']['submit']['#value'] = 'Search'; //add title
    $form['actions']['submit']['#attributes']['class'][] = 'btn btn-success';
    //unset($form['actions']['submit']['#value']); // Remove the value attribute from the input tag, since it is not valid when input type = image

    //$form['actions']['submit'] = array('#type' => 'button', '#src' => base_path() . path_to_theme() . '/images/icon-search.png');

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search Site';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search Site') {this.value = '';}";
  }
}

/**
 * Add css as js
 */
drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array('group' => CSS_THEME, 'type' => 'external'));
drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', array('group' => CSS_THEME, 'type' => 'external'));

drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('type' => 'external', 'scope' => 'footer'));