<?php
/**
 * Template Name: Extra Curricular Activities Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>




<section class="page_body">
    <div class="container">

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
                

                    <div  class="mb-4">
                    <?php echo get_field('page_text'); ?>
                    </div>
                
                </div>
            </div>            

            <div class="row container m-auto d-flex justify-content-center">
    <?php
    // Check if Advanced Custom Fields (ACF) is active and if the repeater field 'activities' exists
    if (function_exists('have_rows') && have_rows('activities')) {
        // Start the loop for the repeater field
        while (have_rows('activities')) {
            the_row(); // Advance the repeater loop

            $img_url = get_sub_field('img');
            $title = get_sub_field('title');
            $text = get_sub_field('text');

                  // Output the HTML structure for each card
                  echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">';
                  echo '<div class="flip-card">';
                  echo '<div class="flip-card-inner">';
                  echo '<div class="flip-card-front p-4 d-flex flex-column justify-content-around align-items-center h-100">';
                  echo '<div>';
                  echo '<div class="flip-card_img-wrapper mb-5 d-flex justify-content-center align-items-center">';
                  echo '<img  width="543" height="383" class="img-fluid" src="' . esc_url($img_url) . '" alt="' . esc_attr($title) . '">';
                  echo '</div>';
                  echo '<h5>' . esc_html($title) . '</h5>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="flip-card-back p-4 d-flex flex-column justify-content-center align-items-center">';
                  echo '<h5 class="mb-5">' . esc_html($title) . '</h5>';
                  echo '<div>';
                  echo '<p>' . esc_html($text) . '</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
        }
    }
    ?>
</div>




    </div>
</section>



<?php
get_footer();