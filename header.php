<!DOCTYPE html>

<html <?php language_attributes();?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="viewport" content="width=device-width">
        
        <meta name="description" content="University of Illinois Department of Civil and Environmental Engineering. Student Blog by Student Committee ">
        <meta name="author" content="Lucas Chae">
        
        <title><?php bloginfo('name');?></title>
        <?php wp_head(); ?>
        
        <link href="<?php bloginfo('template_url');?> /css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin|Lato:300,400" rel="stylesheet">
    
        
        
    </head>
    
    <body <?php body_class(); ?> >
    
    
    <header class="site-header">
        <div class="container white title-padding">
        <div class="row">
        <h1><?php bloginfo('name'); ?> </h1>
        <h4><?php bloginfo('description'); ?> </h4>
        </div>
        </div>
        </header>