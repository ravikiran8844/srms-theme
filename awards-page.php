<?php
/**
 * Template Name:Awards Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script> -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />



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


            <div class="row custom-accordion_section">
                <div class="col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php
                        // Check if Advanced Custom Fields (ACF) is active and if the repeater field 'photo_galleries' exists
                        if (function_exists('have_rows') && have_rows('photo_galleries')) {
                            // Start the loop for the repeater field
                            $accordion_index = 1; // Initialize an index for unique IDs
                            while (have_rows('photo_galleries')) {
                                the_row(); // Advance the repeater loop

                                // Get the value of the subfield 'gallery_name'
                                $gallery_name = get_sub_field('gallery_name');
                                $caption = get_sub_field('caption');

                                // Output the accordion item HTML
                                echo '<div class="accordion-item">';
                                echo '<h2 class="accordion-header">';
                                echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse' . $accordion_index . '" aria-expanded="false" aria-controls="flush-collapse' . $accordion_index . '">';
                                echo esc_html($gallery_name);
                                echo '</button>';
                                echo '</h2>';
                                echo '<div id="flush-collapse' . $accordion_index . '" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">';
                                echo '<div class="accordion-body">';

                                // Check if the 'caption' field is available and display it
                            if ($caption) {
                                echo '<div class="mt-3 mb-4 page_section-text">' . esc_html($caption) . '</div>';
                            }
                                echo '<div class="row photos">';
                                 


                                // Start the inner repeater loop for the 'gallery' field
                                if (have_rows('gallery')) {
                                    while (have_rows('gallery')) {
                                        the_row();

                                        // Get the values of the subfields 'image', 'name', 'prize', and 'class'
                                        $image_url = get_sub_field('image');
                                        $name = get_sub_field('name');
                                        $prize = get_sub_field('prize');
                                        $class = get_sub_field('class');

                                        // Output the image card HTML
                                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item text-center mb-4">';
                                        echo '<div class="image-card">';
                                        echo '<a href="' . esc_url($image_url) . '" data-lightbox="photos ' . $accordion_index . ' ">';
                                        echo '<img class="img-fluid" src="' . esc_url($image_url) . '"   alt="' . $name . ' ' . $prize .'">';
                                        if ($prize) {
                                            echo '<div class="image-title">' . esc_html($prize) . '</div>';
                                            }
                                            echo '</a>';
                                            echo '</div>';
                                            if ($name) {
    
                                            echo '<h5 class="my-2">' . esc_html($name) . '</h5>';
                                            }
                                            if ($class) {
    
                                            echo '<div class="student-class">' . esc_html($class) . '</div>';
                                           
                                             }
                                              echo '</div>';
                                    }
                                }

                                // Close the inner repeater and accordion body
                                echo '</div>'; // .row photos
                                echo '</div>'; // .accordion-body
                                echo '</div>'; // .accordion-collapse
                                echo '</div>'; // .accordion-item

                                // Increment the accordion index
                                $accordion_index++;
                            }
                        }
                        ?>




                    </div>
                </div>
            </div>
    </div>
</section>


<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<?php
get_footer();