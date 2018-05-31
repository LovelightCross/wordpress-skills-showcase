
<?php
/* Template Name: Single Post*/

get_header();?>
<div id="single-wrapper">

<div id="single-post-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<p id="blog-date"><?php the_date(); ?></p>

<h1 id="single-title"><?php echo get_the_title(); ?></h1>  
        <div id="content-container">
            <p id="content-text"><?php echo get_the_content(); ?></p>
        </div><!-- entry -->

        
        </div>
        </div>
<?php endwhile; ?>
    <div class="navigation">
       <div class="alignleft"><?php echo get_previous_post_link(); ?></div>
       |   
       <div class="alignright"><?php next_post_link(); ?></div>
    </div>
<?php endif; ?>





<div id="links-container">

<!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="prev-link" class="post-nav-links"><?php echo get_previous_post_link(); ?></div>
    
    &nbsp;&nbsp;&nbsp;
    
    <div id="next-link" class="post-nav-links"><?php next_post_link(); ?></div>

    <?php endwhile; ?>

<?php endif; ?> -->



</div>

<?php get_footer();?>