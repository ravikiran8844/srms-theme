<?php
/**
 * Template Name:Fee Details Page 
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


                
                <div class="col-12">
                    <?php
                        $table = get_field( 'fee_details_table' );

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
      


                <div class="col-12 mt-5">
                    <?php
                        $text = get_field('content');
                    ?>

                    <div  class="custom-list-item">
                    <?php echo $text; ?>
                    </div>

                </div>



    </div>
</section>



<?php
get_footer();