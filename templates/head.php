<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png" type="image/png" />
  <?php wp_head(); ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>" />

  <?php
    $title = "Reisebüro Rode GmbH | wir kümmern uns. um sie.";
    $image = "http://www.rodereisen.de" . get_template_directory_uri() . "/assets/img/rodereisen.png";
    $url = "http://www.rodereisen.de" . "?utm_source=social_media";
    $description = "Sie suchen Ihren nächsten Traumurlaub ✓ Dann sind wir Ihr Partner  Über 30 Jahre Erfahrungen sprechen für sich.";
    if ( is_single() || is_page() || is_singular() ) {
      global $post;
      setup_postdata($post);
      $title = get_the_title() . " | Reisebüro Rode GmbH";

      if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
        $image = "http://www.rodereisen.de" . $large_image_url['0'];
      }

      $post_time = get_post_time('c', true);
      $post_modified_time = get_post_modified_time('c', true);

      $url = get_permalink();
      #$description = strip_tags(get_the_excerpt());
      $description = substr( get_the_excerpt(), 0, 156 );
    }

?>

  <title><?php echo $title;?></title>
  <!-- BEGIN OF META TAGS -->
  <meta name="description" content="<?php echo $description; ?>" />
  <!-- Google+ Meta Tags -->
  <link rel="publisher" href="https://plus.google.com/+rodereisende"/>
  <meta itemprop="name" content="<?php echo $title;?>"/>
  <!--<meta itemprop="description" content="<?php echo $description; ?>"/>-->
  <meta itemprop="image" content="<?php echo $image; ?>"/>
  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@reisebuerorode" />
  <meta name="twitter:title" content="<?php echo $title;?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:creator" content="@reisebuerorode" />
  <meta name="twitter:image:src" content="<?php echo $image; ?>" />
  <meta name="twitter:domain" content="rodereisen.de" />
  <!-- Facebook Meta Tags -->
  <meta property="og:type" content="website"/>
  <meta property="og:locale" content="de_DE"/>
  <meta property="og:title" content="<?php echo $title;?>"/>
  <meta property="og:description" content="<?php echo $description; ?>"/>
  <meta property="og:image" content="<?php echo $image; ?>"/>
  <meta property="og:url" content="<?php echo $url; ?>"/>
  <meta property="og:site_name" content="<?php echo $title;?>"/>
  <meta property="og:see_also" content="http://www.rodereisen.de"/>
  <!-- Global Meta Tags -->
  <?php if( isset($post_time) ): ?>
    <meta property="article:published_time" content="<? echo $post_time; ?>" />
  <?php endif; ?>
  <?php if( isset($post_modified_time) ): ?>
    <meta property="article:modified_time" content="<? echo $post_modified_time; ?>" />
    <meta property="og:updated_time" content="<? echo $post_modified_time; ?>" />
  <?php endif; ?>
  <meta property="article:publisher" content="https://www.facebook.com/ReisebueroRode" />
  <!--
  <meta property="place:location:latitude" content="49.037170"/>
  <meta property="place:location:longitude" content="9.316270"/>
  <meta property="business:contact_data:street_address" content="Oberstenfelderstr. 16"/>
  <meta property="business:contact_data:locality" content="Beilstein"/>
  <meta property="business:contact_data:postal_code" content="71717"/>
  <meta property="business:contact_data:country_name" content="Germany"/>
  <meta property="business:contact_data:email" content="info@rodereisen.de"/>
  <meta property="business:contact_data:phone_number" content="+49 706294990"/>
  <meta property="business:contact_data:website" content="http://www.rodereisen.de"/>
  -->
  <!-- END OF META TAGS -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
