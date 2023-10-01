<?php
/**
 * Template Name:Gallery Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>




<section class="page_body">
    <div class="container">
            <div class="col-12 mb-5">
                        <div class="page_main-title"><?php echo  get_field('page_title'); ?>Gallery</div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                            <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                            <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                            <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                            </svg>
                        </div>

            </div>


            
            <div class="row">
                <div class="col-12">
                <?php echo do_shortcode('[PFG id=343]'); ?>
                </div>
            </div>



    



    </div>
</section>



<?php
get_footer();