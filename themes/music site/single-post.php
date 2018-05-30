
<?php
/* Template Name: Single Post*/

get_header();?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<p id="blog-date"><?php the_date(); ?></p>

<h1><?php the_title(); ?></h1>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer();?>