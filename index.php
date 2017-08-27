<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="topBotomBordersOut menubar">
                    <?php wp_nav_menu(array(
                'depth' => 1

            )); ?>
                </div>
            </div>
                
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-3" >
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/header_draft.jpg" style="width:100%">
                
                <div class="nav-title"><span class="highlight"> <?php echo get_the_title(get_ancestor_id()); ?></span></div>
                
                <div class="childNav">
                <?php
        
        $args = array(
            'child_of' => get_ancestor_id(),
            'title_li' => ''
        );
        
        
        ?>

                    <?php wp_list_pages($args); ?>
                    
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 grey-overlay">



                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>

                <!--<div class="subtitle">
                        <h2 class="borderstyle">
                            <?php the_title(); ?> </h2> </div> -->
                        <div class="main-padding">
                            <?php the_content(); ?>
                        </div>

                        <?php endwhile; ?>

    <? else: ?>
                No contents

    <? endif; ?>
            </div>
        </div>
    </div>
    </div>

    <?php get_footer();

?>