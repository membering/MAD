<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div id="container">
    <div class="logo">
        <?php
            printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename'));
        ?>
    </div>