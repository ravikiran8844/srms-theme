<?php
/* Template Name: Gallery Template */
get_header();
?>

<div class="container py-5">

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
    <div class="gallery">
   
    <div class="col-12 mb-5">
    <ul class="nav nav-tabs" id="gallery-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab">All</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="activities-tab" data-bs-toggle="tab" href="#activities" role="tab">Activities</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="classes-tab" data-bs-toggle="tab" href="#classes" role="tab">Classes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="facilities-tab" data-bs-toggle="tab" href="#facilities" role="tab">Facilities</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="events-tab" data-bs-toggle="tab" href="#events" role="tab">Events</a>
        </li>
    </ul>
    </div>


    <div class="col-12">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel">
            <div class="gallery-items" id="all-images">
                <?php
                // Retrieve images from ACF fields on the current page
                $activities_images = get_field('activities') ?: array();
                $classes_images = get_field('classes') ?: array();
                $facilities_images = get_field('facilities') ?: array();
                $events_images = get_field('events') ?: array();
                
                // Combine all images
                $all_images = array_merge($activities_images, $classes_images, $facilities_images, $events_images);
                
                // Initialize an array to store unique image IDs
                $unique_image_ids = array();
                
                // Initialize an array to store the final unique images
                $unique_images = array();
                
                foreach ($all_images as $image) {
                    // Get the image ID from the image array
                    $image_id = $image['ID'];
                
                    // Check if the image ID is unique
                    if (!in_array($image_id, $unique_image_ids)) {
                        // Add the image to the unique images array
                        $unique_images[] = $image;
                
                        // Add the image ID to the unique image IDs array
                        $unique_image_ids[] = $image_id;
                    }
                }
                
                // $unique_images now contains only the unique images with unique IDs
        
                echo '<ul class="row p-0" id="allImages">';
                foreach ($unique_images as $index => $image) {
                    echo '<li class="col-sm-6 col-md-4 col-lg-3 gallery-item text-center" id="all-image-' . $index . '">';
                    echo '<a href="' . esc_url($image['url']) . '" data-lightbox="all-images">';
                    echo '<img class="img-fluid gallery-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                    echo '<div class="gallery-image-title mb-5">' . esc_html($image['title']) . '</div>';
                    echo '</a>';
                    echo '</li>';
                }
                echo '</ul>';
                ?>
            </div>

        </div>

        <?php
        // Define an array for tab IDs and ACF field names
        $tab_data = array(
            'activities' => 'Activities',
            'classes' => 'Classes',
            'facilities' => 'Facilities',
            'events' => 'Events',
        );

        foreach ($tab_data as $acf_field => $tab_title) :
            $images = get_field($acf_field);
            if (!empty($images)) :
            ?>
               <div class="tab-pane fade" id="<?php echo $acf_field; ?>" role="tabpanel">
                    <ul class="gallery-items row p-0" id="tab-<?php echo $acf_field; ?>">
                        <?php
                        foreach ($images as $index => $image) {
                            echo '<li class="col-sm-6 col-md-4 col-lg-3 gallery-item text-center" id="' . $acf_field . '-image-' . $index . '">';
                            echo '<a href="' . esc_url($image['url']) . '" data-lightbox="' . $acf_field . '">';
                            echo '<img class="img-fluid gallery-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                            echo '<div class="gallery-image-title mb-5">' . esc_html($image['title']) . '</div>';
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>

            <?php
            endif;
        endforeach;
        ?>
    </div>

    </div>
</div>

    </div>

</div>






<script>
jQuery(document).ready(function($) {
    $('#allImages,#tab-activities,#tab-classes,#tab-facilities,#tab-events').paginate({
        // how many items per page
        perPage: 8,

        // boolean: scroll to the top of the container if a user clicks on a pagination link
        autoScroll: true,

        // which elements to target
        scope: '',

        // defines where the pagination will be displayed
        paginatePosition: ['bottom'],

        // Pagination selectors
        containerTag: 'nav',
        paginationTag: 'ul',
        itemTag: 'li',
        linkTag: 'a',

        // Determines whether or not the plugin makes use of hash locations
        useHashLocation: true,

        // Triggered when a pagination link is clicked
        onPageClick: function() {
            // Your custom code to handle page click event goes here
        }
    });
});

</script>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

<?php get_footer(); ?>