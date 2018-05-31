
<?php
/* Template Name: Single Post*/

get_header();?>

<div class="product-wrapper">

<a class="back-btn" href="http://localhost:3000/merch/" >&larr; Back To Merch</a>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="product-title"><?php echo get_the_title(); ?></h1>  

        <div class="product-content">
            <?php the_content(); ?>
        </div>

<?php endwhile; ?>
<?php endif; ?>

</div>


<?php get_footer();?>