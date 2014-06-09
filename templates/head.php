<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png"/>
  <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>"/>
  <meta property="og:description" content="Sie suchen Ihren nächsten Traumurlaub ✓ Dann sind wir Ihr Partner  Über 30 Jahre Erfahrungen "/>
  <meta property="og:url" content="www.rodereisen.de"/>
  <meta property="og:site_name" content="rodereisen"/>
  <meta property="og:type" content="website"/>
  <link rel="publisher" href="https://plus.google.com/+rodereisende"/>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png" type="image/png" />
  <?php wp_head(); ?>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
