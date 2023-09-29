<?php
/**
 * Template Name: Guidelines Page 
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
                    <div>
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


            

    <?php
    $guidelines = get_field('guidelines'); // Replace 'guidelines' with your ACF field name

    if ($guidelines) {
        $counter = 0; // Initialize a counter to track odd/even items

        foreach ($guidelines as $guideline) {
            $title = $guideline['title'];
            $text = $guideline['text'];
            $image = $guideline['image'];
            $counter++; // Increment the counter for each item

            // Check if the item is odd or even to add order classes
            $order_class = ($counter % 2 === 0) ? 'order-lg-1' : 'order-lg-0';

            // Output the HTML structure
            ?>
           <div class="col-12 p-2 mb-5">

            <div class="row guidelines-section_item">
                <div class="col-lg-5 p-0 <?php echo esc_attr($order_class); ?>">
                    <img width="543" height="383" class="guidelines-section_item-img img-fluid" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
                </div>
                <div class="col-lg-7 py-5 px-3 p-lg-5">
                    <div class="custom-list-item">
                        <div class="mb-4 section_sub-heading"><?php echo esc_html($title); ?></div>
                        
                        <?php echo $text; ?>

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
</section>



<?php
get_footer();