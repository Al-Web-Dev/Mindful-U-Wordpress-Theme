<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

    <!-- Start Main content -->



<div class="banner-aboutme">
 
 <?php while ( have_posts() ) : the_post(); ?>

    <div class="about-text">
        
        <?php the_content();?>            
    </div>

 <?php endwhile; //resetting the post loop ?>
  
</div>



<?php get_footer(); ?>



