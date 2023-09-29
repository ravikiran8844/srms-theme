<?php
/**
 * Template Name:Dress Code Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>



<section class="page_body">
    <div class="container">
            <div class="col-12 mb-5">
                        <div class="page_main-title"><?php echo  get_field('page_title'); ?></div>
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
    <?php
    // Check if Advanced Custom Fields (ACF) is active and if the repeater field 'text_blocks' exists
    if (function_exists('have_rows') && have_rows('text_blocks')) {
        // Start the loop for the 'text_blocks' repeater
        while (have_rows('text_blocks')) {
            the_row(); // Advance the repeater loop

            // Get the value of the 'header_content' field
            $header_content = get_sub_field('header_content');
            ?>
            <div class="card rk-card mb-5">
                <div class="card-header text-center">
                    <div><?php echo esc_html($header_content); ?></div>
                </div>
                <div class="card-body rk-card_body">
                    <?php
                    // Check if the repeater field 'dress_cards' exists within 'text_blocks'
                    if (have_rows('dress_cards')) {
                        // Start the loop for the 'dress_cards' repeater
                        while (have_rows('dress_cards')) {
                            the_row(); // Advance the repeater loop

                            // Get the value of the 'title' field
                            $card_title = get_sub_field('title');
                            ?>
                            <div class="row">
                                <div class="col-12 mb-5 mt-3 page_section-title"><?php echo esc_html($card_title); ?></div>
                                <?php
                                // Check if the repeater field 'dress_card' exists within 'dress_cards'
                                if (have_rows('dress_card')) {
                                    // Start the loop for the 'dress_card' repeater
                                    while (have_rows('dress_card')) {
                                        the_row(); // Advance the repeater loop

                                        // Get the values of the subfields 'image', 'title', and 'text'
                                        $image_url = get_sub_field('image');
                                        $card_item_title = get_sub_field('title');
                                        $card_item_text = get_sub_field('text');
                                        ?>
                                        <div class="col-12 col-lg-6 mb-4">
                                            <div class="card">
                                                <div class="card-body d-flex">
                                                    <div class="me-2 card-item-img">
                                                        <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($card_item_title); ?>">
                                                    </div>
                                                    <div>
                                                        <div class="card-item-title mb-2"><?php echo esc_html($card_item_title); ?></div>
                                                        <div class="card-item-text"><?php echo esc_html($card_item_text); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } // End 'dress_card' repeater loop
                                }
                                ?>
                            </div>
                        <?php } // End 'dress_cards' repeater loop
                    }
                    ?>
                </div>
            </div>
        <?php } // End 'text_blocks' repeater loop
    }
    ?>
</div>



            </div>











    



    </div>
</section>



<?php
get_footer();