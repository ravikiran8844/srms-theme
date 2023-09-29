<?php
/**
 * Template Name:Contact Us Page 
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
      



                <div class="row mb-5">
    <?php
    // Check if Advanced Custom Fields (ACF) is active and if the repeater field 'text_blocks' exists
    if (function_exists('have_rows') && have_rows('text_blocks')) {
        // Start the loop for the repeater field
        while (have_rows('text_blocks')) {
            the_row(); // Advance the repeater loop

            // Get the values of the subfields 'icon' and 'text'
            $img_url = get_sub_field('icon');
            $text = get_sub_field('text');

            // Output the values within your desired HTML structure
            echo '<div class="col-12 col-lg-4 mb-4">';
            echo '<div class="card contact-section_cards py-4">';
            echo '<div class="card-body d-flex align-items-center">';
            echo '<div class="contact-card_logo-wrapper me-2">';
            echo '<img src="' . esc_url($img_url) . '" alt="icon">';
            echo '</div>';
            echo '<div class="contact-section_cards-text">';
            echo esc_html($text); // Output the ACF text field here
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>




        <div class="row">
            <div class="col-12 card contact-form_card p-0">
                <div class="row">
                <div class="col-12 col-lg-6 p-5">
                    <div>
                        <div class="page_main-title">Get in Touch</div>

                        <div>
                        <?php
                            // Use the do_shortcode function to insert the WPForms shortcode
                            echo do_shortcode('[wpforms id="214" title="false"]');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="contact-page_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.833069079066!2d76.9844963!3d11.0229951!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8584852d84fb9%3A0x5780b00c830f238b!2sSri%20Ramakrishna%20Matric%20Higher%20Secondary%20School!5e0!3m2!1sen!2sin!4v1695837777196!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
                </div>

            </div>

        </div>

    </div>
</section>



<?php
get_footer();