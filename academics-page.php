<?php
/**
 * Template Name:Academics Page 
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
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                    <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                </svg>
            </div>

        </div>



        <div class="row">

            <div class="col-12">
                <div class="card rk-card mb-5">
                    <div class="card-header text-center">
                        <div><?php echo  get_field('classes_title'); ?></div>
                    </div>
                    <div class="card-body rk-card_body pt-lg-5 px-lg-5">


                        <?php
    $classes = get_field('classes_cards'); // Replace 'guidelines' with your ACF field name

    if ($classes) {
        $counter = 0; // Initialize a counter to track odd/even items

        foreach ($classes as $class) {
            $title = $class['title'];
            $text = $class['text'];
            $image = $class['image'];
            $counter++; // Increment the counter for each item

            // Check if the item is odd or even to add order classes
            $order_class = ($counter % 2 === 0) ? 'order-lg-1' : 'order-lg-0';

            // Output the HTML structure
            ?>
                        <div class="col-12 p-2 mb-5">

                            <div class="row guidelines-section_item academics-card_body">
                                <div class="col-lg-5 p-0 <?php echo esc_attr($order_class); ?>">
                                    <img width="543" height="383" class="guidelines-section_item-img img-fluid"
                                        src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
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

            </div>











            <div class="row mb-5">
                <div class="col-12 mb-5">
                    <div class="page_main-title"><?php echo  get_field('cource_table_title'); ?></div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20"
                            fill="none">
                            <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                            <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                            <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                        </svg>
                    </div>

                </div>


                <!-- <div class="col-12">
                    <div class="card rk-card">
                        <div class="card-header text-center">
                            <div class="row text-center ">
                                <div class="col-6">
                                Group
                                </div>
                                <div class="col-6">
                                Subjects
                                </div>
                            </div>

                        </div>

                        <div class="card-body text-center p-0">
                            <div class="col-12 py-3 d-flex">
                                <div class="col-6">
                                Group 1                            </div>
                                <div class="col-6">
                                Business Maths & Statistics, Commerce, Accountancy, and Economics
                                </div>
                            </div>

                            <div class="col-12 py-3 d-flex"">
                                <div class="col-6">
                                Group 2
                                </div>
                                <div class="col-6">
                                Business Maths & Statistics, Commerce, Accountancy, and Economics
                                </div>
                            </div>


                            <div class="col-12 py-3 d-flex"">
                                <div class="col-6">
                                Group 3
                                </div>
                                <div class="col-6">
                                Business Maths & Statistics, Commerce, Accountancy, and Economics
                                </div>
                            </div>

                        </div>

                    </div>

                </div> -->


                <div class="col-12">
                    <?php
                        $table = get_field( 'cources_table' );

                        if ( ! empty ( $table ) ) {
                        
                            echo '<table class="table rk-table text-center">';
                        
                                if ( ! empty( $table['caption'] ) ) {
                        
                                    echo '<caption>' . $table['caption'] . '</caption>';
                                }
                        
                                if ( ! empty( $table['header'] ) ) {
                        
                                    echo '<thead class="table-header-bg table-danger">';
                        
                                        echo '<tr>';
                        
                                            foreach ( $table['header'] as $th ) {
                        
                                                echo '<th>';
                                                    echo $th['c'];
                                                echo '</th>';
                                            }
                        
                                        echo '</tr>';
                        
                                    echo '</thead>';
                                }
                        
                                echo '<tbody>';
                        
                                    foreach ( $table['body'] as $tr ) {
                        
                                        echo '<tr>';
                        
                                            foreach ( $tr as $td ) {
                        
                                                echo '<td>';
                                                    echo $td['c'];
                                                echo '</td>';
                                            }
                        
                                        echo '</tr>';
                                    }
                        
                                echo '</tbody>';
                        
                            echo '</table>';
                        }

                    ?>
                </div>

            </div>





            <div class="row">
                <div class="col-12 mb-5">
                    <div class="page_main-title"><?php echo  get_field('working_hours_table_title'); ?></div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20"
                            fill="none">
                            <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                            <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                            <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                        </svg>
                    </div>

                </div>





                <div class="col-12">
                    <?php
                        $table = get_field( 'working_hours_table' );

                        if ( ! empty ( $table ) ) {
                        
                            echo '<table class="table rk-table text-center">';
                        
                                if ( ! empty( $table['caption'] ) ) {
                        
                                    echo '<caption>' . $table['caption'] . '</caption>';
                                }
                        
                                if ( ! empty( $table['header'] ) ) {
                        
                                    echo '<thead class="table-header-bg table-danger">';
                        
                                        echo '<tr>';
                        
                                            foreach ( $table['header'] as $th ) {
                        
                                                echo '<th>';
                                                    echo $th['c'];
                                                echo '</th>';
                                            }
                        
                                        echo '</tr>';
                        
                                    echo '</thead>';
                                }
                        
                                echo '<tbody>';
                        
                                    foreach ( $table['body'] as $tr ) {
                        
                                        echo '<tr>';
                        
                                            foreach ( $tr as $td ) {
                        
                                                echo '<td>';
                                                    echo $td['c'];
                                                echo '</td>';
                                            }
                        
                                        echo '</tr>';
                                    }
                        
                                echo '</tbody>';
                        
                            echo '</table>';
                        }

                    ?>
                </div>

            </div>












        </div>
</section>



<?php
get_footer();