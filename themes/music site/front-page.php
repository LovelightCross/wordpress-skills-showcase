

<div id="body-container">

<div id="main-content-section" class="index-section">

    <div id="main-img-container">
        <img id="main-content-img" class="content-images" src="<?php bloginfo('template_url');?>/assets/images/man-in-smoke.jpg" alt="Man with guitar in smoke">
    </div>

    <div id="main-image-overlay" class="image-overlay">
        
    <?php get_header();?>
         <div id="main-overlay-content">


            <div id="main-content-container">
                <div id="main-content-header-container">
                    <p id="main-content-header">GRAVITY</p>
                </div>

                <div id="main-content-btn-container">
                    <button id="main-content-btn"><span id="main-content-btn-text">LISTEN TO ALBUM</span></button>
                </div>

                <div id="main-content-cta-container">
                    <p id="main-content-cta">Buy On iTunes</p>


                </div>
            </div>
        </div>
    </div>

</div>

<div id="band-horizon-section" class="index-section">

    <div id="band-content-container">
        <div id="band-content-header-container">
            <p id="band-content-header">WE ARE EVENT HORIZON</p>
        </div>
        <div id="band-content-para">
            <p style="color: white;">
            Based out of Portland, Event Horizon has, according to Canon Magazine, consistently produced music that "pushes the technical boundaries of what music could/should be." Vestibulum id ligula porta felis euismod semper. Photos by Ebru Yildiz. Portraits feature Ghastly City Sleep. Live shots feature The Psychic Paramount. Content for demo use only.
            </p>

        <div id="band-member-container">
            <p class="band-member-list">Vocals, Guitar / Lee Clayton</p>

            <p class="band-member-list">Keyboard, Sampling / Mikael Johnasson</p>

            <p class="band-member-list">Bass / Ethan Stone</p>

            <p class="band-member-list">Drums / Omer Asani</p>
        </div>

    </div>

        <div id="member-img-container">
            <div class="member-img-block">
                <img src="<?php bloginfo('template_url');?>/assets/images/lee-clayton.jpg" alt="" class="member-img">
            </div>

            <div class="member-img-block">
                <img src="<?php bloginfo('template_url');?>/assets/images/mikael-johnassen.jpg" alt="" class="member-img">
            </div>

            <div class="member-img-block">
                <img src="<?php bloginfo('template_url');?>/assets/images/ethan-stone.jpg" alt="" class="member-img">
            </div>

            <div class="member-img-block">
                <img src="<?php bloginfo('template_url');?>/assets/images/omer-asani.jpg" alt="" class="member-img">
            </div>
        </div>

    </div>

</div>

<div id="band-tour-section" class="index-section" style="background-image: url('<?php bloginfo('template_url');?>/assets/images/man-with-guitar-in-smoke.jpg">




        <div id="tour-image-overlay" class="image-overlay">

            <div id="tour-wrapper">
            <div id="tour-header-container">
                <p id="tour-header" style="color: white;">
                    GRAVITY TOUR
                </p>

            </div>

                <ul id="tour-content-container">
                 <?php

$args = array(
'post_type' => 'tour_dates',
);
$query = new WP_Query($args);
if ($query->have_posts()) {
while ($query->have_posts()) {
    $query->the_post();?>
        

            

                
                <li class="tour-item">
                    <div class="tour-date">
                        <?php the_field('tour_date');?>
                    </div>

                    <div class="tour-day">
                        <?php the_field('tour_day');?>
                    </div>

                    <div class="tour-venue">
                        <?php the_field('tour_venue');?>
                        <br>
                        <p id="tour-opener"><?php the_field('tour_opener');?></p>
                    </div>



                    <div class="tour-location">
                        <?php the_field('tour_location');?>
                    </div>

                    
                    <div id="tour-btn">RSVP</div>
                    


                </li>
      
<?php 
} // end while
} // end if
wp_reset_query();

?>
<div id="tour-btn-container">
                <button id="all-tour-btn">
                    MORE UPCOMING SHOWS
                </button>
            </div>
                </div>

            

        </div>
    </ul>

</div>



<div id="band-news-section">

    <div id="band-news-container">

        <div id="news-container">

            <div id="news-header-container">
                <p id="news-header">NEWS & UPDATES</p>
            </div>
            
            <div id="blog-container">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div id="blog-post">
                        

                        <p id="blog-date"><?php the_date(); ?></p>

                        <a href="<?php the_permalink() ?>" id="blog-title"><?php the_title(); ?></a>  
                                
                                <p id="blog-excerpt"><?php echo  get_the_excerpt(); ?></p>
                                
                                <a id="read-more" href="<?php the_permalink();?>">Read More →</a><br><br><br>
                    </div>        
                <?php endwhile; ?>
                <?php endif; ?>
                
                

            </div>

        </div>    

        <div id="twitter-container">
            <div id="twitter-header-container">
                <p id="twitter-header">TWITTER</p>
            </div>

            <a class="twitter-timeline"
                    href="https://twitter.com/Lovel1ght" data-tweet-limit=3 style="background-color:#000000;" >
                    Tweets by @Lovel1ght
            </a>
        </div>
    </div>

    </div>
</div>
</div>


<div id="band-media-section">

    <div id="band-media-container">
        <img src="<?php bloginfo('template_url');?>/assets/images/nebula.jpg" alt="" id="tour-content-img" class="content-images">
    </div>

    <div id="media-image-overlay" class="image-overlay">

        <div>
        <?php echo do_shortcode("[ps_audioplayer name=lovelight-music]"); ?>
        </div>

    </div>




</div>





</div>



<?php get_footer();?>
