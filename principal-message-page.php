<?php
/**
 * Template Name: Principal Message Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>




<section class="page_body">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4">
                <div class="mb-4">
                    <div class="page_main-title"><?php echo  get_field('message_title'); ?></div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                        <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                        <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                        <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                        </svg>
                    </div>

                </div>
                <div class="principal_message_caption mb-4"><?php echo get_field('message_caption'); ?></div>
              

                <div class="mb-4">
                <?php echo wp_kses_post ( get_field('message') ); ?>

                </div>

                <div class="principal_name mb-2"><?php echo get_field('principl'); ?></div>
                <div class="principal_info mb-2"><?php echo get_field('principal_sub_text'); ?></div>
                <div class="principal_designation mb-2"><?php echo get_field('principal_designation'); ?></div>


               
            </div>
            <div class="col-12 col-lg-4">
                <img width="654" height="933" class="img-fluid" src="<?php echo get_field('principal_image'); ?>" alt="Principal Image">
            </div>
        </div>
   
    </div>

</section>



<?php
get_footer();