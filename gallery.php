<?php /*
Template Name: Gallery
Gallery template based on Advanced Custom Fields gallery field
with pagination and categories.
ACF Fields for this page are:
- gallery (Gallery field) -> contain all images
- categories (Repeater field) -> images divided into categories
-- name
-- nice_name (for the url)
-- gallery
 */

get_header();

//Get current cat, if empty show all images
?>

<style>
    img{
        width: 300px;
        height: 300px;
    }
</style>
<?php
$current_cat = get_query_var('category_name');

if (have_posts()) {
    while (have_posts()) {
        the_post();

        echo '<div class="gallery-wrapper">';

        //Get categories
        $cats = get_field('categories');

        //if this is gallery category subpage find out which one
        if ($current_cat) {
            foreach ($cats as $k=>$c) {
                if ($c['nice_name']==$current_cat) {
                    $current_gallery = $c['gallery'];
                }
            }
        }else {
            //otherwise show whole gallery
            $current_gallery = get_field('gallery');
        }

        //Setup pagination variables
        $images = array(); // Set images array for current page

        $items_per_page  = 4; // How many items we should display on each page
        $total_items = count($current_gallery); // How many items we have in total
        $total_pages = ceil($total_items / $items_per_page); // How many pages we have in total
        //Get current page
        if ( get_query_var( 'paged' ) ) {
            $current_page = get_query_var( 'paged' );
        }elseif ( get_query_var( 'page' ) ) {
            $current_page = get_query_var( 'page' );
        }else {
            $current_page = 1;
        }

        $starting_point = (($current_page-1)*$items_per_page); // Get starting point for current page

        // Get elements for current page
        if ($current_gallery) {
            $images = array_slice($current_gallery, $starting_point, $items_per_page);
        }

 

        echo '<div id="gallery-items">';
        $i = $starting_point;
        if ($images) {
            foreach ($images as $g) {
                echo '<img src="'.$g['url'].'" alt="'.$g['alt'].'">';
            }
        }
        echo '</div>';

        $big = 999999999; // need an unlikely integer
        $translated = __( 'Page', 'pixplus' ); // Supply translatable string
        $pagination = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
            ));
        if ($pagination) echo '<div class="pagination-wrapper">'.$pagination.'</div>';

        echo '</div>';
    }
}



get_footer();