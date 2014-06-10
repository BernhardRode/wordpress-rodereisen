<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <?php if (is_single() || is_page() ) { ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta property="og:title" content="<?php utf8_decode(single_post_title());?>"/>
  <?php if ( has_post_thumbnail()) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
    <meta property="og:image" content="<?php echo $large_image_url['0'] ?>"/>
  <?php }
        else{ ?>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png"/>
  <?php } ?>
  <meta property="og:url" content="<?php echo get_permalink();?>?utm_source=social_media"/>
  <?php } ?> 
  
  <?php 
    global $post;
    $description = "Sie suchen Ihren nächsten Traumurlaub ✓ Dann sind wir Ihr Partner  Über 30 Jahre Erfahrungen sprechen für sich.";
    if (is_single()) {
      $description = strip_tags(get_the_excerpt($post->ID));
    } 
  ?>
  <meta property="og:description" content="<?php echo $description; ?>"/>

  <meta property="og:site_name" content="Reisebüro Rode GmbH"/>
  <meta property="og:type" content="website"/>
  
  <meta name="description" content="<?php echo $description; ?>" />
  
  <link rel="publisher" href="https://plus.google.com/+rodereisende"/>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png" type="image/png" />
  <?php wp_head(); ?>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
