<?php
/**
 * Template Name: Management Committee 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */


get_header();

?>




<section class="page_body">
    <div class="container">
        <div class="row">
        <div class="col-12 mb-5">
                <div class="mb-4">
                    <div class="page_main-title"><?php echo  get_field('page_title'); ?></div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                        <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                        <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                        <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                        </svg>
                    </div>

                </div>
              

                <div>
                <?php echo wp_kses_post ( get_field('page_text') ); ?>

                </div>
               
            </div>
        </div>
    </div>


        <div class="container-fluid managing-trustee_section">
            <div class="row container m-auto py-5">
            <div class="col-12 mb-5">
                <div class="text-center">
                    <div class="page_main-title text-white mb-">Our Managing Trustee</div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                    <line y1="10" x2="80" y2="10" stroke="white" stroke-width="2"/>
                    <line x1="96" y1="9" x2="176" y2="9" stroke="white" stroke-width="2"/>
                    <circle cx="88" cy="10" r="9" stroke="white" stroke-width="2"/>
                    </svg>
                    </div>
                </div>

            </div>

         


            <div class="row">
                        <?php
                        // Check if Advanced Custom Fields (ACF) is active
                        if (function_exists('have_rows') && have_rows('image_cards')) {
                            // Loop through the repeater field
                            while (have_rows('image_cards')) {
                                the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $card_image = get_sub_field('card_image'); // Get the image URL

                        ?>
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card managing-trustee_item">
                            <div class="card-head">
                                <div class="managing-trustee_img-wrapper">
                                    <?php
                                     if ($card_image) {
                                        echo '<img height="281" width="311" src="' . esc_url($card_image) . '" class="card-img-top img-fluid managing-trustee_img rounded-4 p-2" alt="' . esc_attr($title) . ' Image">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?php echo esc_html($title); ?>
                                </h5>
                                <div>
                                    <?php echo esc_html($text); ?>
                                </div>
                            </div>
                        </div>
                        </div>

                        <?php
                            }
                        }
                        ?>
                    </div>


            </div>
            
        </div>

</section>



<?php
get_footer();