<?php
/**
 * Template Name: About Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */


get_header();

?>




<section class="page_body">
    <div class="container">
        <div class="row">
            <div class="col-12">
           
            <?php
                    // Check if Advanced Custom Fields (ACF) is active
                    if (function_exists('get_field')) {
                        $pageMainTitle = get_field('page_main_title');
                        $pagedescription = get_field('page_description');

                        if ($pageMainTitle) {
                            echo '<div class="page_main-title">' . esc_html($pageMainTitle) . '</div>';
                        }

                        echo '<div>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                        <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                        <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                        <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                      </svg>';
                        
                        echo '</div>';

                        if ($pagedescription) {
                            echo '<div class="page_body-text mt-5">' . esc_html($pagedescription) . '</div>';
                        }
                    }
                    ?>
            </div>
        </div>

<div class="row my-5 about_section2_items">
    <?php
    // Check if Advanced Custom Fields (ACF) is active and if the repeater field 'text_blocks' exists
    if (function_exists('have_rows') && have_rows('counter_blocks')) {
        // Start the loop for the repeater field
        $counterIndex = 0;
        while (have_rows('counter_blocks')) {
            the_row(); // Advance the repeater loop

            // Get the values of the subfields 'title' and 'text'
            $title = get_sub_field('number');
            $text = get_sub_field('text');

            // Get the number from the ACF field and ensure it's an integer
            $number = intval($title);

            // Determine the symbol to use based on the text field
            $symbol = ($text === 'Pass Rate') ? '%' : '+';

            // Output the values within your desired HTML structure
            echo '<div class="col-12 col-md-3 mb-4">';
            echo '<div class="about_section2_item">';
            echo '<div class="about_section2_item-title counter-' . $counterIndex . '">' . esc_html($title) . $symbol . '</div>';
            echo '<div class="about_section2_item-text">' . esc_html($text) . '</div>';
            echo '</div>';
            echo '</div>';

            // Use JavaScript/jQuery to update the counter dynamically
            echo '<script type="text/javascript">
                jQuery(document).ready(function($) {
                    var number' . $counterIndex . ' = ' . $number . ';
                    var counterElement' . $counterIndex . ' = $(".counter-' . $counterIndex . '");
                    var counter' . $counterIndex . ' = 0;
                    var interval' . $counterIndex . ' = setInterval(function() {
                        counterElement' . $counterIndex . '.text(counter' . $counterIndex . ' + "' . $symbol . '");
                        counter' . $counterIndex . '++;
                        if (counter' . $counterIndex . ' > number' . $counterIndex . ') {
                            clearInterval(interval' . $counterIndex . ');
                            // Set the final value after animation completes
                            counterElement' . $counterIndex . '.text(number' . $counterIndex . ' + "' . $symbol . '");
                        }
                    }, 10); // Update every 10 milliseconds (adjust the interval as needed for speed)
                });
                </script>';
            
            $counterIndex++;
        }
    }
    ?>
</div>




<div class="row mb-5">
    <?php
    // Get ACF values
    $counter_section = get_field('counter_section');
    
    if ($counter_section) {
        $years_of_experience = $counter_section['years_of_experience'];
        $staff = $counter_section['staff'];
        $students = $counter_section['students'];
        $pass_rate = $counter_section['pass_rate'];
    } else {
        // Handle the case where the ACF field is empty or not found
        $years_of_experience = 0;
        $staff = 0;
        $students = 0;
        $pass_rate = 0;
    }
    ?>

    <div class="col-md-3 counter-card-item">
        <h2 class="about_section2_item-title"><span class="counter"><?php echo esc_html($years_of_experience); ?></span>+</h2>
        <h3 class="about_section2_item-text">Years of experience</h3>
    </div>

    <div class="col-md-3 counter-card-item">
        <h2 class="about_section2_item-title"><span class="counter"><?php echo esc_html($staff); ?></span>+</h2>
        <h3 class="about_section2_item-text">Staff</h3>
    </div>

    <div class="col-md-3 counter-card-item">
        <h2 class="about_section2_item-title"><span class="counter"><?php echo esc_html($students); ?></span>+</h2>
        <h3 class="about_section2_item-text">Students</h3>
    </div>

    <div class="col-md-3 counter-card-item">
        <h2 class="about_section2_item-title"><span class="counter"><?php echo esc_html($pass_rate); ?></span>%</h2>
        <h3 class="about_section2_item-text">Pass Rate</h3>
    </div>
</div>




        <div class="row mb-5">
            <div class="col-12">

                            <?php
                // Check if Advanced Custom Fields (ACF) is active and if the field 'section_image' exists
                if (function_exists('get_field') && get_field('section_image')) {
                    $image = get_field('section_image'); // Get the image URL

                    // Output the image with the appropriate HTML markup
                    echo '<div class="about_section3_img-wrapper">';
                    echo '<img width="1502" height="664"  src="' . esc_url($image) . '" class="img-fluid about_section3_img rounded-5" alt="">';
                    echo '</div>';
                }
                ?>

            </div>

        </div>

        <div class="row">
        <?php
// Check if Advanced Custom Fields (ACF) is active and if the repeater field 'text_&_info_multi_block_sections' exists
if (function_exists('have_rows') && have_rows('text_&_info_multi_block_sections')) {
    // Start the loop for the repeater field
    while (have_rows('text_&_info_multi_block_sections')) {
        the_row(); // Advance the repeater loop

        // Get the values of the subfields 'title' and 'text'
        $title = get_sub_field('title');
        $text = get_sub_field('text');

        // Output the values within your desired HTML structure
        echo '<div class="col-12 col-md-6 mb-4">';
        echo '<div class="about_section4-item">';
        echo '<div class="mb-4">';
        echo '<div class="page_section-title">' . esc_html($title) . '</div>';
        echo '<div>';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                </svg>';
        echo '</div>';
        echo '</div>';
        echo '<div class="page_section-text">' . esc_html($text) . '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

    

        </div>
    </div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

<script>
$('.counter').counterUp({
  delay: 10,
  time: 3000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');
</script>



<?php
get_footer();