
<?php
/* Template Name: Single Post*/

get_header();?>

<a href="http://localhost:3000/merch/" style="color: #FFFFFF;"><-- Back To Merch</a>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer();?>