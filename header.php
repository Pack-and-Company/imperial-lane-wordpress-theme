<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
  <script src="<?=get_template_directory_uri();?>/js/cufon.js" type="text/javascript"></script>
  <script src="<?=get_template_directory_uri();?>/js/Ubahn-Light_300.font.js" type="text/javascript"></script>
  <script type="text/javascript"> Cufon.replace('p',{}); </script>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>