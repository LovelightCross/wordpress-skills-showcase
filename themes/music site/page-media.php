
<?php
/* Template Name: Media*/

get_header();?>

<div id="page-wrapper">


    
    <div id="video-section-wrapper" class="section-wrapper">

        <div id="inner-video-section" class="inner-section">

            <div id="video-section-header">

                <div id="video-header-container">

                    <p id="video-header-text">AMARA</p>

                    <p id="video-subheader">5.23.2014 / Live at Cascade Bar NY</p>
                </div>
                
            </div>

            <div id="video-player-container">
                <div id="video-content">
                    <?php 
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post(); 
                                //
                                // Post Content here
                                the_content();
                            } // end while
                        } // end if
                    ?>     
                </div>        
            </div>

            <div id="video-section-footer">

                <div id="video-footer-container">
                    <p id="video-footer-text">WATCH MORE VIDEOS</p>
                </div>

                <div id="video-btn-container">
                    <a href="https://bit.ly/2jWdE7I" id="video-btn">VISIT YOUTUBE →</a>
                </div>

            </div>

        </div>

    </div>

    <div id="gallery-section-wrapper" class="section-wrapper">

        <div class="slider">
            <div class="slick-div" ><img class="slick-img" src="<?php bloginfo('template_url');?>/assets/images/gallery-img-1.jpg" alt=""></div>

            <div class="slick-div"><img  class="slick-img" src="<?php bloginfo('template_url');?>/assets/images/gallery-img-2.jpg" alt=""></div>

            <div class="slick-div"><img  class="slick-img" src="<?php bloginfo('template_url');?>/assets/images/gallery-img-3.jpg" alt=""></div>

            <div class="slick-div"><img  class="slick-img" src="<?php bloginfo('template_url');?>/assets/images/gallery-img-4.jpg" alt=""></div>
            
        

        </div>                 
        
    </div>

    <div id="social-section-wrapper" class="section-wrapper">

        <div id="social-header">
            <p id="social-header-text">INSTAGRAM FEED</p>
        </div>

        <div id="instafeed"></div> 
        
        <script async defer src="//www.instagram.com/embed.js"></script>

    </div>

</div>

<?php get_footer();?>