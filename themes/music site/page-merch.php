<?php
/* Template Name: Merch*/

 ?>

<div id="page-wrapper">


    <div id="merch-header-img-container" style="background-image: url('<?php bloginfo('template_url');?>/assets/images/merch-header-img.jpg');" >
    
        
        <div id="overlay">
        <?php get_header(); ?>

        

        </div>


        <div id="merch-title-container" class="title-container">

            <div id="merch-header-text-container" class="title-container" style="">
                
                <p id="merch-header-text">MERCH</p>
            
            </div>


            <div id="merch-subheader-text-container">

                <p id="merch-subheader-text">End of Summer Sale - All Shirts 50% off</p>
                <br><br><br><br><br><br><br><br><br><br>
            </div>

        </div>
    </div>  
    
    

    <div id="merch-container">

        <div id="merch-display">
            <div id="product-1" class="products">
                <?php echo do_shortcode('[products]') ?>
            </div>
        </div>

    </div>
       

    

</div>






<?php get_footer();?>