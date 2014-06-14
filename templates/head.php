<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png" type="image/png" />
  <?php wp_head(); ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>" />

  <?php
    $title = "Reisebüro Rode GmbH | wir kümmern uns. um sie.";
    $image = get_template_directory_uri() . "/assets/img/rodereisen.png";
    $url = "http://www.rodereisen.de" . "?utm_source=social_media";
    $description = "Sie suchen Ihren nächsten Traumurlaub ✓ Dann sind wir Ihr Partner  Über 30 Jahre Erfahrungen sprechen für sich.";

    if ( is_single() || is_page() ) {
      $title = get_the_title('|', true, 'right');

      if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        $image = "http://www.rodereisen.de" . $large_image_url['0'];
      }

      $url = get_permalink() . "?utm_source=social_media";
      #$description = strip_tags(get_the_excerpt());
    }
  ?>

  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - <?php } ?> <?php wp_title(); ?></title>
  <meta name="description" content="<?php echo $description; ?>" />

  <!-- BEGIN OF META TAGS -->
  <!-- Global Meta Tags -->
  <meta property="place:location:latitude" content="49.037170"/>
  <meta property="place:location:longitude" content="9.316270"/>
  <meta property="business:contact_data:street_address" content="Oberstenfelderstr. 16"/>
  <meta property="business:contact_data:locality" content="Beilstein"/>
  <meta property="business:contact_data:postal_code" content="71717"/>
  <meta property="business:contact_data:country_name" content="Germany"/>
  <meta property="business:contact_data:email" content="info@rodereisen.de"/>
  <meta property="business:contact_data:phone_number" content="+49 706294990"/>
  <meta property="business:contact_data:website" content="http://www.rodereisen.de"/>
  <!-- Google+ Meta Tags -->
  <link rel="publisher" href="https://plus.google.com/+rodereisende"/>
  <meta itemprop="name" content="<?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - <?php } ?> <?php wp_title(); ?>"/>
  <meta itemprop="description" content="<?php echo $description; ?>"/>
  <meta itemprop="image" content="<?php echo $image; ?>"/>
  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@reisebuerorode" />
  <meta name="twitter:title" content="<?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - <?php } ?> <?php wp_title(); ?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:creator" content="@reisebuerorode" />
  <meta name="twitter:image:src" content="<?php echo $image; ?>" />
  <meta name="twitter:domain" content="rodereisen.de" />
  <!-- Facebook Meta Tags -->
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="<?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - <?php } ?> <?php wp_title(); ?>"/>
  <meta property="og:description" content="<?php echo $description; ?>"/>
  <meta property="og:image" content="<?php echo $image; ?>"/>
  <meta property="og:url" content="<?php echo $url; ?>"/>
  <meta property="og:site_name" content="<?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - <?php } ?> <?php wp_title(); ?>"/>
  <meta property="og:see_also" content="http://www.rodereisen.de"/>
  <!-- END OF META TAGS -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
