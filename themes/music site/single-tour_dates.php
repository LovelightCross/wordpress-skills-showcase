<?php
/**
* Template Name: Tour Date
*/
get_header(); ?>
<section id="resources" class="container">

 <h1><?php echo the_title(); ?></h1>
 <div class="content">
 <?php

                if( have_rows('tour_date') ):

                    while ( have_rows('tour_date') ) : the_row(); ?>

                       <div>
                        <?php the_sub_field('tour_date'); ?>
                       </div>
                         
                       <div>
                         <?php the_sub_field('tour_day'); ?>
                       </div>

                       <div>
                        <?php the_sub_field('tour_venue'); ?>
                       </div>

                       <div>
                        <?php the_sub_field('tour_location'); ?>   
                       </div>   

                      <?php  endwhile;

                    else :

                    endif;

                ?>
 </div>
 </section>
<?php get_footer(); ?>