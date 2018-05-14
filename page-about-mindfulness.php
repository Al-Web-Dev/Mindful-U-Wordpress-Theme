<?php define( 'WP_USE_THEMES', false ); get_header(); ?>




<div class="content">
      <div class="banner-mindfulness">
        <div class="image-content" id="h1-style-2">

          <h1><?php the_field('what_is_mindfulness'); ?></h1>
          <div class="mindful-text">
            <h2><?php the_field('h2_mindfulness'); ?></h2>
            <p><?php the_field('mindful_text'); ?></p>
                        
          </div>
      </div>
</div>



<div class="divider">
        <h1><?php the_field('the_benefits_of_mindfulness'); ?></h1>
 </div>



<div class="what-involve" id="h1-style">
    <div class="image-content">
        <h2><?php the_field('the_benefits'); ?></h2>
            <div class="mindful-text-1">
              <h4><?php the_field('less_stress'); ?></h4>
            <p><?php the_field('less_stress_text'); ?></p>
            <h4><?php the_field('sleep_better'); ?></h4>
            <p><?php the_field('sleep_better_text'); ?></p>
              <h4><?php the_field('happier,_healthier_relationships'); ?></h4>
              <p><?php the_field('happier_text'); ?></p>
              <h4><?php the_field('manage_anxiety'); ?></h4>
              <p><?php the_field('manage_anxiety_text'); ?></p>
              <h4><?php the_field('sharpen_concentration'); ?></h4>
              <p><?php the_field('sharpen_concentration_text'); ?></p>
              
            
      </div>
  </div>
</div> 

  <?php get_footer(); ?>