<?php
/* Template Name: Contact*/

?>


<div id="page-wrapper">

    <div id="contact-content-container" style="background-image: url('<?php bloginfo('template_url');?>/assets/images/contact-img.jpg');">

    <header><?php get_header(); ?></header>

        <div id="contact-img-overlay" class="img-overlay">

            

            <div id="contact-header-container">

                <div id="contact-header-title">
                    <p id="contact-title-text">CONTACT</p>

                    <p id="contact-subtitle-text">For booking and press inquiries, please contact <br>
                    Loblaw Management Co. at 212.555.0123</p>
                </div>

            
            </div>



        </div>

    </div>

    <div id="form-container">

        <?php echo do_shortcode("[gravityform id='1' title='false' description='false']"); ?>

    </div>


    
</div>

<?php get_footer(); ?>