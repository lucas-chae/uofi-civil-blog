<!DOCTYPE html>

<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <meta name="description" content="University of Illinois Department of Civil and Environmental Engineering. Student Blog by Student Committee ">
    <meta name="author" content="Lucas Chae">

    <title>
        <?php bloginfo('name');?>
    </title>
    <?php wp_head(); ?>

    <link href="<?php bloginfo('template_url');?> /css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?> /css/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:600|Lato" rel="stylesheet">



</head>


<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="center xxlarge">

                    CEE @ ILLINOIS


                </div>




                <section class="rw-wrapper">
                    <h2 class="rw-sentence">

                        <span>Leading in</span>
                        <div class="rw-words rw-words-1">
                            <span>Precision</span>
                            <span>Creativity</span>
                            <span>Design</span>
                            <span>Innovation</span>
                            <span>Safety</span>
                            <span>Sustainability</span>

                        </div>
                    </h2>
                </section>


                <div class="center xlarge enterButton">
                    <a class="noDec" href="http://csccee.com/about/">Enter Blog</a>

                </div>






            </div>




        </div>
    </div>




</body>

<div class="footerPos">
    <?php get_footer();

?>
</div>
