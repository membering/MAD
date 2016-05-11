<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div id="container">
    <div class="logo">
        <?php mad_header(); ?>
        <?php mad_menu('primary-menu'); ?>
    </div>