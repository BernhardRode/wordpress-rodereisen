<?php
/**
 * Custom functions
 */

add_theme_support( 'post-formats', array( 'image', 'link', 'status', 'gallery' ) );
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

register_post_type('angebot', array(
  'label' => 'angebot',
  'labels' => array(
    'name' => 'Angebote',
    'singular_name' => 'Angebot',
    'add_new' => 'Neues Angebot',
    'add_new_item' => 'Angebot hinzufügen',
    'edit_item' => 'Angebot bearbeiten',
    'new_item' => 'Neues Angebot',
    'view_item' => 'Angebot anzeigen',
    'search_items' => 'Angebote suchen',
    'not_found' => 'Keine Angebote gefunden',
    'not_found_in_trash' => 'Keine Angebote im Papierkorb gefunden.'
  ),
  'description' => 'Angebote',
  'public' => true,
  'menu_position' => 5,
  'supports' => array(
    'author',
    //'excerpt',
    //'comments',
    'revisions',
    'title',
    'editor',
    'thumbnail'
  ),
  'taxonomies' => array(
    'category',
    'post_tag'
  ),
  'has_archive' => true,
  'rewrite' => array(
    'slug' => 'angebote',
  )
));
add_post_type_support( 'angebot', 'post-formats' );

if(function_exists("register_field_group")) {
  register_field_group(array (
    'id' => 'acf_social-networks',
    'title' => 'Social Networks',
    'fields' => array (
      array (
        'key' => 'field_538dece97dfcb',
        'label' => 'E-Mail',
        'name' => 'email',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'bernhard@rodereisen.de',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_538ded2b7dfcb',
        'label' => 'Google+',
        'name' => 'google_plus',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'https://plus.google.com/115570046279516722120/posts',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_538de9d3ae668',
        'label' => 'Twitter',
        'name' => 'twitter',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'https://www.twitter.com/ebbo',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_538dece97dfca',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'https://www.facebook.com/bernhard.rode',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'mitarbeiter',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_angebot-details',
    'title' => 'Angebot Details',
    'fields' => array (
      array (
        'key' => 'field_53808a509373b',
        'label' => 'Publish',
        'name' => 'publish',
        'type' => 'date_picker',
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_53808a749373c',
        'label' => 'Unpublish',
        'name' => 'unpublish',
        'type' => 'date_picker',
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_53808a7f9373d',
        'label' => 'Date',
        'name' => 'date',
        'type' => 'date_picker',
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_53808a959373e',
        'label' => 'Price',
        'name' => 'price',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'angebot',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_ibe-link',
    'title' => 'IBE Link',
    'fields' => array (
      array (
        'key' => 'field_5392b435732f7',
        'label' => 'Link',
        'name' => 'link',
        'type' => 'text',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-ibe.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
      ),
    ),
    'menu_order' => 0,
  ));
}

register_post_type('mitarbeiter', array(
  'label' => 'mitarbeiter',
  'labels' => array(
    'name' => 'Mitarbeiter',
    'singular_name' => 'Mitarbeiter',
    'add_new' => 'Neuer Mitarbeiter',
    'add_new_item' => 'Mitarbeiter hinzufügen',
    'edit_item' => 'Mitarbeiter bearbeiten',
    'new_item' => 'Neuer Mitarbeiter',
    'view_item' => 'Mitarbeiter anzeigen',
    'search_items' => 'Mitarbeiter suchen',
    'not_found' => 'Keine Mitarbeiter gefunden',
    'not_found_in_trash' => 'Keine Mitarbeiter im Papierkorb gefunden.'
  ),
  'description' => 'Mitarbeiter',
  'public' => true,
  'menu_position' => 5,
  'supports' => array(
    //'author',
    //'excerpt',
    //'comments',
    //'revisions',
    'title',
    'editor',
    'thumbnail'
  ),
  'taxonomies' => array(
    'category',
    'post_tag'
  ),
  'has_archive' => true,
  'rewrite' => array(
    'slug' => 'mitarbeiter',
  )
));

